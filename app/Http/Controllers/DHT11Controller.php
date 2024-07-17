<?php

namespace App\Http\Controllers;

use App\Models\DHT11;
use Illuminate\Http\Request;

class DHT11Controller extends Controller
{
    public function index()
    {
        return DHT11::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i:s',
        ]);

        $dht11 = DHT11::create($data);
        return response()->json($dht11, 201);
    }

    public function show(DHT11 $dht11)
    {
        return $dht11;
    }

    public function update(Request $request, DHT11 $dht11)
    {
        $data = $request->validate([
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i:s',
        ]);

        $dht11->update($data);
        return response()->json($dht11, 200);
    }

    public function destroy(DHT11 $dht11)
    {
        $dht11->delete();
        return response()->json(null, 204);
    }
}

