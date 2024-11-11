<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Requests\StatusRequest;
use App\Http\Resources\StatusResource;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('admin.statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.statuses.create');
    }

    public function store(StatusRequest $request)
    {
        $status = Status::createStatus($request->validated());
        return redirect()->route('statuses.index')->with('success', 'Status created successfully');
    }

    public function show($id)
    {
        $status = Status::findOrFail($id);
        return view('admin.statuses.show', compact('status'));
    }

    public function edit($id)
    {
        $status = Status::findOrFail($id);
        return view('admin.statuses.edit', compact('status'));
    }

    public function update(StatusRequest $request, $id)
    {
        $status = Status::findOrFail($id);
        $status->updateStatus($request->validated());
        return redirect()->route('statuses.index')->with('success', 'Status updated successfully');
    }

    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $status->deleteStatus();
        return redirect()->route('statuses.index')->with('success', 'Status deleted successfully');
    }
}
