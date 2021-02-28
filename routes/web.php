<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;



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