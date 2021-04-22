<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesInfo;
use App\Models\ServicesPhoto;

class ServicesController extends Controller
{
    //
    public function index(){
        $serviceInfo = ServicesInfo::all();
        $servicePhoto = ServicesPhoto::all();
        // dd($serviceInfo->servicePhoto());
        return view('services',compact('serviceInfo','servicePhoto'));
    }
}
