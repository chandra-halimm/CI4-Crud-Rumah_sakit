<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // echo "halo";
        return view('welcome_message');
    }
}
