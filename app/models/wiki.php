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
        $this->db->query("SELECT * FROM wiki ");
        $result = $this->db->fetchAll();
        return $result;
    }

    public function getWikiForAdmin()
    {
        $this->db->query("SELECT * FROM wikia ");
        $result = $this->db->fetchAll();
        return $result;
    }
    public function getWikiByCategoryId($id)
    {
        $this->db->query("SELECT * FROM `wiki` WHERE `category_id`=:category_id");
        $this->db->bind(":category_id", $id);
        $result = $this->db->fetchAll();
        return $result;
    }

    public function getTopWiki()
    {
        $this->db->query("SELECT * from wiki limit 3");
        $result = $this->db->fetchAll();
        return $result;
    }


    public function insertWiki($title, $content, $wikiImg, $category, $user_id)
    {
        $this->db->query('INSERT INTO Wikis (title, content, wikImage, category_id, `user_id`) VALUES (:title, :content, :wikiImg, :category, :user_id)');
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':wikiImg', $wikiImg);
        $this->db->bind(':category', $category);
        $this->db->bind(':user_id', $user_id);
        return $this->db->execute();
    }
    public function getLastWiki()
    {
        $this->db->query("SELECT * from wikis ORDER BY wiki_id DESC limit 1");
        $result = $this->db->fetch();
        return $result;
    }

    public function getWikiById($id)
    {
        $this->db->query("SELECT * from wikis WHERE wiki_id = :wiki_id");
        $this->db->bind(':wiki_id', $id);
        $result = $this->db->fetch();
        return $result;
    }

    public function updateWikiImage($image, $id)
    {
        $this->db->query("UPDATE `wikis` SET `wikImage`=:image WHERE `wiki_id` = :id");
        $this->db->bind(':image', $image);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
    public function updateWikiSansImage($title, $content, $category_id, $wiki_id)
    {
        $this->db->query("UPDATE `wikis` SET `title`=:title,`content`=:content,`category_id`=:category_id WHERE`wiki_id`=:wiki_id");
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':category_id', $category_id);
        $this->db->bind(':wiki_id', $wiki_id);
        $this->db->execute();
    }
    public function RestoreWiki($wiki_id)
    {
        $this->db->query("UPDATE Wikis SET is_deleted = 0 WHERE wiki_id = :wiki_id;
        ");
        $this->db->bind(':wiki_id', $wiki_id);
        $this->db->execute();
    }
    public function ArchWiki($wiki_id)
    {
        $this->db->query("UPDATE Wikis SET is_deleted = 1 WHERE wiki_id = :wiki_id;
        ");
        $this->db->bind(':wiki_id', $wiki_id);
        $this->db->execute();
    }
    public function wikiCount()
    {
        $this->db->query("SELECT * FROM wikis ");
        $result = $this->db->rowCount();
        return $result;
    }
    public function Delete($id)
    {
        $this->db->query("DELETE FROM wikis WHERE `wikis`.`wiki_id` = :wiki_id ");
        $this->db->bind(':wiki_id', $id);
        $result = $this->db->fetch();
        return $result;
    }


    public function searchWiki($searchTerm)
    {
        $this->db->query("
            SELECT * FROM wiki 
            WHERE category_name LIKE :searchTerm 
            OR tag_names LIKE :searchTerm 
            OR title LIKE :searchTerm
        ");
        $this->db->bind(':searchTerm', "%$searchTerm%");
    
        return $this->db->FetchAll();
    }

}
