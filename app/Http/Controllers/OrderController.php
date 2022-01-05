<?php

namespace App\Http\Controllers;

use App\Order;
use App\Category;
use App\Products;
use App\Store;
use App\User;
use Illuminate\Http\Request;

use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . action('OrderController@update_view', $data->id) . '" type="button" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm">Edit</a>';
                    $button .= '&nbsp;&nbsp;&nbsp;<a href="' . action('OrderController@delete', $data->id) . '" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"' . "onclick='return confirm()'" . '>Delete</a>';
                    return $button;
                })->addColumn('name', function ($data) {
                    return User::find($data->id_user)->name;
                })
                ->rawColumns(['action','name'])
                ->make(true);
        }

        return view('cms.order.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_view($id)
    {
        $data = Order::find($id);
        $user = User::find($data->id_user);
        $product = Products::find($data->id_product);
        return view('cms.order.update', compact('data','user','product'));
    }

    public function update_process(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = "done";
        $order->save();

        return redirect()->route('order')->withSuccess('Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $order = Products::find($id);
        $order->delete();

        return redirect()->route('order')->withSuccess('Order deleted successfully.');
    }
}
