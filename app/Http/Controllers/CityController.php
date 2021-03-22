<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /////////////////////////////////////////
    public function index()
    {
        return City::all();
    }
    /////////////////////////////////////////
    public function create()
    {
    }
    /////////////////////////////////////////   
    public function store(Request $request)
    {
        $request->validate([
            'state' => 'required',
            'name' => 'required|max:60'
        ]);
        City::create($request->all());
    }
    /////////////////////////////////////////
    public function show(City $city)
    {
        return $city;
    }
    /////////////////////////////////////////
    public function edit()
    {
    }
    /////////////////////////////////////////
    public function update(City $city, Request $request)
    {
        $request->validate([
            'state' => 'required',
            'name' => 'required|string|max:60'
        ]);

        $city->fill($request->all());

        return response()->json($city);
    }
    /////////////////////////////////////////
    public function destroy(City $city)
    {
        return $city->delete();
    }
}
