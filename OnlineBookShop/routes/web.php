<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('{test}', function ($test) {
    return view('admin.' . $test);
});

Auth::routes();
