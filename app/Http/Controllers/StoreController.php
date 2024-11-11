<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\StoreResource;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Retrieve all stores
    public function index()
    {
        $stores = Store::getAllStores();
        return response()->json(StoreResource::collection($stores));
    }

    // Show a specific store
    public function show($id)
    {
        $store = Store::findStoreById($id);
        if ($store) {
            return response()->json(new StoreResource($store));
        } else {
            return response()->json(['message' => 'Store not found.'], 404);
        }
    }

    // Create a new store
    public function store(StoreRequest $request)
    {
        $store = Store::createStore($request->validated());
        return response()->json(new StoreResource($store), 201);
    }

    // Update an existing store
    public function update(StoreRequest $request, $id)
    {
        $store = Store::findStoreById($id);
        if ($store) {
            $store->updateStore($request->validated());
            return response()->json(new StoreResource($store));
        } else {
            return response()->json(['message' => 'Store not found.'], 404);
        }
    }

    // Delete a store
    public function destroy($id)
    {
        $store = Store::findStoreById($id);
        if ($store) {
            $store->deleteStore();
            return response()->json(['message' => 'Store deleted successfully.']);
        } else {
            return response()->json(['message' => 'Store not found.'], 404);
        }
    }
}
