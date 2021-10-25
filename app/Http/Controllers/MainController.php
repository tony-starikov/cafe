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
        $products = Product::with('category')->paginate(9);
        $categories = Category::get();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = null;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('index', compact('categories', 'products', 'quantity'));
    }

    public function new()
    {
        $products = Product::where('new', 1)->paginate(9);
        $categories = Category::get();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = null;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('new', compact('categories', 'products', 'quantity'));
    }

    public function sale()
    {
        $products = Product::with('category')->where('sale', 1)->paginate(9);
        $categories = Category::get();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = null;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('sale', compact('categories', 'products', 'quantity'));
    }

    public function delivery()
    {
        $categories = Category::get();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = null;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('delivery', compact('categories', 'quantity'));
    }

    public function about()
    {
        $categories = Category::get();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = null;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('about', compact('categories', 'quantity'));
    }

    public function category($code)
    {
        $categories = Category::get();

        $category = $categories->where('code', $code)->first();

        $products = $category->products()->paginate(9);

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $quantity = null;
            foreach ($order->products as $product) {
                $quantity += $product->pivot->count;
            }
        }

        return view('category', compact('category', 'categories', 'quantity', 'products'));
    }

    public function product($category, $product)
    {
        $categories = Category::get();

        $category = $categories->where('code', $category)->first();

        $product = Product::where('code', $product)->first();

        $quantity = null;
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::find($orderId);
            $quantity = null;
            foreach ($order->products as $prod) {
                $quantity += $prod->pivot->count;
            }
        }

        return view('product', compact('categories', 'product', 'category', 'quantity'));
    }

}
