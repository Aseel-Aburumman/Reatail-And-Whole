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
    public function store(ProductRequest $request)
    {
        $product = Product::createProduct($request->validated());

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }


    // Get a single product by ID
    public function show(int $id)
    {
        $product = Product::findProductById($id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('admin.products.show', compact('product'));
    }

    public function edit(int $id)
    {
        $product = Product::findById($id);

        if (!$product) {
            return redirect()->route('admin.products.index')->with('error', 'Product not found');
        }

        return view('admin.products.edit', compact('product'));
    }

    // Update a product
    public function update(ProductRequest $request, int $id)
    {
        $product = Product::findProductById($id);

        if (!$product) {
            return redirect()->route('admin.products.index')->with('error', 'Product not found');
        }

        $product->updateProduct($request->validated());

        return redirect()->route('admin.products.show', $product->id)->with('success', 'Product updated successfully');
    }



    // Delete a product
    public function destroy(int $id)
    {
        $product = Product::findProductById($id);

        if (!$product) {
            return redirect()->route('admin.products.index')->with('error', 'Product not found');
        }

        $product->deleteProduct();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }

}
