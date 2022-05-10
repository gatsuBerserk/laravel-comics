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
<div class="writers">
    <div class="wrapper-writers">
        <div class="talent">
            <h1>
                Talent
            </h1>
            <div class="artist">
                <h3>
                    Artist by:
                </h3>
                <p>
                    <a href="#">
                        @foreach ($comicBook['artists'] as $items)
                            {{ $items }},
                        @endforeach
                    </a>
                </p>
            </div>
            <div class="artist">
                <h3>
                    Written bys:
                </h3>
                <p>
                    <a href="#">
                        @foreach ($comicBook['writers'] as $items)
                            {{ $items }},
                        @endforeach
                    </a>
                </p>
            </div>
        </div>
        <div class="specs">
            <h1>
                Specs
            </h1> 
             <div class="single-spec">
                    <h3>
                        Series:
                    </h3>
                    <p>
                        <a href="#">
                            {{$comicBook["series"]}}
                        </a>
                    </p>
             </div>
             <div class="single-spec">
                <h3>
                    U.S. Price:
                </h3>
                <p>
                    <a href="#">
                        {{$comicBook["price"]}}
                    </a>
                </p>
         </div>
         <div class="single-spec">
            <h3>
                On Sale Date:
            </h3>
            <p>
                <a href="#">
                    {{$comicBook["sale_date"]}}
                </a>
            </p>
     </div>

        </div>
    </div>
</div>
{{-- @dump($comic) --}}
@endsection