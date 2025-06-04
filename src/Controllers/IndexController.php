<?php

namespace Epitas\App\Controllers;

class IndexController {
    public static function index($database) {
        return view('pages/home/home');
    }
}