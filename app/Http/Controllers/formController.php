<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    //
    public function uploadForm(){
        return view('form.upload');
        
    }

    public function submitForm(Request $request){
        // $request->validate([
        //     'Name' => 'required',
        //     'Surname' => 'required',
        //     'Email' => 'required',
        //     'Photo' => 'required|mimes: jpg, png, jpeg, gif|max:5048'
        // ]);

        $newImageName = time() . "-" . $request -> Name . "." . $request -> Photo -> extension();

        $request -> Photo -> move(public_path('uploads'), $newImageName);
            
        form::create([
            'Name' => $request -> Name,
            'Surname' => $request -> Surname,
            'Email' => $request -> Email,
            'Photo' => $newImageName
        ]);

        return redirect('/upload');
    }

    function showUsers(){
        $users = form::all();

        return view('form.show_users', compact('users'));
    }
}
