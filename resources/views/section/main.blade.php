@extends('layouts.home')
@section('main')
<div class="wrapper-main"> 
    <section class="main-jumbo"> 
        {{-- <figure>
            <img src="{{asset("img/jumbotron.jpg")}}" alt="">
        </figure> --}}
    </section>
</div>
<div class="main">
    @foreach ($comics as $item) 
        <img src="{{$item["thumb"]}}" alt="">
        
    @endforeach
</div>  
@endsection
