<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index'); //my home page
    }
    public function contact(): string
    {
        return view('contact');
    }
    public function about(): string
    {
        return view('about');
    }
}
