<?php
namespace App\Http\Controllers;

use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('id')->paginate(20);

        return view('locations.index', compact('locations'));
    }

    public function show($id)
    {
        $location = Location::with(['charactersFromHere', 'residents'])
            ->findOrFail($id);

        return view('locations.show', compact('location'));
    }
}
