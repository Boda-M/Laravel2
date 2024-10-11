<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json(['products' => $products]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|min:2',
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:5',
            'picture' => 'required|string|min:5',
            'price' => 'required|numeric',
            'stock' => 'nullable|numeric'
        ]);
        $product = Product::create($request->all());

        return response()->json(['product' => $product]);
    }


}
