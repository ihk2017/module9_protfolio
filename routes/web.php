<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master');
});


Route::get('/home', function () {
   return view('pages.home');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/project', function () {
    return view('pages.project');
});


Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/skills', function () {
    return view('pages.skills');
});
