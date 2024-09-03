<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia::render('UserLogin');
});

Route::get('/signup', function () {
    return inertia('Signup');
});

Route::get('/admin-login', function () {
    return inertia('AdminLogin');
});