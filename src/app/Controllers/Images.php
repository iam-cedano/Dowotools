<?php

namespace App\Controllers;

class Images extends BaseController
{
    public function index(): string
    {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('images') .
                view('templates/footer');
    }
}