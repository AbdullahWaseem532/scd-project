<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::withCount('products')->latest()->paginate(10);
        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'description' => $request->description
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully.',
            'data' => $category
        ], 201);
    }

    public function show(Category $category)
    {
        $category->loadCount('products');
        return response()->json([
            'success' => true,
            'data' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'description' => $request->description
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully.',
            'data' => $category
        ]);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully.'
        ]);
    }
}

