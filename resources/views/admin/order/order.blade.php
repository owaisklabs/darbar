@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="justify-content: space-between;align-items: center;" class="d-flex ">
            <h2 class="text-black-50 mt-2">Order</h2>


        </div>
        {{--        <table>--}}
        {{--        <tr>--}}
        {{--            <td style="width: 221px">Search By Date:</td>--}}
        {{--            <td>--}}
        {{--                <input type="date" id="txtLeaveFrom" placeholder="From Date" class="form-control text-primary">--}}
        {{--            </td>--}}
        {{--            <td>--}}
        {{--                <input type="date" id="txtLeaveTo" placeholder="To Date" class="form-control text-primary">--}}
        {{--            </td>--}}
        {{--            <td>--}}
        {{--                <input type="button" id="btnSave" class="btn-primary" value="Search">--}}
        {{--            </td>--}}
        {{--        </tr>--}}
        {{--        </table>--}}
        <form action="{{route('search-order')}}" method="POST">
            <div style="justify-content: space-between;align-items: center;" class="d-flex ">
                @csrf
                <div class="col-lg-2  col-sm-12">
                    <h2 class="text-black mt-2">Search:</h2>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <input type="text" name="customer_name" id="txtLeaveFrom" placeholder="Customer Name" class="form-control text-primary">
                </div>
                <div class="col-lg-3 col-sm-12">
                    <input type="date" id="txtLeaveFrom" name="from_date" placeholder="From Date" class="form-control text-primary">
                </div>
                <div class="col-lg-3  col-sm-12">
                    <input type="date" id="txtLeaveTo" name="to_date" placeholder="To Date" class="form-control text-primary">
                </div>
                <div class="col-lg-1 col-sm-12">
                    <button type="submitwe" class="btn btn-app bg-primary mt-4 btn-style" data-toggle="modal"
                            data-target="#exampleModal">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
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
            @if($order)
                @foreach($order as $item)

                    <tr class="text-center">
                        <th scope="col">{{$loop->index+1}}</th>
                        <td>{{$item->customer_name}}</td>
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
            @else
                <p>No data Find</p>
            @endif

            </tbody>
        </table>
    </div>

    <style>
        .btn-style {
            height: auto;
            padding: 10px 0 !important;
            margin: 22px 0 22px 10px;
        }
    </style>
@endsection

