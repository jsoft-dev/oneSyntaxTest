<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /////////////////////////////////////////
    public function index()
    {
        return Country::all();
    }
    /////////////////////////////////////////
    public function create()
    {
        return view('depTest');
    }
    /////////////////////////////////////////   
    public function store(Request $request)
    {
        $request->validate([
            'country_code' => 'required|max:3',
            'name' => 'required|max:60'
        ]);
        Country::create($request->all());
    }
    /////////////////////////////////////////
    public function show(Country $country)
    {
        return $country;
    }
    /////////////////////////////////////////
    public function edit()
    {
        return view('department.edit');
    }
    /////////////////////////////////////////
    public function update(Country $country, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60'
        ]);

        $country->fill($request->all());

        return response()->json($country);
    }
    /////////////////////////////////////////
    public function destroy(Country $country)
    {
        return $country->delete();
    }
}
