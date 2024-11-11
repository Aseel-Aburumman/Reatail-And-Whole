<?php

namespace App\Http\Controllers;

use App\Models\PriceTier;
use App\Http\Requests\PriceTierRequest;
use App\Http\Resources\PriceTierResource;
use Illuminate\Http\Request;

class PriceTierController extends Controller
{

    public function index()
    {
        $priceTiers = PriceTier::all();
        return view('admin.price_tiers.index', compact('priceTiers'));
    }


    public function create()
    {
        return view('admin.price_tiers.create');
    }


    public function store(PriceTierRequest $request)
    {
        $priceTier = PriceTier::createPriceTier($request->validated());
        return redirect()->route('price_tiers.index')->with('success', 'Price Tier created successfully');
    }


    public function show($id)
    {
        $priceTier = PriceTier::findOrFail($id);
        return view('admin.price_tiers.show', compact('priceTier'));
    }


    public function edit($id)
    {
        $priceTier = PriceTier::findOrFail($id);
        return view('admin.price_tiers.edit', compact('priceTier'));
    }


    public function update(PriceTierRequest $request, $id)
    {
        $priceTier = PriceTier::findOrFail($id);
        $priceTier->updatePriceTier($request->validated());
        return redirect()->route('price_tiers.index')->with('success', 'Price Tier updated successfully');
    }


    public function destroy($id)
    {
        $priceTier = PriceTier::findOrFail($id);
        $priceTier->deletePriceTier();
        return redirect()->route('price_tiers.index')->with('success', 'Price Tier deleted successfully');
    }
}
