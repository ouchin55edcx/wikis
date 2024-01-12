<?php
session_start();
// $_SESSION["user"] = $user;
// $_SESSION["user"]->username =$userId;   
// session_destroy();                   
include_once 'configs/config.php';
include_once 'helpers/redirect.php';


spl_autoload_register(function ($inc){
    include_once 'libraries/'.$inc.'.php';
});