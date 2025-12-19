<?php
class Page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPageByTitle($title)
    {
        $this->db->query("SELECT * FROM pages WHERE urlParameter = :urlParameter;");

        $this->db->bind(':urlParameter', $title);

        $row = $this->db->single();

        return $row;
    }

    public function getPages()
    {
        $this->db->query("SELECT *
                          FROM pages
                          ORDER BY title;");

        $results = $this->db->resultset();

        return $results;
    }

    public function addPage($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO pages (title, user_id, body, urlParameter)
                          VALUES (:title, :user_id, :body, :urlParameter)');
        
        $urlParameter = str_replace(' ', '', $data['title']);

        // Bind Values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':urlParameter', $urlParameter);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPageById($id)
    {
        $this->db->query("SELECT * FROM pages WHERE id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updatePage($data)
    {
        // Prepare Query
        $this->db->query('UPDATE pages SET title = :title, body = :body WHERE id = :id');

        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}