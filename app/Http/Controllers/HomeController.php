<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\TermAndCondition;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return  redirect()->route('order');
    }
    public function getProduct($id)
    {
        $product = Product::where('category_id',$id)->get();
        return $product;
    }
    public function getItem($id)
    {
        $item = Item::where('product_id',$id)->get();
        return $item;
    }
    public function getItemDetail($id)
    {
        $item = Item::find($id);
        return $item;
    }
    public function purcahse(Request $request){
//         return $request->all();
        $order = new Order();
        $order->customer_name = $request->name ;
        $order->customer_address = $request->address ;
        $order->customer_contact = $request->contact ;
        $order->event = $request->event ;
        $order->customer_email = $request->email ;
        $order->whatsapp = $request->whatsapp ;
        $order->nop = $request->nop ;
        $order->save();
        for ($i=0; $i <count($request->category); $i++) {
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->category_id = $request->category[$i];
            $order_detail->product_id = $request->product[$i];
            $order_detail->item_id = $request->item[$i];
            $order_detail->qty = $request->qty[$i];
            $order_detail->amount = $request->sub_total[$i];
            $order_detail->save();
        }
        $sum = OrderDetail::where('order_id',$order->id)->sum('amount');
        Session::flash('total',$sum);
        $order_detail = OrderDetail::where('order_id',$order->id)->get();
        $data['order']=$order;
        $data['order_detail']=$order_detail;
//        dd($data);
//        Session::flash('total',)
        $pdf = PDF::loadView('invoice.invoice',['data' => $data]);

        return $pdf->download('dabar_caters_invoice.pdf');
        return $request->all();
    }
    public function order(){
        $order = Order::has('orderProduct')->latest()->get();
//        return $order['0']->orderProduct->sum('amount');
        return view('admin.order.order',get_defined_vars());
    }
    public function orderDetail($id){
//        dd($id);
        $order= Order::find($id);
        return view('admin/order.order-detail',get_defined_vars());
    }
}
