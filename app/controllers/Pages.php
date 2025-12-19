<?php
class Pages extends Controller
{
    private $allowedTags = '<strong><i><a><img><br>
                            <li><ul><ol><blockquote>
                            <h1><h2><h3><h4><h5><h6>';

    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }

    // Load Homepage
    public function index()
    {
        // If logged in, redirect to posts
        //if(isset($_SESSION['user_id'])){
        // redirect('posts');
        //}

        $data = $this->getCompanyDetails();

        $this->view('pages/index',  $data);
    }

    public function show($title)
    {
        $page = $this->pageModel->getPageByTitle($title);
        //Set Data
        $data = [
            'page' => $page
        ];

        $this->view('pages/content', $data);
    }

    public function about()
    {
        $data = $this->getCompanyDetails();

        $this->view('pages/about', $data);
    }

    public function contact()
    {
        $data = $this->getCompanyDetails();

        $this->view('pages/contact', $data);
    }

    public function products()
    {
        $data = $this->getCompanyDetails();

        $this->view('pages/products',  $data);
    }

    private function getCompanyDetails()
    {
        $companyProfile = $this->pageModel->getPageByTitle('companyProfile');
        $vision = $this->pageModel->getPageByTitle('vision');
        $mission = $this->pageModel->getPageByTitle('mission');

        $data = [
            'companyProfile' => $companyProfile,
            'vision' =>  $vision,
            'mission' => $mission
        ];

        return  $data;
    }

    public function list()
    {
        $pages = $this->pageModel->getPages();
        $data = [ 'pages' => $pages ];

        $this->view('pages/list', $data);
    }

    public function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => strip_tags(stripslashes(trim($_POST['body'])), $this->allowedTags),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];

            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter name';
                if (empty($data['body'])) {
                    $data['body_err'] = 'Please enter the page body';
                }
            }

            // Make sure there are no errors
            if (empty($data['title_err']) && empty($data['body_err'])) {
                // Validation passed
                //Execute
                if ($this->pageModel->addPage($data)) {
                    // Redirect to login
                    flash('page_added', 'Page Added');
                    redirect('pages/list');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('pages/add', $data);
            }

        } else {
            $data = [
                'title' => '',
                'body' => '',
                'title_err' => '',
                'body_err' => ''
            ];

            $this->view('pages/add', $data);
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => strip_tags(stripslashes(trim($_POST['body'])), $this->allowedTags),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];

            // Validate email
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter name';
                // Validate name
                if (empty($data['body'])) {
                    $data['body_err'] = 'Please enter the page body';
                }
            }

            // Make sure there are no errors
            if (empty($data['title_err']) && empty($data['body_err'])) {
                // Validation passed
                //Execute
                if ($this->pageModel->updatePage($data)) {
                    // Redirect to login
                    flash('page_message', 'Page Updated');
                    redirect('pages/list');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('pages/edit', $data);
            }

        } else {
            $page = $this->pageModel->getPageById($id);

            // Check for owner
            if ($page->user_id != $_SESSION['user_id']) {
                redirect('pages');
            }

            $data = [
                'id' => $id,
                'title' => $page->title,
                'body' => $page->body,
                'title_err' => '',
                'body_err' => ''
            ];

            $this->view('pages/edit', $data);
        }
    }
}
