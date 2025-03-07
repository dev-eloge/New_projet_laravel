<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// template
Route::get('/', function () {
    return view('pages/home');
});

Route::get('/a-propos', function () {
    return view('pages/about');
})->name("about");

Route::get('/blog-details', function () {
    return view('pages/blog-details');
})->name("blog-details");

Route::get('/blog', function () {
    return view('pages/blog');
})->name("blog");

Route::get('/contact', function () {
    return view('pages/contact');
})->name("contact");

Route::get('/faq', function () {
    return view('pages/faq');
})->name("faq");

Route::get('/comment-ca-marche', function () {
    return view('pages/how-it-works');
})->name("how-it-works");

Route::get('/legal', function () {
    return view('pages/legal');
})->name("legal");

Route::get('/privacy-policy', function () {
    return view('pages/privacy-policy');
})->name("privacy-policy");

Route::get('/service-details', function () {
    return view('pages/service-details');
})->name("service-details");

Route::get('/services', function () {
    return view('pages/services');
})->name("services");


Route::get('/terms', function () {
    return view('pages/terms');
})->name("terms");







