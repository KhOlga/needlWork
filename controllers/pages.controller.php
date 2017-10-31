<?php

/*namespace Needlwork;
use Needlwork;*/

class PagesController extends Controller {

    public function index()
    {
        echo 'Here will be pages list. ';
    }

    public function view() {
        $params = App::getRouter()->getParams();

        if (isset($params[0]) ){
            $alias = strtolower($params[0]);

            echo "Here will be a page with '{$alias}' alias";
        }
    }
}