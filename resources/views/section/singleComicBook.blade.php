@extends("layouts.home") 

@section("comics")
<div class="base">
    <figure>
        <img src="{{$comicBook ["thumb"]}}" alt="{{$comicBook["title"]}}">
    </figure> 
</div> 
<div class="detail">
    <div class="description">
        <h1>
            {{$comicBook["title"]}}
        </h1>
        <div class="info">
            <div class="price">
                <span> U.S Price: {{$comicBook["price"]}}</span> 
                <span>Avaialbe</span>
            </div>
            <div class="check">
                <p>Check Aviability</p>
            </div>
            
        </div> 
        <div class="text">
            <h3>{{$comicBook["description"]}}</h3>
        </div>
    </div>
         <div class="adv">
             <h4>
                 advertisement
             </h4>
            <figure>
                <img src="{{asset("img/adv.jpg")}}" alt="">
            </figure>
        </div>
</div>
<div class="artist">
    
</div>
{{-- @dump($comic) --}}
@endsection