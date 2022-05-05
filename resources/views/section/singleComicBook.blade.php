@extends("layouts.home") 

@section("comics")
<div class="base">
    <figure>
        <img src="{{$comicBook ["thumb"]}}" alt="{{$comicBook["title"]}}">
    </figure> 
</div>
{{-- @dump($comic) --}}
@endsection