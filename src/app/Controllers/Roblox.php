<?php

namespace App\Controllers;

class Roblox extends BaseController
{
    public function index(): string
    {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('roblox') .
                view('templates/footer');
    }
}