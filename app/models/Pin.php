<?php
class Pin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPinById($userid)
    {
        $this->db->query("SELECT * FROM pins WHERE userid = :userid;");
        
        $this->db->bind(':userid', $userid);

        $results = $this->db->resultset();

        return $results;
    }
}