<?php
include(__DIR__ . "/../bootstrap/start.php");
Dotenv::load(__DIR__ . "/../");
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); 
ini_set('display_errors', '1');

$match = $router->match();

list($controller, $method) = explode("@", $match['target']);

if (is_callable(array($controller, $method))){
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));
}else{
   echo "Cannot find $controller -> $method";
   exit();
}

?>