<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function execute() //just returns the view to be displayed
    {
        return view('aboutus');
    }
}
