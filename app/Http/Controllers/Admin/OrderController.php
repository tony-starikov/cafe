<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 1)->paginate(20);

        return view('auth.orders.index', compact('orders'));
    }

    public function show($orderId)
    {
        $order = Order::where('id', $orderId)->first();
//        dd($order);
        return view('auth.orders.show', compact('order'));
    }
}
