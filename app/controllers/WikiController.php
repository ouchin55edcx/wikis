<?php


class WikiController extends Controller
{

    private $wikiModel;
    private $tagWikiModel;
    private $tagModel;
    private $categoryModel;
    function __construct()
    {
        $this->wikiModel = $this->model('wiki');
        $this->tagWikiModel = $this->model('WikiTag');
        $this->tagModel = $this->model('Tag');
        $this->categoryModel = $this->model('category');
    }


    public function InsertWiki()
    {
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $select_category = htmlspecialchars($_POST['select-category']);
        $tagArray = $_POST['tag'];

        $uploadedImage = $_FILES['wikiImg'];
        if (!is_dir(FOLDER_IMAGE)) {
            mkdir(FOLDER_IMAGE, 0755, true);
        }

        if (isset($uploadedImage['name']) && isset($uploadedImage['tmp_name'])) {
            $imagePath = FOLDER_IMAGE . $uploadedImage['name'];

            if (move_uploaded_file($uploadedImage['tmp_name'], $imagePath)) {
                $this->wikiModel->insertWiki($title, $content, $uploadedImage['name'], $select_category, $_SESSION['userId']);
                $lastWikiInsert = $this->wikiModel->getLastWiki();
                $idLastWiki = $lastWikiInsert->wiki_id;
                foreach ($tagArray as $IdTag) {
                    $this->tagWikiModel->insert($idLastWiki, $IdTag);
                    redirect('Pages/wiki');
                }
            } else {
                echo "Failed to move the uploaded file.";
            }
        } else {
            echo "Invalid file upload data.";
        }
    }

    public function editWiki($id)
    {
        $wiki = $this->wikiModel->getWikiById($id);
        $categories =  $this->categoryModel->getCategories();
        $tags = $this->tagModel->getAllTag();
        $tagIdsSelected = $this->tagWikiModel->getAllIdTagByIdWiki($id);
        $tagsCorrect=[];
        $selectedTagIds = array_map(function ($tagIdObject) {
            return $tagIdObject->tag_id;
        }, $tagIdsSelected);
    
        foreach ($tags as &$tag) {
            if(in_array($tag->tag_id, $selectedTagIds)){
                $tag->selected = 'select';
            } else{
                $tag->selected = 'not Select';
            }
            array_push($tagsCorrect,$tag);
        }
        $data=[
            'wikiInfo' => $wiki,
            'cats' => $categories,
            'tags' => $tagsCorrect
        ];
        $this->view('editWiki',$data);
    }
    public function UpdateWiki() {
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $select_category = htmlspecialchars($_POST['select-category']);
        $tagArray = $_POST['tag'];
        $idWiki = $_POST['idWiki'];

        $uploadedImage = $_FILES['wikiImg'];
        if ($uploadedImage['name'] != '') {
            if (!is_dir(FOLDER_IMAGE)) {
                mkdir(FOLDER_IMAGE, 0755, true);
            }
    
            if (isset($uploadedImage['name']) && isset($uploadedImage['tmp_name'])) {
                $imagePath = FOLDER_IMAGE . $uploadedImage['name'];
    
                if (move_uploaded_file($uploadedImage['tmp_name'], $imagePath)) {
                    $this->wikiModel->updateWikiImage($uploadedImage['name'],$idWiki);
                } else {
                    echo "Failed to move the uploaded file.";
                }
            } else {
                echo "Invalid file upload data.";
            }
        }
        $this->wikiModel->updateWikiSansImage($title,$content,$select_category,$idWiki) ;
        redirect('¨Pages/wiki');

    }

}
