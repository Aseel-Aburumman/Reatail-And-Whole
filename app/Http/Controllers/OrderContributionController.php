<?php

namespace App\Http\Controllers;

use App\Models\OrderContribution;
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
        $contribution = OrderContribution::findContributionById($id);
        if ($contribution) {
            return response()->json(new OrderContributionResource($contribution));
        } else {
            return response()->json(['message' => 'Order contribution not found.'], 404);
        }
    }

    public function store(OrderContributionRequest $request)
    {
        $contribution = OrderContribution::createContribution($request->validated());
        return response()->json(new OrderContributionResource($contribution), 201);
    }

    public function update(OrderContributionRequest $request, $id)
    {
        $contribution = OrderContribution::findContributionById($id);
        if ($contribution) {
            $contribution->updateContribution($request->validated());
            return response()->json(new OrderContributionResource($contribution));
        } else {
            return response()->json(['message' => 'Order contribution not found.'], 404);
        }
    }

    public function destroy($id)
    {
        $contribution = OrderContribution::findContributionById($id);
        if ($contribution) {
            $contribution->deleteContribution();
            return response()->json(['message' => 'Order contribution deleted successfully.']);
        } else {
            return response()->json(['message' => 'Order contribution not found.'], 404);
        }
    }
}
