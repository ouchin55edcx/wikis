<?php
class Pages extends Controller
{
    private $categoryModel;
    private $wikiModel;
    function __construct() {
        $this->categoryModel = $this->model('category');
        $this->wikiModel = $this->model('wiki');
    }
    public function home()
    {
        $categories =  $this->categoryModel->getCategories();
        $wiki = $this->wikiModel->getWiki();
        $data = [   
            'categories' => $categories,
            'wiki' => $wiki
        ];
        $this->view('home',$data);
    }


    public function notfound()
    {
        $this->view('404');
    }

    public function dashboard() {
        $categories =  $this->categoryModel->getCategories();
        $data = [   
            'categories' => $categories
        ];
        $this->view('dashboard',$data);
    }

}
