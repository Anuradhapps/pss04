<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function fetchDistricts(Request $request)
    {
        $province = $request->input('province');

        // Fetch districts based on the selected province
        $districts = Location::where('province', $province)->distinct()->pluck('district');

        return response()->json(['districts' => $districts]);
    }
    public function fetchfetchASC(Request $request)
    {
        $district = $request->input('district');

        // Fetch districts based on the selected province
        $asc = Location::where('district', $district)->distinct()->pluck('asc_');

        return response()->json(['asc_s' => $asc]);
    }
    public function fetchAiRange(Request $request)
    {
        $asc_ = $request->input('asc_');

        // Fetch districts based on the selected province
        $ai_range = Location::where('asc_', $asc_)->distinct()->pluck('ai_range');
        return response()->json(['ai_ranges' => $ai_range]);
    }
}
