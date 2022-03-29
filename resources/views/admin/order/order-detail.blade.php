@extends('layouts.app')

@section('content')

        <h2 class="text-black-50 mt-3 ml-3">Order Details</h2>
        <table class="table table-striped" id="myTable">
            <thead>
            <tr class="text-center">
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">E-mail</th>
                <th scope="col">Contact</th>
                <th scope="col">event</th>
                <th scope="col">whatsapp</th>
                <th scope="col">No of People</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody class="text-center">

            <tr>


                <td>{{$order->customer_name}}</td>
                <td>{{$order->customer_address}}</td>
                <td>{{$order->customer_email}};</td>
                <td>{{$order->customer_contact}}</td>
                <td>{{$order->event}}</td>
                <td>{{$order->whatsapp   }}</td>
                <td>{{$order->nop}}</td>
                <td>{{$order->orderProduct->sum('amount')}}</td>

            </tr>

            </tbody>
        </table>
        <h5 class="text-black-50 mt-3 ml-3">Items</h5>
        <div class="container mt-4">
            <table class="table table-bordered">
                <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Product</th>
                    <th>Item</th>
                    <th>Amount</th>
                    <th>Qty</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($order->orderProduct as $item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->item->name}}</td>
                    <td>{{$item->amount}}</td>
                    <td>{{$item->qty}}</td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>



@endsection

