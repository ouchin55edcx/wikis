<?php 

session_start();

spl_autoload_register('autoload');

function autoload($class_name){
    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'includes',
        'controllers/'
    );

    $name = str_replace('\\', '/', $class_name); // Replace namespace separator with directory separator

    foreach($array_paths as $path){
        $file = sprintf('%s%s.php', $path, $name);

        if (file_exists($file)) {
            include_once $file;
        }
    }
}









?>