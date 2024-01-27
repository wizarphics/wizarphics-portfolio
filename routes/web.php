<?php

use App\Models\CaseStudy;
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

Route::get('/', function () {
    return redirect(route('home'));
});

Route::prefix(Request::getLocale())->group(function () {
    Route::get('/', function () {
        $cases = CaseStudy::query()
            ->where('is_active', '=', true)
            ->latest()->limit(3)->get();
        return view('index', compact('cases'));
    })->name('home');
    Route::get('/case-studies', function () {
        $cases = CaseStudy::query()
            ->where('is_active', '=', true)
            ->latest()
            ->simplePaginate(10);
        return view('cases', compact('cases'));
    })->name('cases');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});

// Route::get('/', function () {})->domain('blog');
