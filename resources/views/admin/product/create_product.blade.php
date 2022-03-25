@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div  class="d-flex mt-4">
            <h2 class="text-black-50 mt-2">Create Products</h2>
        </div>
        <form action="{{route('product.store')}}" method="POST">
            @csrf
        <div class="form-group mt-4">
            <label for="exampleInputPassword1">Select Category</label>
            <select name="category" required="" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled="" selected="selected" data-select2-id="3">Select Category </option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" required="" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Past Paper Title">
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
        </form>

    </div>

@endsection

