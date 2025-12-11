<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->get();
        return view('admin.products.create', compact('categories'));
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
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image' => 'nullable|url|max:255'
        ]);

        $imagePath = null;

        // Handle file upload (takes priority over URL)
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('images/products', 'public');
            $imagePath = '/storage/' . $imagePath;
        } elseif ($request->filled('image')) {
            // Use URL if provided and no file uploaded
            $imagePath = $request->image;
        } else {
            // Default placeholder
            $imagePath = 'https://via.placeholder.com/300x200';
        }

        Product::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'image' => $imagePath
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('is_active', true)->get();
        return view('admin.products.edit', compact('product', 'categories'));
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
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image' => 'nullable|url|max:255'
        ]);

        $updateData = [
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'stock' => $request->stock
        ];

        // Handle image update
        if ($request->hasFile('image_file')) {
            // Delete old image if it's a stored file (not a URL)
            if ($product->image && strpos($product->image, '/storage/') === 0) {
                $oldImagePath = str_replace('/storage/', '', $product->image);
                Storage::disk('public')->delete($oldImagePath);
            }
            
            // Store new image
            $imagePath = $request->file('image_file')->store('images/products', 'public');
            $updateData['image'] = '/storage/' . $imagePath;
        } elseif ($request->filled('image')) {
            // Only update image URL if no file was uploaded
            // Delete old image if it's a stored file (not a URL)
            if ($product->image && strpos($product->image, '/storage/') === 0) {
                $oldImagePath = str_replace('/storage/', '', $product->image);
                Storage::disk('public')->delete($oldImagePath);
            }
            $updateData['image'] = $request->image;
        }
        // If neither file nor URL is provided, keep the existing image

        $product->update($updateData);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Delete associated image file if it's a stored file (not a URL)
        if ($product->image && strpos($product->image, '/storage/') === 0) {
            $imagePath = str_replace('/storage/', '', $product->image);
            Storage::disk('public')->delete($imagePath);
        }

        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
