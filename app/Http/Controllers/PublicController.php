<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PublicController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(12);
        return view('index', compact('products'));
    }
    public function show(Product $product){
        return view('show', compact('product'));
    }
}
