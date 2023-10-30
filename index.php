<?php
$url = $_SERVER['REQUEST_URI'];
$controller_name = 'Home';
$action_name = 'index';

//echo "<pre>";
//var_dump($url);

// /relativepath/User/index --> User = controller, index = method

$parts=explode("/",$url);
//var_dump($parts);

if(count($parts)>2 && $parts[2]!="") $controller_name=$parts[2];
if(count($parts)>3) $action_name=$parts[3];


$controller_file = 'controllers/' . $controller_name . 'Controller.php';
$controller_class = $controller_name . 'Controller';
$view_file='views/' . $controller_name . '/' . $action_name . '.php';
/*
var_dump($controller_file);
var_dump($controller_class);
var_dump($action_name);
*/

if (file_exists($controller_file)) {
    include($controller_file);

    $viewmodel=(new $controller_class)->$action_name(); 
    include "views/header.php";
    include($view_file); 
    include "views/footer.php";
    
} else {
    // handle 404 error
    echo "file not found";
}
