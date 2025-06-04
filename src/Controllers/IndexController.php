<?php

namespace Epitas\App\Controllers;

class IndexController {
    public static function index($database) {
        return render_view('pages/home/home');
    }
}