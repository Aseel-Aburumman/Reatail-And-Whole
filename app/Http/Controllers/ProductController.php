<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get all products
    public function index()
    {
        // جلب جميع المنتجات
        $products = Product::getAllProducts();

        // إرجاع العرض إلى صفحة المنتجات مع تمرير البيانات
        return view('admin.products.index', compact('products'));
    }


    // Create a new product
    public function store(ProductRequest $request): JsonResponse
    {
        $product = Product::createProduct($request->validated());
        return response()->json(new ProductResource($product), 201);
    }

    // Get a single product by ID
    public function show(int $id): JsonResponse
    {
        $product = Product::findProductById($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json(new ProductResource($product), 200);
    }

    // Update a product
    public function update(ProductRequest $request, int $id): JsonResponse
    {
        $product = Product::findProductById($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->updateProduct($request->validated());
        return response()->json(new ProductResource($product), 200);
    }

    // Delete a product
    public function destroy(int $id): JsonResponse
    {
        $product = Product::findProductById($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->deleteProduct();
        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
