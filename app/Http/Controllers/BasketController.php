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
            session(['orderId' => $order]);
            return redirect()->route('index');
        } else {
            $order = Order::findOrFail($orderId);
            $quantity = 0;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        if ($order->products->count() < 1) {
            return redirect()->route('index');
        }

        return view('basket', compact('categories', 'order', 'quantity'));
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

        if (!is_object($order)){
            $order = Order::create()->id;
            session(['orderId' => $order]);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
//            dd($pivotRow);
        } else {
            $order->products()->attach($productId);
        }

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

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('basket');
    }
}
