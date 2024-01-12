<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUserByEmail($email) 
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(":email", $email);
        $this->db->execute();
        if($this->db->rowCount()){
            return $this->db->fetch();

        }
          
        else
            return false;
    }
    public function signUser($username, $email, $password)
    {
        $this->db->query('INSERT INTO users(username,email,Password) VALUES (:username,:email,:password)');
        $this->db->bind(':username',$username);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        if ($this->db->execute())
            return true;
        else
            return false;
    }

}