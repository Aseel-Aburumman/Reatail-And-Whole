<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {

        $user = User::create($request->validated());


        $role = Role::where('name', 'retailer')->first();
        $user->assignRole($role);


        // $user->givePermissionTo('create order');

        return redirect()->route('login.view')->with('success', 'User registered successfully');
    }


    public function showLoginForm()
    {
        return view('login');
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user = User::find(Auth::user()->id);


            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard')->with([
                    'success' => 'Admin login successful',
                    'user' => new UserResource($user)
                ]);
            }

            return redirect()->route('home')->with([
                'success' => 'Login successful',
                'user' => new UserResource($user)
            ]);
        }


        return redirect()->back()->withErrors(['login_error' => 'Invalid email or password']);
    }

    /**

     */
    public function logout()
    {
        Auth::logout();


        return redirect()->route('login.view')->with('success', 'Logged out successfully');
    }
}
