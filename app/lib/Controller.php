<?php

namespace App\Lib;

class Controller
{
    protected function render($viewPath, $data = []) {
        extract($data);
        include __DIR__ . "/../views/{$viewPath}.php";
    }
}