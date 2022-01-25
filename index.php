<?php

// Turn on error reporting
ini_set('display errors', 1);
error_reporting(E_ALL);

// require autoload file
require ("vendor/autoload.php");

// create instance of base file
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function (){
//    echo "<h1>Hello, world.</h1>";
    $view = new Template();
    echo $view->render('views/home.html');
});


// run fat free
$f3->run();