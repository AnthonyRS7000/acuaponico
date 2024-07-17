<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataViewController extends Controller
{
    public function index()
    {
        // Llamar a las APIs para obtener los datos con un tiempo de espera incrementado
        $dht11Response = Http::timeout(60)->get('http://127.0.0.1:8000/api/dht11');
        $bmp180Response = Http::timeout(60)->get('http://127.0.0.1:8000/api/bmp180');

        // Verificar si las solicitudes fueron exitosas
        if ($dht11Response->successful() && $bmp180Response->successful()) {
            $dht11Data = $dht11Response->json();
            $bmp180Data = $bmp180Response->json();

            // Pasar los datos a la vista
            return view('data-view', compact('dht11Data', 'bmp180Data'));
        } else {
            $error = 'Error al obtener los datos de las APIs.';
            return view('data-view', compact('error'));
        }
    }
}
