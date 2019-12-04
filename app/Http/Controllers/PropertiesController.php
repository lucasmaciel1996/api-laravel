<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class PropertiesController extends Controller
{
    public function index()
    {
        return Properties::all();
    }

    public function show($id)
    {
        return Properties::find($id);
    }

    public function store(Request $request)
    {
        $device = Properties::create($request->all());
        return response()->json($device,201);
    }

    public function update(Request $request, $id)
    {
        $device = Properties::findOrFail($id);
        $device->update($request->all());

        return response()->json($device,200);
    }

    public function delete(Request $request, $id)
    {
        $device = Properties::findOrFail($id);
        $device->delete();

        return response()->json(null,204);
    }
}
