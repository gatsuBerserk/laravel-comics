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
    $nav = config("nav");
    $comics = config("comics");
    return view('layouts.home', ["comics"=> $comics, "nav"=> $nav]);
})-> name("home"); 

Route::get('comics', function () {
    $nav = config("nav");
    $comics = config("comics");
    return view('section.comics', ["comics"=> $comics, "nav"=> $nav]);
})-> name("comics");
