<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
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

        $category = $this->categoryService->createCategory($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully.',
            'data' => $category
        ], 201);
    }

    public function show(Category $category)
    {
        $category = $this->categoryService->getCategory($category);
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

        $category = $this->categoryService->updateCategory($category, $request->all());

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully.',
            'data' => $category
        ]);
    }

    public function destroy(Category $category)
    {
        $this->categoryService->deleteCategory($category);
        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully.'
        ]);
    }
}
