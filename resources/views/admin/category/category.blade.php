@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="justify-content: space-between;align-items: center;" class="d-flex ">
            <h2 class="text-black-50 mt-2">Categories</h2>

{{--            <a class="btn btn-app bg-primary mt-4" href="#">--}}
{{--                <i class="fas fa-plus"></i> Add Category--}}
{{--            </a>--}}
            <button type="button" class="btn btn-app bg-primary mt-4" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i> Add Category
            </button>
        </div>
        <table class="table table-striped" id="myTable">
            <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr class="text-center">
                <th scope="col">{{$loop->index+1}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a href="#" class="editButton">
                        <i class="fas fa-edit blue ml-1"></i>
                    </a>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                <div class="modal-body">
                    <div class="form-group mt-1">

                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" required="" name="name" class="form-control" id="exampleInputEmail1" placeholder="Category Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection

