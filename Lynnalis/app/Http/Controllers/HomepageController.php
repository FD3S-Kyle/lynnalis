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
        $inquiry = $request->input('inquiry');
        $customerName = $request->input('name');
        $emailFrom = $request->input('email');
        
        //setting up email
        $forwardTo = 'kdmm_14@hotmail.com';
        $subject = 'New Inquiry From Contact Form';
        $headers = array(
            'From' => $emailFrom,
            'Reply-To' => $emailFrom,
            'Content-type' => 'text/html; charset=iso-8859-1'
        );
        $bodyParagraph = array("Name: {$customerName}", "Inquiry:", $inquiry);
        $body = join(PHP_EOL, $bodyParagraph);

        //forwarding email
        mail($forwardTo, $subject, $body, $headers);
        

        return redirect(url('aboutus'));
    }
}
