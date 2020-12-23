<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        return view('index', compact('categories', 'products'));
    }

    public function category($code)
    {
        $categories = Category::get();

        $category = $categories->where('code', $code)->first();

//        $products = Product::where('category_id', $category->id)->get();

        return view('category', compact('category', 'categories'));
    }

    public function product($category, $product)
    {
        $categories = Category::get();

        $category = $categories->where('code', $category)->first();

        $product = Product::where('code', $product)->first();

        return view('product', compact('categories', 'product', 'category'));
    }
}
