
@extends('layouts.admin.main')
@section('content')
<h1>Creating Product</h1>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="description" placeholder="Description" value="{{old('description')}}"
               class="@error('description')is-invalid @enderror"><br>

        <input type="file" name="foto" placeholder="Image" value="{{old('foto')}}"
               class="@error('foto')is-invalid @enderror"><br>
        {{--        <input type="file" name="foto">--}}


        <input type="text" name="category_id" placeholder="Category ID" value="{{old('category_id')}}"
               class="@error('category_id')is-invalid @enderror"><br>
        <input type="text" name="price" placeholder="Price" value="{{old('price')}}"
               class="@error('price')is-invalid @enderror"><br>
        <input type="text" name="status_id" placeholder="Status ID" value="{{old('status_id')}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add">
    </form>
@endsection
