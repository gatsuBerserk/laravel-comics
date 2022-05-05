

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
                <li><a href="#">characters</a> </li>
                <li class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}" >
                    <a 
                         href="{{route("comics")}}"> 
                        comics
                    </a>
                </li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#"news></a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </nav>
       
</div> 
<section class="jumbotron">
    <figure></figure> 
</section>