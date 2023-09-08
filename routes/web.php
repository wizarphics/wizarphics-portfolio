<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return redirect(route('home'));
});

Route::prefix(Request::getLocale())->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');
    Route::get('/case-studies', function () {
        return view('cases');
    })->name('cases');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});

// Route::get('/', function () {})->domain('blog');
