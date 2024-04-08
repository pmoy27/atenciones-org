<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $personas = Personas::all();
        return view('personas.index', compact('personas'));
    }
    public function verDashboar()
    {

        $totalPersonas = Personas::count();
        return view('dashboard', ['totalPersonas' => $totalPersonas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personas = new Personas;
        $personas->nombres = $request->input('nombres');
        $personas->apellidos = $request->input('apellidos');
        $personas->rut = $request->input('rut');
        $personas->direccion = $request->input('direccion');
        $personas->sector = $request->input('sector');
        $personas->telefono = $request->input('telefono');
        $personas->fecha_nacimiento = $request->input('fecha_nacimiento');
        $personas->sexo = $request->input('sexo');
        $personas->save();

        return redirect()->back()->with('success', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
