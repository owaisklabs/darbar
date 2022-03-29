@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="justify-content: space-between;align-items: center;" class="d-flex ">
            <h2 class="text-black-50 mt-2">Order</h2>


        </div>
        <table class="table table-striped" id="myTable">
            <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Event</th>
                <th scope="col">whatsApp</th>
                <th scope="col">No of People</th>
                <th scope="col">Amount</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order as $item)

                <tr class="text-center">
                    <th scope="col">{{$loop->index+1}}</th>
                    <td >{{$item->customer_name}}</td>
                    <td>{{$item->event}}</td>
                    <td>{{$item->whatsapp}}</td>
                    <td>{{$item->nop}}</td>
                    <td>{{$item->orderProduct->sum('amount')}}</td>
                    <td>
                        <a href="{{url('order-detail',$item->id)}}" class="editButton">
                            <i class="fas fa-user blue ml-1"></i>
                        </a>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

