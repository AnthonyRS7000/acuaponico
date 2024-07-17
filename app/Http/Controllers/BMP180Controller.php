<?php

namespace App\Http\Controllers;

use App\Models\BMP180;
use Illuminate\Http\Request;

class BMP180Controller extends Controller
{
    public function index()
    {
        return BMP180::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pressure' => 'required|numeric',
            'temperature' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i:s',
        ]);

        $bmp180 = BMP180::create($data);
        return response()->json($bmp180, 201);
    }

    public function show(BMP180 $bmp180)
    {
        return $bmp180;
    }

    public function update(Request $request, BMP180 $bmp180)
    {
        $data = $request->validate([
            'pressure' => 'required|numeric',
            'temperature' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i:s',
        ]);

        $bmp180->update($data);
        return response()->json($bmp180, 200);
    }

    public function destroy(BMP180 $bmp180)
    {
        $bmp180->delete();
        return response()->json(null, 204);
    }
}
