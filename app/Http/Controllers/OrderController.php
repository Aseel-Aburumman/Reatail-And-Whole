<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Store;
use App\Models\User;
use App\Models\Product;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\PriceTier;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $Orders = Order::getAllOrders();
        // return response()->json(OrderResource::collection($Orders));
        return view('admin.order.index', compact('Orders'));
    }

    public function show(string $id)
    {
        $Order = Order::findOrderById($id);

        if ($Order) {
            // return  response()->json(new OrderResource($Order));
            return view('admin.order.show', compact('Order'));
        } else {
            return response()->json([
                'message' => 'We could not find the Order.'
            ], 404);
        }
    }

    public function create()
    {
        $stores = Store::getAllStores();
        $users = User::all();
        $products = Product::getAllProducts();
        $priceTiers = PriceTier::all();

        return view('admin.order.create', compact('stores', 'users', 'products', 'priceTiers'));
    }
    public function store(OrderRequest $request)
    {
        $Order = Order::createOrder($request->validated());
        if ($Order) {
            return redirect()->route('order.index')->with([
                'success' => 'Order create successful',
            ]);
        } else {
            return response()->json([
                'message' => 'We could not create a new Order.'
            ], 500);
        }
    }


    public function edit($id)
    {
        $Order = Order::findOrderById($id);
        $products = Product::getAllProducts();
        $priceTiers = PriceTier::all();
        $stores = Store::getAllStores();

        $users = User::all();
        return view('admin.order.edit', compact('Order', 'stores','users', 'products', 'priceTiers'));
    }

    public function update(OrderRequest $request, $id)
    {
        $Order = Order::findOrderById($id);

        if ($Order) {
            $Order->updateOrder($request->validated());
            // return response()->json(new OrderResource($Order));
            return redirect()->route('order.index')->with([
                'success' => 'Order updated successful',
            ]);
        } else {
            return response()->json([
                'message' => 'We could not find the Order.'
            ], 404);
        }
    }

    public function destroy(string $id)
    {
        $Order = Order::findOrderById($id);

        if ($Order) {
            $Order->deleteOrder();
            return redirect()->route('order.index')->with([
                'success' => 'Order deleted successful',
            ]);
        } else {
            return response()->json([
                'message' => 'We could not find the Order.'
            ], 404);
        }
    }
}
