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
                <p>{{$item["title"]}} {{ $item["series"]}}</p>
            </div>
            @endforeach 
       </div>
             
            
    </div>
</div>

    
</div>  
@endsection
