<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Institutions;

class IndexController extends Controller
{
    public function index()
    {
        $instituciones = Institutions::all();
        return view('inicio', compact('instituciones'));
    }
}
