<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $products = Product::orderBy('created_at', 'desc')->get();
        return view('shop', ['products' => ProductResource::collection($products)]);
    }

    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image'] = $imagePath;
        }

        $product = Product::create($validatedData);

        return new ProductResource($product);
    }
}

