@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div  class="d-flex mt-4">
            <h2 class="text-black-50 mt-2">Create Item</h2>
        </div>
        <form action="{{route('item.update',$item->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mt-4">
                <label for="exampleInputPassword1">Select Product</label>
                <select name="product" required="" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option disabled="" selected="selected" data-select2-id="3">Select Category </option>
                    @foreach($products as $product)
                        <option value="{{$product->id}}" @if($product->id == $item->product_id) selected @else " " @endif>{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="exampleInputEmail1">Item Name</label>
                <input type="text" value="{{$item->name}}" required="" name="item_name" class="form-control" id="exampleInputEmail1" placeholder="Item Name">
            </div>
            <div class="row">
                <div class="form-group mt-4 col-6">
                    <label for="exampleInputEmail1">Labour Cost</label>
                    <input type="text" value="{{$item->labour_cost}}" required="" name="labour_cost" class="form-control" id="exampleInputEmail1" placeholder="Labour Cost">
                </div>


                <div class="form-group mt-4 col-6">
                    <label for="exampleInputEmail1">Making Cost</label>
                    <input type="text" value="{{$item->making_cost}}" required="" name="making_cost" class="form-control" id="exampleInputEmail1" placeholder="Making Cost">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-4 col-6">
                    <label for="exampleInputEmail1">Charge Amount</label>
                    <input type="text" required="" value="{{$item->charge_amount}}" name="charge_amount" class="form-control" id="exampleInputEmail1" placeholder="Charge Amount">

                </div>
                <div class="form-group mt-4 col-6">
                    <label for="exampleInputEmail1">Total Amount</label>
                    <input type="text" required="" value="{{$item->total_amount}}" name="total_amount" class="form-control" id="exampleInputEmail1" placeholder="Total Amount">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
        </form>
    </div>

@endsection

