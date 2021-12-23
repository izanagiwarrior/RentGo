<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Products;
use App\Store;
use App\User;
use App\View;

class PageController extends Controller
{
    public function welcome(Request $request)
    {
        $product = Products::latest()->take(6)->get();
        return view('welcome', compact('product'));
    }

    public function show(Request $request, $id)
    {
        $product = Products::find($id);
        dd($product);
    }

    public function katalog(Request $request, $search = "")
    {
        $product = Products::paginate(8);
        $category = Category::all();
        if (isset($request->category)) {
            $product = Products::where('id_category', '=', $request->category)->paginate(8);
        } else {
            if (isset($request->search)) {
                $search = $request->search;
            }
            $product = Products::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('crafter', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->orWhere('price', 'LIKE', '%' . $search . '%')
            ->paginate(8);
        }
        return view('katalog', compact('product', 'category', 'search'));
    }

    public function toko(Request $request, $slug_toko)
    {
        $store = Store::where('slug', '=', $slug_toko)->get()[0];
        $user = User::where('id', '=', $store->id_user)->get()[0];
        $product = Products::where('id_store', '=', $store->id)->get();
        $category = Category::all();
        return view('toko', compact('store', 'product', 'category', 'user'));
    }

    public function showToko(Request $request, $search = "")
    {
        // $store = Store::where('id','!=',1)->get();
        $store = Store::where("id_user", ">", 2)->get();
        $category = Category::all();
        if (isset($request->search)) {
            $search = $request->search;
        }
        $store = Store::where("id_user", ">", 2)
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('slug', 'LIKE', '%' . $search . '%');
                $query->orWhere('address', 'LIKE', '%' . $search . '%');
                $query->orWhere('phone_number', 'LIKE', '%' . $search . '%');
            })
            ->get();
        return view('showToko', compact('store', 'category', 'search'));
    }

    public function detailProduk(Request $request, $id_product)
    {
        // adding view
        $view = new View();
        $view->id_product = $id_product;
        $view->save();

        $product = Products::find($id_product);
        $data = Products::latest()->take(4)->get();
        $store = Store::find($product->id_store);
        return view('detailProduk', compact('product', 'store', 'data'));
    }
}
