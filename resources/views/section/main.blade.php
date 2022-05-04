@extends('layouts.home')
@section('main')
<div class="main">
    @foreach ($comics as $item) 
        <img src="{{$item["thumb"]}}" alt="">
        
    @endforeach
</div>    
@endsection
