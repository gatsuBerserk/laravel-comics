

<div class="header">
    <img src="{{asset("img/dc-logo.png")}}" alt=" Logo DS Comics"> 
        {{-- <nav>
            @foreach($nav as $item) 
                @if ($loop->first)
                    <ul>
                @endif
                <li>
                    <a href="#">{{$item["text"]}}</a> 
                </li>
                @if ($loop->last)
                    </ul>
                @endif 
            @endforeach
        </nav>  --}}
        <nav>
            <ul>
                <li><a href="{{route("characters")}}">characters</a> </li>
                <li class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}" >
                    <a 
                         href="{{route("comics")}}"> 
                        comics
                    </a>
                </li>
                <li>
                    <a href="{{route("movies")}}">
                        movies
                    </a>
                </li>
                <li><a href="{{route("tv")}}">tv</a></li>
                <li><a href="{{route("games")}}">games</a></li>
                <li><a href="{{route("collectibles")}}">collectibles</a></li>
                <li><a href="{{route("videos")}}">videos</a></li>
                <li><a href="{{route("fans")}}">fans</a></li>
                <li><a href="{{route("news")}}">news</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </nav>
       
</div> 
<section class="jumbotron">
    <figure></figure> 
</section>