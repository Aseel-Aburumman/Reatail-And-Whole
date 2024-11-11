<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Http\Requests\OrderItemRequest;
use App\Http\Resources\OrderItemResource;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::getAllOrderItems();
        return response()->json(OrderItemResource::collection($orderItems));
    }

    public function show($id)
    {
        $orderItem = OrderItem::findOrderItemById($id);
        if ($orderItem) {
            return response()->json(new OrderItemResource($orderItem));
        } else {
            return response()->json(['message' => 'Order item not found.'], 404);
        }
    }

    public function store(OrderItemRequest $request)
    {
        $orderItem = OrderItem::createOrderItem($request->validated());
        return response()->json(new OrderItemResource($orderItem), 201);
    }

    public function update(OrderItemRequest $request, $id)
    {
        $orderItem = OrderItem::findOrderItemById($id);
        if ($orderItem) {
            $orderItem->updateOrderItem($request->validated());
            return response()->json(new OrderItemResource($orderItem));
        } else {
            return response()->json(['message' => 'Order item not found.'], 404);
        }
    }

    public function destroy($id)
    {
        $orderItem = OrderItem::findOrderItemById($id);
        if ($orderItem) {
            $orderItem->deleteOrderItem();
            return response()->json(['message' => 'Order item deleted successfully.']);
        } else {
            return response()->json(['message' => 'Order item not found.'], 404);
        }
    }
}
