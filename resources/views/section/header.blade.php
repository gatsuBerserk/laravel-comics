

<div class="header">
    <img src="{{asset("img/dc-logo.png")}}" alt=" Logo DS Comics"> 
        <nav>
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
        </nav>

</div>