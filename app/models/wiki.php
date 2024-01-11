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
    }    
    public function getWikiByCategoryId($id)
    {
        $this->db->query("SELECT * FROM `wiki` WHERE `category_id`=:category_id");
        $this->db->bind(":category_id",$id);
        $result = $this->db->fetchAll();
        return $result ;
    }    
    public function getTopWiki()
    {
        $this->db->query("SELECT *from wiki limit 3");
        $result = $this->db->fetchAll();
        return $result ;
    }

    public function insertWiki($title, $content, $wikiImg, $category, $user_id)
    {
        $this->db->query('INSERT INTO Wikis (title, content, wikImage, category_id, user_id) VALUES (:title, :content, :wikiImg, :category, :user_id)');
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':wikiImg', $wikiImg);
        $this->db->bind(':category', $category);
        $this->db->bind(':user_id', $user_id);
        return $this->db->execute();
    }
    public function getLastWiki() {
        $this->db->query("SELECT * from wikis ORDER BY wiki_id DESC limit 1");
        $result = $this->db->fetch();
        return $result ;
    }

    // public function getWikiById($id)  {
    
        
    // }

}