<?php

namespace App\Http\Controllers;

use App\Models\OrderContribution;
use App\Models\User;
use App\Models\Order;
use App\Models\Store;
use App\Models\PriceTier;
use App\Models\Product;



use App\Http\Requests\OrderContributionRequest;
use App\Http\Resources\OrderContributionResource;
use Illuminate\Http\Request;

class OrderContributionController extends Controller
{
    public function index()
    {
        $contributions = OrderContribution::getAllContribution();
        return response()->json(OrderContributionResource::collection($contributions));
    }



    public function show($id)
    {
        $Order = Order::findOrderById($id);
        $contribution = OrderContribution::where('order_id', $id);
        if ($contribution) {
            return view('admin.orderDetail.show', compact('contribution', 'Order'));
        } else {
            return response()->json(['message' => 'Order item not found.'], 404);
        }
    }
    public function create($order_id)
    {
        // $contribution = OrderContribution::where('order_id', $order_id);
        $Order = Order::findOrderById($order_id);

        $users = User::all();
        $stores = Store::all();
        $products = Product::all();
        $priceTiers = PriceTier::all();

        return view('admin.orderDetail.create', compact('users', 'stores', 'products', 'priceTiers', 'order_id', 'Order'));
    }

    public function store(OrderContributionRequest $request)
    {
        // Create the new contribution
        $contribution = OrderContribution::createContribution($request->validated());

        // Update the total quantity in the associated order
        $order = Order::findOrFail($contribution->order_id);
        $order->total_quantity += $contribution->quantity;
        $order->save();

        return redirect()->route('order.index')->with([
            'success' => 'Order updated successfully and total quantity adjusted.',
        ]);    }

    public function edit($id)
    {
        $users = User::all();
        $Ordercontribution = OrderContribution::findContributionById($id);

        return view('admin.orderDetail.edit', compact('Ordercontribution', 'users'));
    }

    public function update(OrderContributionRequest $request, $id)
    {
        // Retrieve the current contribution
        $contribution = OrderContribution::findContributionById($id);

        if ($contribution) {
            $oldQuantity = $contribution->quantity;

            $contribution->updateContribution($request->validated());

            $newQuantity = $request->quantity;

            $quantityDifference = $newQuantity - $oldQuantity;

            $order = Order::findOrFail($contribution->order_id);
            $order->total_quantity += $quantityDifference;
            $order->save();

            return redirect()->route('order.index')->with([
                'success' => 'Order updated successfully and total quantity adjusted.',
            ]);
        } else {
            return response()->json(['message' => 'Order contribution not found.'], 404);
        }
    }


    public function destroy($id)
    {
        $contribution = OrderContribution::findContributionById($id);
        if ($contribution) {
            $contribution->deleteContribution();
            return redirect()->route('order.index')->with([
                'success' => 'Order contribution successfully deleted',
            ]);        } else {
            return response()->json(['message' => 'Order contribution not found.'], 404);
        }
    }
}
