<?php
class CategoryController extends Controller
{
    private $categoryModel;
    function __construct() {
        $this->categoryModel = $this->model('category');
    }
    public function EditCategory($id) {
        $category = $this->categoryModel->getCategoryById($id);
        $data = [
            'category'=>$category
        ];
        $this->view('EditCategory',$data);
    }
    public function UpdateCategory($id) {
        $catName=$_POST['catName'];
        $this->categoryModel->update($id,$catName);
        redirect('Pages/Dashboard');
    }
    public function DeleteCategory($id) {
        $this->categoryModel->Delete($id);
        redirect('Pages/Dashboard');
    }
    public function AddCategory() {
        $this->view('AddCategory');
    }
    public function InsertCategory() {
        $catName=$_POST['catName'];
        $this->categoryModel->insert($catName);
        redirect('Pages/Dashboard');
    }
}