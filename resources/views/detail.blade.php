@extends('master')
@section("content")


<!-- $table->id();
            $table->string("ShoeName");
            $table->string("Price");
            $table->string("ShoeGender");
            $table->string("Description");
            $table->string("Gallery");
            $table->timestamps(); -->
<img src="{{$shoe}}" alt="">
<h1>Shoe Name: {{$shoe['ShoeName']}}</h1>
<h2>Price: {{$shoe['Price']}} </h2>
<h3>Shoe: {{$shoe['ShoeGender']}} Gender</h3>
<h4>Description: {{$shoe['Description']}}</h4>

<br>

<form action="/addCart" method="POST">
    @csrf
    <input type="hidden" name="shoe_id" value="{{$shoe['id']}}">
<button>Add To Cart</button>
</form>

<br>
<button>Buy Now</button>

@endsection