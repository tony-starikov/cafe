<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $categories = Category::get();

        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create()->id;
//            dd($order);
            session(['orderId' => $order]);
        } else {
            $order = Order::findOrFail($orderId);
        }

        return view('basket', compact('categories', 'order'));
    }

    public function order()
    {
        $categories = Category::get();
        return view('order', compact('categories'));
    }

    public function basketAdd($productId)
    {
        $categories = Category::get();

        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order]);
        } else {
            $order = Order::find($orderId);
        }

        $order->products()->attach($productId);

        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $categories = Category::get();

        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order]);
            return redirect()->route('index');
        }

        $order = Order::find($orderId);

        if (is_null($order->products)) {
            return redirect()->route('index');
        }

        $order->products()->detach($productId);


        return redirect()->route('basket');
    }
}
