<?php

namespace App\Controllers;

class Office extends BaseController
{
    public function index(): string
    {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('office') .
                view('templates/footer');
    }
}