<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "title" => 'Hello World!',
        "framework" => 'Laravel'
    ];

    return view('homepage', $data);
})->name("homepage");

Route::get("/laravel", function () {
    return view("laravel");
})->name("laravel");

Route::get("/php", function () {
    return view("php");
})->name("php");
