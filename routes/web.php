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

Route::get('/characters', function () {
    return view('section.characters');
})-> name("characters");

Route::get('/', function () {
    
    $comics = config("comics");
    return view('layouts.home', ["comics"=> $comics]);
})-> name("home"); 

Route::get('/comics', function () {
    $comics = config("comics");
    return view('section.comics', ["comics"=> $comics]);
})-> name("comics"); 

Route::get('/comics/{index}', function ($index) {
    // $nav = config("nav");
    $comics = config("comics");
    if(is_numeric($index) && $index >= 0 && $index < count($comics) ){
        return view('section.singleComicBook', ["comicBook" => $comics[$index]]);
    }else{
        abort(404);
    }
})-> name("comic-book");

Route::get('/movies', function () {
    return view('section.movies');
})-> name("movies");

Route::get('/tv', function () {
    return view('section.tv');
})-> name("tv");

Route::get('/games', function () {
    return view('section.games');
})-> name("games");

Route::get('/collectibles', function () {
    return view('section.collectibles');
})-> name("collectibles"); 

Route::get('/videos', function () {
    return view('section.videos');
})-> name("videos"); 

Route::get('/fans', function () {
    return view('section.fans');
})-> name("fans");  

Route::get('/news', function () {
    return view('section.news');
})-> name("news"); 