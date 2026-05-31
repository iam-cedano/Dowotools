<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Math extends BaseController
{
    public function index(): string
    {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('math') . 
                view('templates/footer');
    }

    public function addTwoNumbers() {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('tools/math_add_two_numbers') . 
                view('templates/footer');
    }

    public function areaCalculator() {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('templates/footer');
    }

    public function volumeCalculator() {
        return view('templates/header', ['deferredScripts' => $this->getDeferredScriptURIs(), 'stylesheets' => $this->getStylesheetURIs()]) .
                view('templates/sidebar') .
                view('templates/footer');
    }

    protected function getStylesheetURIs() {
        return [
            base_url('assets/css/math.css'),
        ];
    }
}
