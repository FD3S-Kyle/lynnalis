<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_us;

class HomepageController extends Controller
{
    public function execute() //just returns the view to be displayed
    {
        return view('homepage');
    }

    public function submitInquiry(Request $request)
    {
        $contactQuery = contact_us::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'query' => $request->input('inquiry'),
        ]);
        return redirect(url('index'));
    }
}
