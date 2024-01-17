<?php
class Pages extends Controller 
{
    private $categoryModel;
    private $wikiModel;
    private $tagModel;
    private $userModel;

    function __construct() {
        $this->categoryModel = $this->model('category');
        $this->wikiModel = $this->model('wiki');
        $this->tagModel = $this->model('tag');
        $this->userModel = $this->model('User');
    }
    public function home()
    {
        $wikisCorrect = [];
        $wikis = $this->wikiModel->getTopWiki();
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
        $this->view('notfound');
    }
    public function sign()
    {
        $this->view('sign');
    }
    public function search()
    {
        // Check if it's an AJAX request
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['searchTerm'])) {
            $searchTerm = $_POST['searchTerm'];

            $searchResults = $this->searchWikiTagCategory($searchTerm);

            echo json_encode($searchResults);
            exit;
        }

    }
    public function searchWikiTagCategory($searchTerm)
    {
        $searchResults = [];
    
        // Search by Wiki
        $wikiResults = $this->wikiModel->searchWiki($searchTerm);
        $searchResults['wikis'] = $wikiResults; 
        return $searchResults;
 
    }

    public function login()
    {
        $this->view('login');
    }
    public function tagP()
    {
        $this->view('tagP');
    }
    public function ArchWiki()
    {
        $wikisCorrect = [];
        $wikis = $this->wikiModel->getWikiForAdmin();
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
        $this->view('ArchWiki',$data);

    }
    public function AwikiCnt($id)
    {
        $wiki = $this->wikiModel->getWikiById($id);
        $data = [   
            'wiki' => $wiki
        ];
        $this->view('AwikiCnt',$data);
    }

    public function dashboard() {

        $categories =  $this->categoryModel->getCategories();
        $strCat=$this->categoryModel->categoryCount();
        $strWiki = $this->wikiModel->wikiCount();
        $data = [   
            'categories' => $categories,
            'strCat' => $strCat,
            'strWiki' => $strWiki,

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
    public function wikiCnt($id)
    {
        $wiki = $this->wikiModel->getWikiById($id);
        $data = [   
            'wiki' => $wiki
        ];
        $this->view('wikiCnt',$data);
    }

}
    