<?php

require_once (ROOT.DS.'lib'.DS.'router.class.php');

class View {
    protected $data;
    protected $path;

    protected static function getDefaultViewPath()
    {
        $router = App::getRouter();
        if (!$router){
            return false;
        }
        $controller_dir = $router->getController();
        $template_name = $router->getMethodPrefix().$router->getAction.'.phtml'; // rename from '.html'

        return VIEWS_PATH.DS.$controller_dir.DS.$template_name;

    }

    public function __construct($data = array(), $path = null)
    {
        if (! $path) {
            $path = self::getDefaultViewPath();
        }
        if (!file_exists($path)) {
            throw new Exception("ATTENTION!!! Template file is not found in path: {$path}!!!");
        }
        $this->path = $path;
        $this->data = $data;

    }

    public function render()
    {
        $data = $this->data;


        ob_start();
        include($data->path);
        $content = ob_get_clean();

        return $content;
    }


}