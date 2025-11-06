<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/welcome');
});

Route::get('/', function () {
    return view('includes/top');
});

Route::get('/', function () {
    return view('includes/footer');
});

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/portfolio', function () {
    return view('pages/portfolio');
});

Route::get('/model', function () {
    return view('pages/model');
});

Route::get('/team', function () {
    return view('pages/team');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});


