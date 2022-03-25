<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\TermAndCondition;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return $request->all();
    }





}
