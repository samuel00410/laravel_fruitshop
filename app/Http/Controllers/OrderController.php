<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){         //因為跟使用者有關，所以Request $request都要擺上去
        $current_user = $request->user();

        $orders = $current_user->orders()->orderBy('id', 'desc')->get();    //登入的user底下的訂單

        return view('orders.index', [
            'orders' => $orders
        ]);
    }

    public function show($order_number, Request $request){

        $current_user = $request->user();

        $order = $current_user->orders()->where('order_number', $order_number)->first();
        
        if (!$order){
            return redirect()->route('orders.index')->withErrors('沒有這個訂單');
        }

        return view('orders.show', [
            'order' => $order
        ]);
    }
}
