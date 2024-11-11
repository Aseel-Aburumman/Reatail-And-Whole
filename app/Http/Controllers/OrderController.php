<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $Orders = Order::getAllOrders();
        return response()->json(OrderResource::collection($Orders));
    }

    public function show(string $id)
    {
        $Order = Order::findOrderById($id);

        if ($Order) {
            return  response()->json(new OrderResource($Order));
        } else {
            return response()->json([
                'message' => 'We could not find the Order.'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $Order = Order::createOrder($request->validated());
        if ($Order) {
            return response()->json(new OrderResource($Order));
        } else {
            return response()->json([
                'message' => 'We could not create a new Order.'
            ], 500);
        }
    }


    public function update(Request $request, $id)
    {
        $Order = Order::findOrderById($id);

        if ($Order) {
            $Order->updateOrder($request->validated());
            return response()->json(new OrderResource($Order));
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
            return response()->json([
                'message' => 'Order deleted successfully.'
            ], 200);
        } else {
            return response()->json([
                'message' => 'We could not find the Order.'
            ], 404);
        }
    }
}
