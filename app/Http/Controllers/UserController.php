<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /////////////////////////////////////////
    public function index()
    {
        return User::all();
    }
    /////////////////////////////////////////
    public function create()
    {
    }
    /////////////////////////////////////////   
    public function store(Request $request)
    {
        /* $request->validate([
            'username' => 'required|string|max:60',
            'first_name' => 'required|string|max:60',
            'last_name' => 'required|string|max:60',
            'email' => 'required|string|max:60',
            'password' => 'required|string|max:255',
        ]);
        User::create($request->all()); */
    }
    /////////////////////////////////////////
    public function show(User $user)
    {
        return $user;
    }
    /////////////////////////////////////////
    public function edit()
    {
    }
    /////////////////////////////////////////
    public function update(User $user, Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:20',
            'first_name' => 'required|string|max:60',
            'last_name' => 'required|string|max:60',
            'email' => 'required|string|max:60',
            'password' => 'required|string|max:255',
        ]);

        $user->fill($request->all());

        return response()->json($user);
    }
    /////////////////////////////////////////
    public function destroy(User $user)
    {
        return $user->delete();
    }
}
