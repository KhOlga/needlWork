<?php

/*namespace Needlwork;
use Needlwork;*/
//require_once (ROOT.DS.'lib'.DS.'controller.class.php');

class App
{
    protected static $router;

    public static function getRouter()
    {
        return self::$router;
    }

    /**
     * @param $uri
     * @throws Exception
     */
    public static function run($uri)
    {
        self::$router = new Router($uri); // визначити namespace?

        $controller_class = ucfirst(self::$router->getController()) . 'Controller';
        $controller_method = strtolower(self::$router->getMethodPrefix() . self::$router->getAction());

        // Calling controller's method
        $controller_object = new $controller_class();
        if (method_exists($controller_object, $controller_method)) {
            // Controller's action may return a view path
            $view_path = $controller_object->$controller_method();
            $view_object = new View($controller_object->getData(), $view_path);
            $content = $view_object->render();
        } else {
            echo "<pre>";
            throw new Exception("ATTENTION!!! Method {$controller_method} of class {$controller_class} does not exist!!! ");
            echo "</pre>";
        }

        $layout = self::$router->getRoute();
        $layout_path = VIEWS_PATH.DS.$layout.'.phtml'; // rename from '.html'
        $layout_view_object = new View(compact('content'), $layout_path);
        echo $layout_view_object->render();

    }

}


