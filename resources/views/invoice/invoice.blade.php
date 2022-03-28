<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbar Caters</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
            background-color: #eb1f27;
            padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="brand-section">
        <div class="row">
            <div class="col-6">
                <h1 class="text-white"> Darbar Caterers & Decorators</h1>
            </div>

        </div>
    </div>

    <div class="body-section">
        <div class="row">
            <div class="col-6">
                <h2 class="heading">Invoice No : {{$data['order']->id}}</h2>
                <p class="sub-heading">No of People :  {{$data['order']->nop}} </p>
                <p class="sub-heading">Event : {{$data['order']->event}}</p>
                <p class="sub-heading">Email Address : {{$data['order']->customer_email}} </p>
            </div>
            <div class="col-6">
                <p class="sub-heading">Full Name: {{$data['order']->customer_name}} </p>
                <p class="sub-heading">Address:  {{$data['order']->customer_address}}</p>
                <p class="sub-heading">Contact:  {{$data['order']->customer_contact}}</p>
                <p class="sub-heading">WhatsApp: {{$data['order']->whatsapp}} </p>
            </div>
        </div>
    </div>

    <div class="body-section">
        <h3 class="heading">Ordered Items</h3>
        <br>
        <table class="table-bordered">
            <thead>
            <tr>
                <th>Item</th>
                <th class="w-20">Quantity</th>
                <th class="w-20">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($data['order_detail'] as $order_detail)
                    <td>{{$order_detail->item->name}}</td>

{{--                <td{{\App\Models\Item::where('id',$order_detail->item_id)->pluck('name')->first()}}</td>--}}
                    <td>{{$order_detail->qty}}</td>
                <td>{{$order_detail->item->charge_amount}}</td>
            </tr>
            @endforeach


            <tr>
                <td colspan="2" class="text-right">Total</td>
                <td> {{\Illuminate\Support\Facades\Session::get('total')}}</td>
            </tr>
            </tbody>
        </table>
        <br>

    </div>


    </div>
</div>

</body>
</html>
