<?php

namespace App\Http\Controllers;

use App\Models\f;
use App\Models\PestData;
use Illuminate\Http\Request;

class PestDataController extends Controller
{
    public function storePests(Request $request)
    {
        // Validate and save pest data
        // $validated = $request->validate([...]);

        // Save to database (e.g., PestData model)
        // PestData::create($validated);

        // return response()->json(['success' => true]);
        dd("done01");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PestData $f)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PestData $f)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PestData $f)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PestData $f)
    {
        //
    }
}
