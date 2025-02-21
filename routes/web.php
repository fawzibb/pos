<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');  // حماية الصفحة باستخدام middleware

Route::post('/logout', function () {
    Auth::logout();  // تسجيل الخروج
    return redirect()->route('login');
})->name('logout');

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');

