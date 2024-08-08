<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class CommonDataController extends Controller
{
    public function storeCommon(Request $request)
    { dd("done");
        // // Validate and save common data
        // $validated = $request->validate([
        //     'district' => 'required|string',
        //     'asc' => 'required|string',
        //     'ai_range' => 'required|string',
        //     'village' => 'required|string',
        //     'latitude' => 'required|numeric',
        //     'longitude' => 'required|numeric',
        //     'crop_variety' => 'required|string',
        //     'established_date' => 'required|date',
        //     'breeding_method' => 'required|string',
        // ]);

        // // Save to database (e.g., CommonData model)
        // // CommonData::create($validated);

        // return response()->json(['success' => true]);
    }

    public function index(){
        return view('dataInput',[
            'provinces'=>Location::distinct()->pluck('province'),
            'districts' => [],
            'asc_s' => [],
            'ai_ranges' => [],
        ]);
    }

}
