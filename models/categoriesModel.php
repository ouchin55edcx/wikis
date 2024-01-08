<?php

class CategoriesModel {
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT *
        FROM Categories
        ORDER BY created_at DESC, updated_at DESC');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor(); 
        return $result;
    }

    static public function insert($name) {
        $stmt = DB::connect()->prepare('INSERT INTO Categories (category_name) VALUES (:name)');
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $stmt->closeCursor();
    }
}

