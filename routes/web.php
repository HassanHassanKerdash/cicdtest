<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cidcd', function () {
    return "Hi CI/CD Test 3";
});