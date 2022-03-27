@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex mt-4">
            <h2 class="text-black-50 mt-2">Create Item</h2>
        </div>
        <form action="{{ route('item.store') }}" method="POST">
            @csrf
            <div class="form-group mt-4">
                <label for="exampleInputPassword1">Select Product</label>
                <select name="product" required="" class="form-control select2 select2-hidden-accessible"
                    style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option disabled="" selected="selected" data-select2-id="3">Select Category </option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="exampleInputEmail1">Item Name</label>
                <input type="text" required="" name="item_name" class="form-control" id="exampleInputEmail1"
                    placeholder="Item Name">
            </div>
            <div class="row">
                <div class="form-group mt-4 col-4">
                    <label for="exampleInputEmail1">Labour Cost</label>
                    <input type="number" required="" value="0" name="labour_cost" class="form-control labour_cost" id="exampleInputEmail1"
                        placeholder="Labour Cost">
                </div>


                <div class="form-group mt-4 col-4">
                    <label for="exampleInputEmail1">Making Cost</label>
                    <input type="number" required=""  value="0" name="making_cost" class="form-control making_cost" id="exampleInputEmail1"
                        placeholder="Making Cost">
                </div>
                <div class="form-group mt-4 col-4">
                    <label for="exampleInputEmail1">Total Amount</label>
                    <input type="number" required="" readonly name="total_amount" class="form-control total_amount" id="exampleInputEmail1"
                        placeholder="Total Amount">
                </div>

            </div>

                <div class="row">
                <div class="form-group mt-4 col-4">
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" required="" name="unit" class="form-control" id="exampleInputEmail1"
                        placeholder="Unit">

                </div>
                <div class="form-group mt-4 col-4">
                    <label for="exampleInputEmail1">Charge Amount</label>
                    <input type="number" required=""  value="0" name="charge_amount" class="form-control charge_amount" id="exampleInputEmail1"
                        placeholder="Charge Amount">

                </div>
                <div class="form-group mt-4 col-4">
                    <label for="exampleInputEmail1">Percantage</label>
                    <input type="number" required="" readonly name="percantage" class="form-control percantage" id="exampleInputEmail1"
                        placeholder="Percentage">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
        </form>
    </div>
    <script>

        $('.labour_cost').on('change keyup',function(){
            let labour_cost = $('.labour_cost').val()
            let making_cost = $('.making_cost').val()
            let total= parseInt(labour_cost)+parseInt(making_cost)
            $('.total_amount').val(total)
            // console.log(total)
        })
        $('.making_cost').on('change keyup',function(){
            let labour_cost = $('.labour_cost').val()
            let making_cost = $('.making_cost').val()
            let total= parseInt(labour_cost)+parseInt(making_cost)
            $('.total_amount').val(total)
            // console.log(total)
        })
        $('.charge_amount').on('change keyup',function(){
            let total1 =  $('.charge_amount').val() - $('.total_amount').val()
            let percentage = total1/$('.charge_amount').val()*100
            $('.percantage').val(percentage.toFixed(2))
            console.log(percentage);
        })
    </script>

@endsection
