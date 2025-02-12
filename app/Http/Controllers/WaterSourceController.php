<?php

namespace App\Http\Controllers;

use App\Models\WaterSource;
use Illuminate\Http\Request;

class WaterSourceController extends Controller
{
    public function index()
    {
        $waterSources = WaterSource::latest()->paginate(9);
        return view('water-source.index', compact('waterSources'));
    }

    public function show($id)
    {
        $waterSource = WaterSource::findOrFail($id);
        return view('water-source.show', compact('waterSource'));
    }

    public function getActive()
    {
        $waterSources = WaterSource::where('source_status', 'active')->paginate(9);
        return view('water-source.index', compact('waterSources'));
    }

    public function getByType($type)
    {
        $waterSources = WaterSource::where('source_type', $type)->paginate(9);
        return view('water-source.index', compact('waterSources'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $waterSources = WaterSource::where('source_name', 'LIKE', "%{$query}%")
            ->orWhere('source_code', 'LIKE', "%{$query}%")
            ->orWhere('village', 'LIKE', "%{$query}%")
            ->orWhere('district', 'LIKE', "%{$query}%")
            ->paginate(9);

        if ($waterSources->isEmpty()) {
            return view('water-source.index', [
                'waterSources' => $waterSources,
                'searchAlert' => "Tidak ditemukan hasil untuk pencarian '$query'"
            ]);
        }

        return view('water-source.index', [
            'waterSources' => $waterSources,
            'searchQuery' => $query
        ]);
    }
}
