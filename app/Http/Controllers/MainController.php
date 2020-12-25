<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = 0;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('index', compact('categories', 'products', 'quantity'));
    }

    public function category($code)
    {
        $categories = Category::get();

        $category = $categories->where('code', $code)->first();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = 0;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('category', compact('category', 'categories', 'quantity'));
    }

    public function product($category, $product)
    {
        $categories = Category::get();

        $category = $categories->where('code', $category)->first();

        $product = Product::where('code', $product)->first();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = 0;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('product', compact('categories', 'product', 'category', 'quantity'));
    }
}
