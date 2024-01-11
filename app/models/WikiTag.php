<?php
class WikiTag
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert($idWiki,$idTag)
    {
        $this->db->query('INSERT INTO `wikitags`(`wiki_id`, `tag_id`) VALUES (:idWiki,:idTag)');
        $this->db->bind(':idWiki', $idWiki);
        $this->db->bind(':idTag', $idTag);
        return $this->db->execute();
    }
}