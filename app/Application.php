<?php

namespace App;

use Classes\Views;

class Application
{

    private $controller;

    private function setApp()
    {

        $loadName = 'App\Http\Controllers\\';
        @$url = explode('/', @$_GET['url']);

        if ($url[0] == '') {
            $loadName.= 'Home';
        } else {
            $loadName.= ucfirst(strtolower($url[0]));
        }

        $loadName.= 'Controller';

        if (file_exists($loadName . '.php')) {
            $this->controller = new $loadName();
        } else {
            Views::render('404');
            die();
        }
    }

    public function run()
    {
        $this->setApp();
        $this->controller->index();
    }
}
