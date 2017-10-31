<?php
/*namespace Needlwork;
use Needlwork;*/
// 1. Загальні налаштування
echo "<pre>";
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo "</pre>";

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT . DS . 'lib' . DS . 'init.php');
require_once(ROOT . DS . 'views' . DS . 'default.phtml'); // тимчасове підключення

App::run($_SERVER['REQUEST_URI']);



/* проміжкова перевірка
echo "<pre>";
print_r('Route: '.$router->getRoute().PHP_EOL);
print_r('Language: '.$router->getLanguage().PHP_EOL);
print_r('Controller: '.$router->getController().PHP_EOL);
print_r('Action to be called: '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
echo "Params: ";
print_r($router->getParams());
echo "</pre>";*/



