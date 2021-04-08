<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\form;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\formController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function() {
    return view('services');
})->name('services');

Route::get('/work', function() {
    return view('work');
})->name('work');

Route::get('/testimonials', function() {
    return view('testimonials');
})-> name('testimonials');

Route::get('/contact', function() {
    return view('contact');
})-> name('contact');

Route::get('/post/create', function() {
    DB::table('posts')->insert([
        'title' => 'Practicum Experience',
        'body' => 'To be honest, I would say that I was searching for any courses about data science'
        ]
    );
});

Route::get('/post', function(){
    $post = Post::find(1);
    return $post->body;
});

Route::get('/blog/index',[BlogController::class,'index']);
Route::get('/blog/create', function(){
    return view('blog.create');
});

Route::post('/blog/create',[BlogController::class,'store'])->name('add-post');

Route::get('/post/{id}', [BlogController::class,'get_post']);

Route::post('/upload', [formController::class, 'submitForm']);
Route::get('/upload', [formController::class, 'uploadForm']);
Route::get('/show/users', [formController::class, 'showUsers']);

Route::get('/send',[MailController::class,'send']);