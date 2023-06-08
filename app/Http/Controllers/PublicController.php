<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function main(){
        $products = Product::latest()->paginate(12);
        return view('main');
    }

    public function details(){
        return view('details');
    }

    public function show(Product $product){
        return view('show', compact('product'));
    }
}
