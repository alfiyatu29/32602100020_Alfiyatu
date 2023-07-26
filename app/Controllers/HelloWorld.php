<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index()
    {
        return view('halloworld');
    }
    public function halodunia()
    {
        return "<h1>Hello World</h1>";
    }
}