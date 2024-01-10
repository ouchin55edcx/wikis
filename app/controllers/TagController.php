<?php
class TagController extends Controller
{
    private $tagModel;
    function __construct() {
        $this->tagModel = $this->model('tag');
    }

    public function AddTag() {
        $this->view('addTag');
    }
    public function InsertTag() {
        $tagName=$_POST['tag_name'];
        $this->tagModel->insert($tagName);
        redirect('Pages/tag');
    }

    public function EditTag($id) {
        $tag = $this->tagModel->getTagById($id);
        $data = [
            'tag'=>$tag
        ];
        $this->view('EditTag',$data);
    }
    public function UpdateTag($id) {
        $tagName=$_POST['tagName'];
        $this->tagModel->update($id,$tagName);
        redirect('Pages/tag');
    }
    public function DeleteTag($id) {
        $this->tagModel->Delete($id);
        redirect('Pages/tag');
    }


}