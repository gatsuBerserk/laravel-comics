@extends('layouts.home')
@section('comics') 
<div class="wrapper-comics">
        <div class="flag">
            <p>current series</p>
        </div>
       <div class="comics-wrapper">
           @foreach ($comics as $index => $item ) 
            <div class="cards">  
                <img src="{{$item["thumb"]}}" alt=""> 
                {{-- <a href="{{url("comics/$index")}}"><p>{{$item["title"]}} {{ $item["series"]}}</p></a> --}}
                
                {{-- Soluzione migliore, gli diamo come come campo index dato alla route l' $index dell'array --}}
                <a href="{{route("comic-book", ['index' => $index])}}"><p>{{$item["title"]}} {{ $item["series"]}}</p></a>
            </div>
            @endforeach 
       </div>
</div>


@endsection 
