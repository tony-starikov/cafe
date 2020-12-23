<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    public function basket()
    {
        $categories = Category::get();
        return view('basket', compact('categories'));
    }

    public function order()
    {
        $categories = Category::get();
        return view('order', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();

        $categories = Category::get();

        return view('category', compact('category', 'categories'));
    }

    public function product($category, $product)
    {
        $categories = Category::get();
        return view('product', compact('categories', 'product', 'category'));
    }
}
