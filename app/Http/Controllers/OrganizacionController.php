<?php

namespace App\Http\Controllers;

use App\Models\Directiva;
use App\Models\Organizacion;
use App\Models\Tipo_organicacion;
use App\Models\Tipo_vigencia;
use Illuminate\Http\Request;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('organizaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Organizacion $organizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organizacion $organizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organizacion $organizacion)
    {
        //
    }
    public function detalle($id)
    {
        $organizacion = Organizacion::with('Tipo_Organizacion')->find($id);
        if (!$organizacion) {
            // Abortar con un error 404
            abort(404);
        }

        // Consulta para la seccion de Directiva Actual
        $directivas = Directiva::select('directivas.*', 'tipo_vigencias.vigencia AS vigencia')
            ->join('tipo_vigencias', 'directivas.id_vigencia', '=', 'tipo_vigencias.id')
            ->where('directivas.id_organizacion', $id)
            ->where('directivas.estado', 'A')
            ->get();

        $directiva_anterior =  Directiva::select('directivas.*', 'tipo_vigencias.vigencia AS vigencia')
            ->join('tipo_vigencias', 'directivas.id_vigencia', '=', 'tipo_vigencias.id')
            ->where('directivas.id_organizacion', $id)
            ->where('directivas.estado', 'N')
            ->get();

        $tipo_vigencia = Tipo_vigencia::pluck('vigencia', 'id')->toArray();


        return view('organizaciones.detalle', [
            'organizacion' => $organizacion,
            'directivas' => $directivas,
            'directiva_anterior' => $directiva_anterior,
            'tipo_vigencia' => $tipo_vigencia
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizacion $organizacion)
    {
        //
    }
}
