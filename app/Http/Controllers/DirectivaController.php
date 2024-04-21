<?php

namespace App\Http\Controllers;

use App\Models\Directiva;
use App\Models\Organizacion;
use Illuminate\Http\Request;

class DirectivaController extends Controller
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
    public function create()
    {
    }
    public function agregarDirectiva(Request $request)
    {
        $idOrganizacion = $request->input('id_organizacion');
        // Buscar la directiva actual y actualizar su estado
        $directivaActual = Directiva::where('id_organizacion', $idOrganizacion)
            ->where('estado', 'A')
            ->first();

        if ($directivaActual) {
            $directivaActual->update(['estado' => 'N', 'fecha_cambio' => $request->input('fecha_cambio')]); // Cambiar el estado a "inactivo"
        }

        // Agregar la nueva directiva
        $nuevaDirectiva = new Directiva();
        $nuevaDirectiva->id_organizacion = $idOrganizacion;
        $nuevaDirectiva->integrantes = $request->input('integrantes');
        $nuevaDirectiva->fecha_termino_directiva = $request->input('fecha_termino_directiva');
        $nuevaDirectiva->estado = 'A';
        $nuevaDirectiva->id_vigencia = $request->input('id_vigencia');
        $nuevaDirectiva->save();

        return redirect()->back()->with('success', 'Directiva agregada exitosamente.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Directiva $directiva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directiva $directiva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Directiva $directiva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directiva $directiva)
    {
        //
    }
}
