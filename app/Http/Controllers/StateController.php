<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /////////////////////////////////////////
    public function index()
    {
        return State::all();
    }
    /////////////////////////////////////////
    public function create()
    {
    }
    /////////////////////////////////////////   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required|max:60'
        ]);
        State::create($request->all());
    }
    /////////////////////////////////////////
    public function show(State $state)
    {
        return $state;
    }
    /////////////////////////////////////////
    public function edit()
    {
    }
    /////////////////////////////////////////
    public function update(State $state, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60'
        ]);

        $state->fill($request->all());

        return response()->json($state);
    }
    /////////////////////////////////////////
    public function destroy(State $state)
    {
        return $state->delete();
    }
}
