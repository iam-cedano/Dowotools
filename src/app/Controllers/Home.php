<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return  view('templates/header', ['defferedScripts' => $this->getDefferedScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('home') . 
                view('templates/footer');
    }

    public function getDefferedScriptURIs(): array
    {

        $scripts = [];

        $router = service('router');

        $methodName = $router->methodName();

        if ($methodName === 'index') {
            $scripts[] = base_url('assets/js/home.js');
        }

        return $scripts;
    }

    public function getStylesheetURIs(): array
    {
        $stylesheets = [];

        $router = service('router');

        $methodName = $router->methodName();

        if ($methodName === 'index') {
            $stylesheets[] = base_url('assets/css/home.css');
        }

        return $stylesheets;
    }

    public function getAsyncScriptURIs(): array
    {
        return [];
    }
}
