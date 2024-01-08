<?php 
require_once './autoload.php';
require_once ('./controllers/indexController.php');

$home = new IndexController();

$pages = ['home','profile','dashboard','addWiki','addCat','editCat',];

if(isset($_GET['page'])){
    if(in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
        $home->index($page);
        

    } else {
        include 'views/includes/404.php';
    }
} else {
    require_once './views/includes/header.php';

    $home->index('home');
require_once './views/includes/footer.php'; 

}
?>

