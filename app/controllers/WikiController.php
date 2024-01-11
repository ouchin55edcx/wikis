<?php


class WikiController extends Controller
{

    private $wikiModel;
    private $tagWikiModel;
    function __construct()
    {
        $this->wikiModel = $this->model('wiki');
        $this->tagWikiModel = $this->model('WikiTag');
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
            $imagePath = FOLDER_IMAGE . uniqid() . '_' . $uploadedImage['name'];
    
            if (move_uploaded_file($uploadedImage['tmp_name'], $imagePath)) {
                $this->wikiModel->insertWiki($title, $content, $uploadedImage['name'], $select_category,$_SESSION['userId']);
                $lastWikiInsert = $this->wikiModel->getLastWiki();
                $idLastWiki = $lastWikiInsert->wiki_id;
                foreach ($tagArray as $IdTag){
                    $this->tagWikiModel->insert($idLastWiki,$IdTag);
                    redirect('Pages/wiki');
                }
            } else {
                echo "Failed to move the uploaded file.";
            }
        } else {
            echo "Invalid file upload data.";
        }
    }

    // public function getWikiById($id)  {

        
    // }
    
}