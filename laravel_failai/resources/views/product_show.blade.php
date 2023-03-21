@extends('layouts.admin.main')
@section('content')
    Name: {{ $product->name }}<br>
    <div class="card-content" style="max-width: 500px; overflow-x: auto;">

    </div>
    Author: {{ $product->author }}<br>
    Pages: {{ $product->pages }}<br>
    Price: {{ $product->price }}<br>
    <td>  <img src="{{$product->image}}" alt="" class="foto"></td>
    <p>Description: {{ $product->description }}</p>
    <br>






                <form action="{{route('product.add_to_cart')}}" method="POST">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type=number name="quantity" value="1">
                    <input type="submit" value="Add to cart" class="cart">
                    @csrf
                </form>

@endsection
