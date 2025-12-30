<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|string'
        ]);

        $product = Product::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'image' => $request->image ?? 'https://via.placeholder.com/300x200'
        ]);

        $product->load('category');

        return response()->json([
            'success' => true,
            'message' => 'Product created successfully.',
            'data' => $product
        ], 201);
    }

    public function show(Product $product)
    {
        $product->load('category');
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|string'
        ]);

        $product->update([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'image' => $request->image ?? $product->image
        ]);

        $product->load('category');

        return response()->json([
            'success' => true,
            'message' => 'Product updated successfully.',
            'data' => $product
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully.'
        ]);
    }
}

