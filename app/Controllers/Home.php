<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $data = [
            'title' => 'Home',
            'page' =>'home',
        ];

        return view('home', $data);
    }
}

