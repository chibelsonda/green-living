<?php
class User
{

    private $db;
    private $matrix = 2;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Add User / Register
    public function register($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO users (name, email, password)
                          VALUES (:name, :email, :password)');

        // Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Find USer BY Email
    public function findUserByEmail($email)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check Rows
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Login / Authenticate User
    public function login($email, $password)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Find User By ID
    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function getDownlines($referralId)
    {
        $this->db->query("SELECT * FROM users WHERE referralId = :referralId;");

        $this->db->bind(':referralId', $referralId);

        $results = $this->db->resultset();

        return $results;
    }

    public function hasDownline($referralId)
    {
        $this->db->query("SELECT * FROM users WHERE referralId = :referralId;");
        $this->db->bind(':referralId', $referralId);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($data)
    {
        // Prepare Query
        $this->db->query('UPDATE users
                          SET name = :name, email = :email, contact = :contact, address = :address,
                                  referralId = :referralId, rootId = :rootId
                          WHERE id = :id');
        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':referralId',$data['referralId']);
        $this->db->bind(':rootId', $data['rootId']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function checkRefId($id, $referralId = 0)
    {
        $this->db->query('SELECT id, rootId, COUNT(referralId) AS cpId
                          FROM users
                          WHERE referralId = :referralId
                               AND id <> :id;');

        $this->db->bind(':referralId', $referralId);
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        if ($row->cpId >= $this->matrix) {
            return $this->getRefId($row->rootId);
        }

        return $referralId;
    }

    private function getRefId($rootId = 0)
    {
        $this->db->query('SELECT person.id, person.email,
							 COUNT(child.id) AS numberOfChildren
                          FROM users AS person
						  LEFT JOIN users AS child ON person.id = child.referralId
						  WHERE person.rootId = :rootId
						  GROUP BY person.id
                          HAVING numberOfChildren < :matrix LIMIT 1;');

        $this->db->bind(':rootId', $rootId);
        $this->db->bind(':matrix', $this->matrix);

        $ref = $this->db->single();

        return $ref->id;
    }

    public function getRootId($referralId)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id;');

        $this->db->bind(':id', $referralId);

        $ref = $this->db->single();

        if ($this->db->rowCount() > 0) {
            $rootId = $ref->rootid == 0 ? $ref->id : $ref->rootid;     
            return $rootId;
        }

        return $referralId;
    }

    public function getUserByEmail($email)
    {
        $this->db->query("SELECT *
                          FROM users
                          WHERE email = :email;");

        $this->db->bind(':email', $email);

        $row = $this->db->single();

        return $row;
    }
}
