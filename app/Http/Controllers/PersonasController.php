<?php

namespace App\Http\Controllers;

use App\Models\Atenciones;
use App\Models\Organizacion;
use App\Models\Personas;
use Illuminate\Http\Request;
use App\Models\Tipos;

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
        $totalAtenciones = Atenciones::count();
        $totalOrg = Organizacion::count();

        return view('dashboard', [
            'totalPersonas' => $totalPersonas,
            'totalAtenciones' => $totalAtenciones,
            'totalOrg' => $totalOrg
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizacion = Organizacion::pluck('nombre', 'id')->toArray();

        return view('personas.create', [
            'organizacion' => $organizacion,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingPersona = Personas::where('rut', $request->input('rut'))->first();

        if ($existingPersona) {
            // Si ya existe una persona con el mismo rut, mostrar un mensaje de error
            return redirect()->back()->with('error', 'error');
        }

        // Si no existe una persona con el mismo rut, crear y guardar la nueva persona
        $personas = new Personas;
        $personas->nombres = $request->input('nombres');
        $personas->apellidos = $request->input('apellidos');
        $personas->rut = $request->input('rut');
        $personas->direccion = $request->input('direccion');
        $personas->sector = $request->input('sector');
        $personas->telefono = $request->input('telefono');
        $personas->fecha_nacimiento = $request->input('fecha_nacimiento');
        $personas->sexo = $request->input('sexo');
        $personas->id_organizacion = $request->input('organizacion');
        $personas->save();

        return redirect()->back()->with('success', 'success');
    }
    public function detalle($id_persona)
    {

        $organizacion = Organizacion::pluck('nombre', 'id')->toArray();
        // Buscar la persona por ID
        $personas = Personas::with('organizacion')->find($id_persona);
        $id_usuario = auth()->id();
        $tipos_atencion = Tipos::pluck('nombre', 'id')->toArray();

        // Verificar que la persona exista
        if (!$personas) {
            // Abortar con un error 404
            abort(404);
        }
        // Verificar si la relación 'organizacion' está presente y obtener el nombre
        $nombre_organizacion = ($personas->organizacion) ? $personas->organizacion->nombre : 'Sin organización';
        // Devolver la vista con los datos necesarios
        return view('personas.detalle', [
            'personas' => $personas,
            'id_usuario' => $id_usuario,
            'tipos_atencion' => $tipos_atencion,
            'nombre_organizacion' => $nombre_organizacion,
            'organizacion' => $organizacion,
        ]);
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
    public function update(Request $request, $id)
    {
        /* $existingPersona = Personas::where('rut', $request->input('rut'))->first();

        if ($existingPersona) {
            // Si ya existe una persona con el mismo rut, mostrar un mensaje de error
            return redirect()->back()->with('error', 'error');
        }*/


        $personas = Personas::find($id);
        $personas->nombres = $request->input('nombres');
        $personas->apellidos = $request->input('apellidos');
        $personas->rut = $request->input('rut');
        $personas->direccion = $request->input('direccion');
        $personas->sector = $request->input('sector');
        $personas->telefono = $request->input('telefono');
        $personas->fecha_nacimiento = $request->input('fecha_nacimiento');
        $personas->sexo = $request->input('sexo');
        $personas->id_organizacion = $request->input('organizacion');
        $personas->update();
        return redirect()->back()->with('update', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
