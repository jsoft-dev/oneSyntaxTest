<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /////////////////////////////////////////
    public function index()
    {
        return view('main');
        // return response()->json(Department::all());
    }
    /////////////////////////////////////////
    public function create()
    {
        return view('department.create');
    }
    /////////////////////////////////////////   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60'
        ]);
        Department::create($request->all());
    }
    /////////////////////////////////////////
    public function show(Department $department)
    {
        return $department;
    }
    /////////////////////////////////////////
    public function edit()
    {
        return view('department.edit');
    }
    /////////////////////////////////////////
    public function update(Department $department, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60'
        ]);

        $department->fill($request->all());

        return response()->json($department);
    }
    /////////////////////////////////////////
    public function destroy(Department $department)
    {
        return $department->delete();
    }
}
