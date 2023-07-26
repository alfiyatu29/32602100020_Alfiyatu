<?php

namespace App\Controllers;

class SampleController extends BaseController
{
    public function index()
    {
        return view('sample_view');
    }
}