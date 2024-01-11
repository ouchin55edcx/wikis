<?php


class WikiController extends Controller{

    private $wikiModel;
    function __construct() {
        $this->wikiModel = $this->model('wiki');
    }


    public function InsertWiki(){
        echo '<pre>';var_dump($_POST);die;
    }

}

?>