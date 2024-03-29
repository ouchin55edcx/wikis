<?php

//the database connections

class Database
{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $db_name = DB_NAME;

    private $pdo;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . "; dbname=" . $this->db_name;
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            die("there is an issue: " . $e->getMessage());
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {

        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = pdo::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = pdo::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = pdo::PARAM_NULL;
                    break;
                default:
                    $type = pdo::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() : bool
    {
        return $this->stmt->execute();
    }

    //fetch data

    public function fetchAll()
    {
        $this->stmt->execute();
        $results = $this->stmt->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function fetch()
    {
        $this->stmt->execute();
        $result = $this->stmt->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    //row Count
    public function rowCount()
    {
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }
    public function fetchColumn()
    {
        return $this->stmt->fetchColumn();
    }
}
