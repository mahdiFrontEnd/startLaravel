<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/blog', function () {
    return view('blog');
});


Route::get('/blogList', function () {
    return view('blogList');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/getTurn', function () {
    return view('getTurn');
});


Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/service', function () {
    return view('service');
});


Route::get('/services', function () {
    return view('services');
});
