<?php 

class indexController{

    public function  index($page){
        $data = new CategoriesController();
        $wiki = $data->getAllWiki();

        require_once('views/'.$page.'.php' );
    }

}










?>