<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductService
{
    public function getAllProducts($perPage = 10)
    {
        return Product::with('category')->latest()->paginate($perPage);
    }

    public function createProduct(array $data)
    {
        $product = Product::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'description' => $data['description'],
            'price' => $data['price'],
            'discount_price' => $data['discount_price'] ?? null,
            'category_id' => $data['category_id'],
            'stock' => $data['stock'],
            'image' => $data['image'] ?? 'https://via.placeholder.com/300x200'
        ]);

        $product->load('category');

        return $product;
    }

    public function getProduct(Product $product)
    {
        $product->load('category');
        return $product;
    }

    public function updateProduct(Product $product, array $data)
    {
        $product->update([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'description' => $data['description'],
            'price' => $data['price'],
            'discount_price' => $data['discount_price'] ?? null,
            'category_id' => $data['category_id'],
            'stock' => $data['stock'],
            'image' => $data['image'] ?? $product->image
        ]);

        $product->load('category');

        return $product;
    }

    public function deleteProduct(Product $product)
    {
        return $product->delete();
    }
}
