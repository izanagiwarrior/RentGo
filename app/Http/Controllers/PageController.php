<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    public function welcome(Request $request)
    {
        $product = Products::latest()->take(6)->get();
        return view('users.welcome', compact('product'));
    }

    public function show(Request $request, $id)
    {
        $product = Products::find($id);
        dd($product);
    }

    public function contact(){
        return view('users.contact');
    }

    public function cart(){
        $order = Order::where('id_user',"=",Auth::user()->id)->get();
        return view('cart', compact('order'));
    }

    public function car(){
        $data = Products::all();
        return view('users.cars',compact('data'));
    }

    public function about(){
        return view('users.about');
    }

    public function car_detail($id){
        $product = Products::find($id);
        $data = Products::latest()->take(3)->get();
        return view('detailCar',compact('product','data'));
    }

    public function order(Request $request,$id){
        $product = Products::find($id);
        $order = new Order();
        $order->id_product = $id;
        $order->id_user = Auth::user()->id;
        $order->duration = $request->duration;
        $order->start = $request->start;
        $order->notes = "";
        $order->price = $product->price * $request->duration;
        $order->save();

        $order = Order::where('id_user',"=",Auth::user()->id)->get();
        return redirect(route('cart',compact('order')));
    }
}
