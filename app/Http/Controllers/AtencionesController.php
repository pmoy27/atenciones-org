<?php

namespace App\Http\Controllers;

use App\Models\Atenciones;
use Illuminate\Http\Request;
use App\Models\Personas;
use App\Models\Tipos;
use App\Models\User;

class AtencionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_persona)
    {
        // Buscar el personal por ID
        $personas = Personas::find($id_persona);
        $id_usuario = auth()->id();
        $tipos_atencion = Tipos::pluck('nombre', 'id')->toArray();

        // Verificar que la persona y el usuario existan
        if (!$personas) {
            // Abortar con un error 404
            abort(404);
        }

        // Devolver la vista con los datos necesarios
        return view('atenciones.create', [
            'personas' => $personas,
            'id_usuario' => $id_usuario,
            'tipos_atencion' => $tipos_atencion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $atenciones = new Atenciones();
        $atenciones->detalle_atencion = $request->input('detalle_atencion');
        $atenciones->fecha_antencion = $request->input('fecha_antencion');
        $atenciones->id_usuario = $request->input('id_usuario');
        $atenciones->id_persona = $request->input('id_persona');
        $atenciones->tipo_atencion = $request->input('tipo_atencion');
        $atenciones->save();

        // Redireccionamos a la URL guardada
        return redirect()->back();
    }
    public function detalle($id_persona)
    {
        // Buscar la persona por ID
        $personas = Personas::find($id_persona);

        // Verificar que la persona exista
        if (!$personas) {
            // Abortar con un error 404
            abort(404);
        }

        // Cargar la relación 'atenciones' con sus relaciones 'usuario' y 'tipo'
        $personas->load('atenciones.usuario', 'atenciones.tipos');

        // Devolver la vista con los datos necesarios
        return view('personas.detalle', [
            'personas' => $personas,
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Atenciones $atenciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atenciones $atenciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atenciones $atenciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $atencion = Atenciones::find($id);
        $atencion->delete();
        return redirect()->back()->with('success', 'success');
    }
}
