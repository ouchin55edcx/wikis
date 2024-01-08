<?php

class CategoriesController {
    public function getAllWiki(){
        $wikis = CategoriesModel::getAll();
        return $wikis;
    }
    public function insertCategory(){
        if ($_SERVER["REQUEST_METHOD"] == "POST" )  {
            if(isset($_POST['submit'])){
                echo 'test';die;  
                $name = $_POST["name"]; 
                CategoriesModel::insert($name);

                header("Location: dashboard"); 
                exit();
            }
            
        }
    }

    
}

?>