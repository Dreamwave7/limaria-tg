<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinics = Clinic::all();
       return view("clinic.index",compact("clinics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clinic.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "string",
            "address" => "string|min:10"
        ]);

        Clinic::create($validatedData);

        return redirect()->route("clinic.index");
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
        $clinic = Clinic::find($id)->first();
        $clinic->delete();

        return redirect()->route("clinic.index");
    }
}
