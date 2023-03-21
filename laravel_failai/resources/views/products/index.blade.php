@extends('layouts.admin.main')

@section('title', 'Products')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Products</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
            <table class="table produktai">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td><img src="{{$product->image}}" alt="{{$product->image}}" style="display: inline-block; width: 100px; height: 100px;"></td>
                        <td>{{$product->price}}</td>

                        <td>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <form action="{{route('product.add_to_cart')}}" method="POST">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="number" name="quantity" value="1" min="1" max="5">
                                <input type="submit" value="Add to cart" class="cart">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
