<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('admin.users.create');

    }

    // /**
    //  * Store a newly created user in storage.
    //  */
    // public function store(UserStoreRequest $request)
    // {

    //     $user = User::createUser($request->validated());


    //     return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    // }

    // public function store(UserStoreRequest $request)
    // {
    //     try {
    //         // Create the user
    //         $user = User::createUser($request->validated());


    //         return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    //     } catch (\Exception $e) {


    //         return redirect()->back()->with('error', 'Failed to create user.');
    //     }
    // }

    public function store(UserStoreRequest $request)
{
    try {
        // Create the user
        $user = User::create($request->validated());

        // Assign a role to the user
        if ($request->has('role')) {
            $user->assignRole($request->input('role'));
        }

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to create user.');
    }
}


    /**
     * Display the specified user.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    // public function update(UserUpdateRequest $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     // Update user details without hashing the password
    //     $user->update($request->validated());

    //     // Redirect to the user list with a success message
    //     return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    // }


    public function update(UserUpdateRequest $request, $id)
{
    $user = User::findOrFail($id);

    // Update user details
    $user->update($request->validated());

    // Update the user's role
    if ($request->has('role')) {
        $user->syncRoles([$request->input('role')]);
    }

    return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
}

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
