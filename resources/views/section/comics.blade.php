@extends('layouts.home')
@section('comics') 
<div class="wrapper-comics">
        <div class="flag">
            <p>current series</p>
        </div>
       <div class="comics-wrapper">
           @foreach ($comics as $item) 
            <div class="cards">  
                <img src="{{$item["thumb"]}}" alt=""> 
                <a href=""><p>{{$item["title"]}} {{ $item["series"]}}</p></a>
            </div>
            @endforeach 
       </div>
</div>


@endsection 
