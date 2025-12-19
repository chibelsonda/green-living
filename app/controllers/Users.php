<?php
class Users extends Controller
{
    private $level = 5;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        if (!$this->isLoggedIn()) {
            $this->login();
        }

        if (isset($_SESSION['user_role'])) {
            if ($_SESSION['user_role'] == "admin") {
                $this->view('admin/index');
            } else {
                $this->view('user2/index');
            }
        }
    }

    public function register()
    {
        // Check if logged in
        if ($this->isLoggedIn()) {
            redirect('user');
        }

        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter an email';
                // Validate name
                if (empty($data['name'])) {
                    $data['name_err'] = 'Please enter a name';
                }
            } else {
                // Check Email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken.';
                }
            }

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a password.';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must have atleast 6 characters.';
            }

            // Validate confirm password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password.';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Password do not match.';
                }
            }

            // Make sure errors are empty
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // SUCCESS - Proceed to insert

                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Execute
                if ($this->userModel->register($data)) {
                    // Redirect to login
                    flash('register_success', 'You are now registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load View
                $this->view('users/register2', $data);
            }
        } else {
            // IF NOT A POST REQUEST

            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            // Load View
            $this->view('users/register2', $data);
        }
    }

    public function login()
    { 
        if ($this->isLoggedIn()) {
            redirect('users');
        }

        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // Check for email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email.';
            }

            // Check for name
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name.';
            }

            // Check for user
            if ($this->userModel->findUserByEmail($data['email'])) {
                // User Found
            } else {
                // No User
                $data['email_err'] = 'This email is not registered.';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {

                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    // User Authenticated!
                    $this->createUserSession($loggedInUser);

                } else {
                    $data['password_err'] = 'Password incorrect.';
                    // Load View
                    $this->view('users/login2', $data);
                }

            } else {
                // Load View
                $this->view('users/login2', $data);
            }

        } else {
            // If NOT a POST

            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load View
            $this->view('users/login2', $data);
        }
    }

    // Create Session With User Info
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_role'] = $user->role;

        if ($user->role == "admin") {
            $this->view('admin/index');
        } else {
            $this->view('users2/index');
        }
    }

    // Logout & Destroy Session
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_role']);
        session_destroy();
        redirect('users/login');
    }

    // Check Logged In
    public function isLoggedIn()
    {
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }

    public function profile($id)
    {
        // Get post from model
        $user = $this->userModel->getUserById($id);

        $referral = $this->userModel->getUserById($user->referralid);

        $data = [
            'id' => $id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'confirm_password' => $user->password,
            'contact' => $user->contact,
            'address' => $user->address,
            'refEmail' => is_object($referral) ? $referral->email : null,
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
            'contact_err' => '',
            'address_err' => '',
            'refEmailErr' => '',
        ];

        $this->view('users2/profile', $data);
    }

    public function update($id)
    {
        // Sanitize POST
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $referral = $this->userModel->getUserByEmail($_POST['refEmail']);

        if (is_object($referral)) {
            $referralId = $_POST['email'] == $referral->email ?
            0 : $this->userModel->checkRefId($id, $referral->id);
            $rootId = $this->userModel->getRootId($referralId);
        } else {
            $referralId = "";
            $rootId = "";
        }

        $data = [
            'id' => $id,
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            //'password' => trim($_POST['password']),
            //'confirm_password' => trim($_POST['confirm_password']),
            'contact' => trim($_POST['contact']),
            'address' => trim($_POST['address']),
            'refEmail' => trim($_POST['refEmail']),
            'referralId' => $referralId,
            'rootId' => $rootId,
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
            'contact_err' => '',
            'address_err' => '',
            'refEmailErr' => '',
        ];

        if (empty($referral->email)) {
            $data['refEmailErr'] = 'Reference e-mail address does not exists.';
        }

        if (empty($data['refEmailErr'])) {
            //Execute
            if ($this->userModel->updateUser($data)) {
                // Redirect to login
                flash('user_message', 'User Updated');
                redirect('user');
            } else {
                die('Something went wrong');
            }
        } else {

            $this->view('users2/profile', $data);
        }
    }

    public function btree($id)
    {
        $user = $this->userModel->getUserById($id);

        $data = 'data.addRows([';
        $data .= '[{v:\'' . $user->id . '\',f:\'<i class="fa fa-user fa-3x"></i><br>' . $user->email . '<br><a  href="'
        . $user->email . '"> New </a> \'},\'' . $user->referralid . '\',\'' . $user->email . '\'],';

        if ($this->userModel->hasDownline($user->id)) {
            $r = $this->tree($user->id);
            foreach ($r as $row) {
                $data .= '[{v:\'' . $row['id'] . '\',f:\'<i class="fa fa-user fa-3x"></i><br><a class="link"  title="downlink show" href="'
                    . $row['id'] . '">' . $row['email'] . '</a><br><a  href="'
                    . $row['email'] . '">New</a> <a  href="' . $row['email'] . '">&nbsp|&nbspEdit&nbsp|&nbsp</a> <a href="'
                    . $row['email'] . '">Del</a>\'},\'' . $row['referralid'] . '\',\'' . $row['email'] . '\'],';
            }
        }

        $data .= ']);';

        $this->view('users/btree', ['data' => $data]);
    }

    private function tree($id = 1, $counter = 0)
    {
        $downlines = $this->userModel->getDownlines($id);
        $counter++;
        if ($counter < $this->level) {
            foreach ($downlines as $downline) {
                if ($downline->id != $downline->referralid) {
                    $this->tree[] = array("id" => $downline->id,
                        "referralid" => $downline->referralid,
                        "email" => $downline->email);

                    $this->tree = self::tree($downline->id, $counter);
                }
            }
        }
        return $this->tree;
    }
}
