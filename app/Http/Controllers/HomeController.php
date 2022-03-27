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
        $user =  User::all();
        // dd($user);
        return view('admin.user.user',get_defined_vars());
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
        // return $request->all();
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
            $order_detail->save();
        }
        dd("done");


        $pdf = PDF::loadView('invoice.invoice');

        return $pdf->download('itsolutionstuff.pdf');
        return $request->all();
    }





}
