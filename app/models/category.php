<?php
class Category
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCategories()
    {
        $this->db->query("SELECT * FROM Categories ORDER BY created_at DESC, updated_at DESC");
        $result = $this->db->fetchAll();
        return $result ;
    }
    public function getTopCategories()
    {
        $this->db->query("SELECT * FROM Categories ORDER BY created_at DESC, updated_at DESC limit 3");
        $result = $this->db->fetchAll();
        return $result ;
    }

    public function getCategoryById($id) {
        $this->db->query("SELECT * FROM Categories WHERE category_id = :category_id");
        $this->db->bind(':category_id',$id);
        $result = $this->db->fetch();
        return $result ;
    }
    public function update($id,$catName) {
        $this->db->query("UPDATE `categories` SET `category_name`=:category_name WHERE `category_id` = :category_id");
        $this->db->bind(':category_name',$catName);
        $this->db->bind(':category_id',$id);
        $this->db->execute();
    }
    public function Delete($id) {
        $this->db->query("DELETE FROM `categories` WHERE `category_id`=:category_id");
        $this->db->bind(':category_id',$id);
        $result = $this->db->fetch();
        return $result ;
    }
    public function insert($catName) {
        $this->db->query("INSERT INTO `categories`(`category_name`) VALUES (:category_name)");
        $this->db->bind(':category_name',$catName);
        $this->db->execute();
    }

    public function categoryCount() {
        $this->db->query("SELECT * FROM Categories ");
        $result = $this->db->rowCount();
        return $result ;
        
    }
}