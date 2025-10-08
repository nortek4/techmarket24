<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return response()->json([
            $products
        ]);
    }

    public function show(Product $product)
    {
        $product->load('category');
        return response()->json([
            $product
        ]);
    }
}