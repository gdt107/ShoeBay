@extends('master')
@section("content")
<h1>Shopping Cart</h1>
@foreach($shoes as $item)
<img src="{{$item->gallery}}" alt="">
<div>{{$item->ShoeName}}</div>
<div>{{$item->Description}}</div>
<a href="/removecart/{}">Remove From Cart</a>
@endforeach


@endsection