<?php
/*namespace Needlwork;
use Needlwork;*/


echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";

echo $_COOKIE['MY COOKIE NAME'];
echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";

// 1. Загальні налаштування
echo "<pre>";
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo "</pre>";

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
//define('ROOT', '/home/okharabet/PhpProjects/needlWork/');

require_once(ROOT . DS . 'lib' . DS . 'init.php');

//$router = new Router($_SERVER['REQUEST_URI']);

/*echo "<pre>";
print_r('Route: '.$router->getRoute().PHP_EOL);
print_r('Language: '.$router->getLanguage().PHP_EOL);
print_r('Controller: '.$router->getController().PHP_EOL);
print_r('Action to be called: '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
echo "Params: ";
print_r($router->getParams());
echo "</pre>";*/

App::run($_SERVER['REQUEST_URI']);





echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";
