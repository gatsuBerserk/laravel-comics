<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dc comisc Carmine Passante classe 55</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset("css/app.css")}}">

    </head>
    <body> 
        @include('section.header')
        @yield("characters")
        @yield('comics')
        @yield("movies")
        @yield("tv") 
        @yield("games")
        @yield("collectibles")
        @yield("videos")
        @yield("fans")
        @yield("news")
        
        @include("section.footer")
    </body>
</html>