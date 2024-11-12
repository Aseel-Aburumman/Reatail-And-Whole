<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Retrieve all stores and display in a Blade view
    public function index()
    {
        $stores = Store::getAllStores();
        return view('admin.stores.index', compact('stores'));
    }

    // Show a specific store in a Blade view
    public function show($id)
    {
        $store = Store::findStoreById($id);
        if ($store) {
            return view('admin.stores.show', compact('store'));
        } else {
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        }
    }

    // Display form to create a new store
    public function create()
{
    $users =User::all();
    return view('admin.stores.create', compact('users')); // تمرير المتغير إلى العرض
}


    // Store the new store data
    public function store(StoreRequest $request)
    {
        $store = Store::createStore($request->validated());
        return redirect()->route(route: 'stores.index')->with('success', 'Store created successfully.');
    }

    // Display form to edit an existing store
    public function edit($id)
{
    $users = User::all(); // Fetch all users to populate the dropdown
    $store = Store::findStoreById($id);

    if ($store) {
        return view('admin.stores.edit', compact('store', 'users')); // Pass both $store and $users to the view
    } else {
        return redirect()->route('stores.index')->with('error', 'Store not found.');
    }
}


    // Update an existing store data
    public function update(StoreRequest $request, $id)
    {
        $store = Store::findStoreById($id);
        if ($store) {
            $store->updateStore($request->validated());
            return redirect()->route('stores.index')->with('success', 'Store updated successfully.');
        } else {
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        }
    }

    // Delete a store
    public function destroy($id)
    {
        $store = Store::findStoreById($id);
        if ($store) {
            $store->deleteStore();
            return redirect()->route('stores.index')->with('success', 'Store deleted successfully.');
        } else {
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        }
    }
}
