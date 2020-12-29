<?php

namespace App\Http\Controllers\User;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders()->where('status', 1)->get();

        return view('auth.user.index', compact('orders'));
    }

    public function show($orderId)
    {
        $order = Order::where('id', $orderId)->first();
        if (!Auth::user()->orders->contains($order)) {
            return back();
        }
        return view('auth.user.show', compact('order'));
    }
}
