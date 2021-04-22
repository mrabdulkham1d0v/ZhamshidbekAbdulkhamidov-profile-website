<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public function view() {
        return view('contact');
    }
    public function send(){
        $data = request()->validate([
            'Name' => 'required',
            'Surname' => 'required',
            'Email' => 'required',
            'File' => 'required|file',
            'Message' => 'required'
        ]);
        // dd(request()->all());
        Mail::to('190103308@stu.sdu.edu.kz') -> send(new DemoEmail($data));

        return redirect('en/contact');
        
    }
}
