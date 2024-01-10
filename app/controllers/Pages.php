<?php
class Pages extends Controller
{
    private $categoryModel;
    private $wikiModel;
    private $tag;
    function __construct() {
        $this->categoryModel = $this->model('category');
        $this->wikiModel = $this->model('wiki');
        $this->tag = $this->model('tag');
    }
    public function home()
    {
        $categories =  $this->categoryModel->getTopCategories();
        $wiki = $this->wikiModel->getTopWiki();
        $data = [   
            'categories' => $categories,
            'wiki' => $wiki
        ];
        $this->view('home',$data);
    }
    public function wiki()
    {
        $wiki = $this->wikiModel->getWiki();
        $categories =  $this->categoryModel->getCategories();
        $data = [   
            
            'categories' => $categories,
            'wiki' => $wiki
        ];
        $this->view('wiki',$data);
    }
    public function category()
    {
        $categories =  $this->categoryModel->getCategories();
        $data = [   
            'categories' => $categories,
        ];
        $this->view('category',$data);
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
    public function writeWiki() {
        $this->view('writeWiki');
    }
    public function tag() {
        $tag = $this->tag->getTag();
        $data = [   
            'tag' => $tag
        ];
        $this->view('tag',$data);

    }


}
