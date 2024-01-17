<?php
class Tag
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTag()
    {
        $this->db->query("SELECT * FROM tags ORDER BY created_at DESC, updated_at DESC");
        $result = $this->db->fetchAll();
        return $result ;
    }
    public function getAllTag()
    {
        $this->db->query("SELECT * FROM tags ");
        $result = $this->db->fetchAll();
        return $result ;
    }

    public function insert($tagName) {
        $this->db->query("INSERT INTO `tags`(`tag_name`) VALUES (:tag_name)");
        $this->db->bind(':tag_name',$tagName);
        $this->db->execute();
    }

    public function getTagById($id) {
        $this->db->query("SELECT * FROM tags WHERE tag_id = :tag_id");
        $this->db->bind(':tag_id',$id);
        $result = $this->db->fetch();
        return $result ;

    }

    public function update($id,$tagName) {
        $this->db->query("UPDATE `tags` SET `tag_name`=:tag_name WHERE `tag_id` = :tag_id");
        $this->db->bind(':tag_name',$tagName);
        $this->db->bind(':tag_id',$id);
        $this->db->execute();
    }

    public function Delete($id) {
        $this->db->query("DELETE FROM `tags` WHERE `tag_id`=:tag_id");
        $this->db->bind(':tag_id',$id);
        $result = $this->db->fetch();
        return $result ;
    }



}