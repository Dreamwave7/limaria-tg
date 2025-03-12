<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view("employee.index",compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clinics = Clinic::all();
        return view("employee.create",compact("clinics"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "string",
            "clinic_id" => "integer",
            "telegram_name" => "string",
            "telegram_id" => "string"
        ]);

        Employee::create($validatedData);
        return redirect()->route("employee.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route("employee.index");
    }
}
