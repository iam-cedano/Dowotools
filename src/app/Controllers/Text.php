<?php

namespace App\Controllers;

class Text extends BaseController
{
    public function index(): string
    {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('text') .
                view('templates/footer');
    }
}