<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /////////////////////////////////////////
    public function index()
    {
        return Employee::all();
    }
    /////////////////////////////////////////
    public function create()
    {
    }
    /////////////////////////////////////////   
    public function store(Request $request)
    {
        $request->validate([
            'lastname' => 'required|string|max:60',
            'firstname' => 'required|string|max:60',
            'middlename' => 'max:60|string',
            'address' => 'required',
            'department_id' => 'required',
            'city_id' => 'required',
            'state_id' => 'required',
            'zip' => 'required',
            'birthdate' => 'required',
            'date_hired' => 'required',
        ]);
        Employee::create($request->all());
    }
    /////////////////////////////////////////
    public function show(Employee $employee)
    {
        return $employee;
    }
    /////////////////////////////////////////
    public function edit()
    {
    }
    /////////////////////////////////////////
    public function update(Employee $employee, Request $request)
    {
        $request->validate([
            'lastname' => 'required|string|max:60',
            'firstname' => 'required|string|max:60',
            'middlename' => 'max:60|string',
            'address' => 'required|string|max:120',
            'department_id' => 'required',
            'city_id' => 'required',
            'state_id' => 'required',
            'zip' => 'required',
            'birthdate' => 'max:60',
            'date_hired' => 'required',
        ]);

        $employee->fill($request->all());

        return response()->json($employee);
    }
    /////////////////////////////////////////
    public function destroy(Employee $employee)
    {
        return $employee->delete();
    }
}
