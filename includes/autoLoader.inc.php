<?php
//
//The standard php library.
spl_autoload_register(myAutoLoader);
//
//Get a class path the moment it is instantiated.
function myAutoLoader($className) {
    //
    //Get the url string of a web application.
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //
    //Determine if the index file is in the includes folder or not then
    //act accordingly.
    if (strpos($url, 'includes') !== false) {
        //
        $path = '../classes/';
    } else {
        //
        $path = 'classes/';
    }
    //
    //Files' extensions.
    $extension = '.class.php';
    //
    //The full path to incorporate.
    require_once $path . $className . $extension;
}
?>