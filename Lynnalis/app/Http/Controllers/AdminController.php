<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function execute() //just returns the view to be displayed
    {
        return view('signin');
    }
}
