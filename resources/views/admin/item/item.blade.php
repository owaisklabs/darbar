@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="justify-content: space-between;align-items: center;" class="d-flex ">
            <h2 class="text-black-50 mt-2">Items</h2>

            <a class="btn btn-app bg-primary mt-4" href="{{route('item.create')}}">
                <i class="fas fa-plus"></i> Add Items
            </a>
        </div>
        <table class="table table-striped" id="myTable">
            <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Name</th>
                <th scope="col">Labour Cost</th>
                <th scope="col">Charge Amount</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
            <tr class="text-center">
                <th scope="col">{{$item->id}}</th>
                <td class="text-bold">{{$item->product->name}}</td>
                <td>{{$item->labour_cost}}</td>
                <td>{{$item->making_cost}}</td>
                <td>{{$item->charge_amount}}</td>
                <td>{{$item->total_amount}}</td>
                <td>
                    <a href="{{route('item.show',$item)}}" class="editButton">
                        <i class="fas fa-edit blue ml-1"></i>
                    </a>
                    <a href="{{route('item.show',$item)}}" class="editButton">
                        <i class="fas fa-trash blue ml-1"></i>
                    </a>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

