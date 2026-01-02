<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    public function getAllCategories($perPage = 10)
    {
        return Category::withCount('products')->latest()->paginate($perPage);
    }

    public function createCategory(array $data)
    {
        return Category::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'description' => $data['description'] ?? null
        ]);
    }

    public function getCategory(Category $category)
    {
        $category->loadCount('products');
        return $category;
    }

    public function updateCategory(Category $category, array $data)
    {
        $category->update([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'description' => $data['description'] ?? null
        ]);

        return $category;
    }

    public function deleteCategory(Category $category)
    {
        return $category->delete();
    }
}
