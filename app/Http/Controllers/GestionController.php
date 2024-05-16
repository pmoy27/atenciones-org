<?php

namespace App\Http\Controllers;

use App\Models\Tipos;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        $tipos = Tipos::all();
        return view('gestion.index', compact('tipos'));
    }
}
