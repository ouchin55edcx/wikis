<?php
session_start();
$_SESSION['userId'] = 1;
// session_destroy();                   
include_once 'configs/config.php';
include_once 'helpers/redirect.php';


spl_autoload_register(function ($inc){
    include_once 'libraries/'.$inc.'.php';
});