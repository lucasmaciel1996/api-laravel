<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;
class DevicesController extends Controller
{
    public function index()
    {
        return Devices::all();
    }

    public function show($id)
    {
        return Devices::find($id);
    }

    public function store(Request $request)
    {
        $device = Devices::create($request->all());
        return response()->json($device,201);
    }

    public function update(Request $request, $id)
    {
        $device = Devices::findOrFail($id);
        $device->update($request->all());

        return response()->json($device,200);
    }

    public function delete(Request $request, $id)
    {
        $device = Devices::findOrFail($id);
        $device->delete();

        return response()->json(null,204);
    }

}
