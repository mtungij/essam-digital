<?php

namespace App\Controllers;
use CodeIgniter\View\View;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }
}
