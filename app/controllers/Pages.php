<?php
class Pages extends Controller
{
    private $categoryModel;
    private $wikiModel;
    private $tagModel;
    function __construct() {
        $this->categoryModel = $this->model('category');
        $this->wikiModel = $this->model('wiki');
        $this->tagModel = $this->model('tag');
    }
    public function home()
    {
        $wikisCorrect = [];
        $wikis = $this->wikiModel->getWiki();
        foreach ($wikis as $wiki) {
            $tagNamesWithVergule = $wiki -> tag_names;
            $tagNameArray = explode(', ',$tagNamesWithVergule);
            $wiki->tag_names = $tagNameArray;
            array_push($wikisCorrect,$wiki);
        }
        $categories =  $this->categoryModel->getTopCategories();
        $data = [   
            
            'categories' => $categories,
            'wiki' => $wikisCorrect
        ];
        $this->view('home',$data);
    }
    public function wiki()
    {
        $wikisCorrect = [];
        $wikis = $this->wikiModel->getWiki();
        foreach ($wikis as $wiki) {
            $tagNamesWithVergule = $wiki -> tag_names;
            $tagNameArray = explode(', ',$tagNamesWithVergule);
            $wiki->tag_names = $tagNameArray;
            array_push($wikisCorrect,$wiki);
        }
        $categories =  $this->categoryModel->getCategories();
        $data = [   
            
            'categories' => $categories,
            'wiki' => $wikisCorrect
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
        $categories =  $this->categoryModel->getCategories();
        $tag = $this->tagModel->getAllTag();


        $data = [   
            'categories' => $categories,
            'tag' => $tag
        ];
        $this->view('writeWiki',$data);
    }
    public function tag() {
        $tag = $this->tagModel->getTag();
        $data = [   
            'tag' => $tag
        ];
        $this->view('tag',$data);

    }
    public function categorieCnt($id) {

        $wikisCorrect = [];
        $wikis = $this->wikiModel->getWikiByCategoryId($id);
        $Category_name = $this->categoryModel->getCategoryById($id)->category_name;
        foreach ($wikis as $wiki) {
            $tagNamesWithVergule = $wiki -> tag_names;
            $tagNameArray = explode(', ',$tagNamesWithVergule);
            $wiki->tag_names = $tagNameArray;
            array_push($wikisCorrect,$wiki);
        }
        $data = [   
            'wikis' => $wikisCorrect,
            'Category_name' => $Category_name
        ];
        $this->view('categorieCnt',$data);

    }
    public function wikiCnt()
    {
        $categories =  $this->categoryModel->getTopCategories();
        $wiki = $this->wikiModel->getTopWiki();
        $data = [   
            'wiki' => $wiki
        ];
        $this->view('wikiCnt',$data);
    }
    public function editWiki()
    {
        $wiki = $this->wikiModel->getWikiById();

        $this->view('editWiki');
    }


}
