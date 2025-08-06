<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Obtiene todas las locations.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Consulta todas las locations
        $locations = Locations::all();

        // Retorna las locations en formato JSON
        return response()->json($locations, 200);
    }
}