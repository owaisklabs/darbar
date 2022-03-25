@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="justify-content: space-between;align-items: center;" class="d-flex ">
            <h2 class="text-black-50 mt-2">Products</h2>

            <a class="btn btn-app bg-primary mt-4" href="{{route('product.create')}}">
                <i class="fas fa-plus"></i> Add Product
            </a>
        </div>
        <table class="table table-striped" id="myTable">
            <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="text-center">
                    <th scope="row"> {{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td class="text-bold">{{$product->category->name}}</td>
                    <td>

                        <!-- actions -->
                        <!-- View Profile -->

                        <!-- Edit -->
                        <a href="{{route('product.show',$product->id)}}" class="editButton">
                            <i class="fas fa-edit blue ml-1"></i>
                        </a>
                        <!-- Delete -->


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

