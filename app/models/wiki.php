<?php
class Wiki
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getWiki()
    {
        $this->db->query("SELECT * FROM wiki");
        $result = $this->db->fetchAll();
        return $result ;
    }    public function getTopWiki()
    {
        $this->db->query("SELECT *from wiki limit 3");
        $result = $this->db->fetchAll();
        return $result ;
    }

}