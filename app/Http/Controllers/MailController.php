<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public function send(){
        $objectDemo = new \stdClass();
        $objectDemo -> receiver = 'Me';
        $objectDemo -> sender = 'Also Me';
        Mail::to('190103308@stu.sdu.edu.kz') -> send(new DemoEmail($objectDemo));
        
    }
}
