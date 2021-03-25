<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class ApiController extends Controller
{
    /*
        index function will return all posts from database
    */
    
    public function index(Request $request) {
        $posts = Post::all();

        return response($posts, 200);
    }
}
