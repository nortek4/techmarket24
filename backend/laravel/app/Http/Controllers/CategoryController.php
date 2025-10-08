<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //GET /api/categories
    public function index()
    {
        $categories = Category::withCount('products')->paginate(10);
        return response()->json([
            $categories
        ]);
    }

    /**
     * Display the specified resource.
     */
    //GET /api/categories/{category}
    public function show(Category $category)
    {
        $category->load('products');
        return response()->json([
            $category
        ]);
    }
}
