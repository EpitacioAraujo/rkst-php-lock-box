<?php

namespace Epitas\App\Controllers;

class DashboardController
{
    public static function index()
    {
        if(!auth())
        {
            redirect('/signin');
        }

        return view('pages/dashboard/dashboard');
    }
}