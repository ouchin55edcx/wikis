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
        $this->db->query("SELECT Wikis.*, Users.username, Users.usrImage, Categories.category_name FROM Wikis JOIN Users ON Wikis.user_id = Users.user_id JOIN Categories ON Wikis.category_id = Categories.category_id ORDER BY Wikis.created_at limit 3");
        $result = $this->db->fetchAll();
        return $result ;
    }

    
}