<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'title' => 'HALLO..',
            'body' => $request->message,  
            'footer' => 'Dari : '.$request->name.' ('.$request->email.')',
        ];
        // Mail::to("briotestlab@gmail.com")->send(new TestMail($details));
        Mail::to("lord.ezza@gmail.com")->send(new TestMail($details));
        
        return redirect('/contact');
    }
}
