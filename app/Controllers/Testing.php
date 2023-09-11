<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testing extends BaseController
{
    public function index()
    {
        //
        return view('login');
    }

    public function reg()
    {
        //
        return view('registration');
    }
}
