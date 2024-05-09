<?php

namespace App\Http\Controllers;

use App\Exports\OrganizacionExport;
use App\Models\Directiva;
use App\Models\Organizacion;
use App\Models\Tipo_organicacion;
use App\Models\Tipo_vigencia;
use App\Models\Tipos;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo_org = Tipo_organicacion::pluck('tipo_nombre', 'id')->toArray();
        return view('organizaciones.index', ['tipo_organizacion' => $tipo_org]);
    }
    public function export()
    {
        return Excel::download(new OrganizacionExport, 'organizacion.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rut = $request->input('rut');

        // Verificar si el campo 'rut' está vacío
        if ($rut !== NULL) {
            $existeORG = Organizacion::where('rut', $rut)->first();

            if ($existeORG) {
                // Si ya existe una organización con el mismo rut, mostrar un mensaje de error
                return redirect()->back()->with('error', 'error');
            } else {
                // Si no existe una organización con el mismo rut, crear y guardar la nueva organización
                $org = new Organizacion;
                $org->nombre = $request->input('nombre');
                $org->rut = $rut;
                $org->id_tipo = $request->input('id_tipo');
                $org->rol_municipal = $request->input('rol_municipal');
                $org->fecha_concesion = $request->input('fecha_concesion');
                $org->n_inscripcion_RC = $request->input('n_inscripcion_RC');
                $org->estatuto = $request->input('estatuto');
                $org->lugar_funcionamiento = $request->input('lugar_funcionamiento');
                $org->save();

                return redirect()->back()->with('success', 'success');
            }
        } else {
            // Si el campo 'rut' está vacío, permitir que el código pase sin realizar ninguna acción
            $org = new Organizacion;
            $org->nombre = $request->input('nombre');
            $org->rut = $rut;
            $org->id_tipo = $request->input('id_tipo');
            $org->rol_municipal = $request->input('rol_municipal');
            $org->fecha_concesion = $request->input('fecha_concesion');
            $org->n_inscripcion_RC = $request->input('n_inscripcion_RC');
            $org->estatuto = $request->input('estatuto');
            $org->lugar_funcionamiento = $request->input('lugar_funcionamiento');
            $org->save();

            return redirect()->back()->with('success', 'success');
        }
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
    public function update(Request $request, $id)
    {
        $organizacion = Organizacion::find($id);
        $organizacion->nombre = $request->input('nombre');
        $organizacion->rut = $request->input('rut');
        $organizacion->rol_municipal = $request->input('rol_municipal');
        $organizacion->fecha_concesion = $request->input('fecha_concesion');
        $organizacion->n_inscripcion_RC = $request->input('n_inscripcion_RC');
        $organizacion->lugar_funcionamiento = $request->input('lugar_funcionamiento');
        $organizacion->estatuto = $request->input('estatuto');
        $organizacion->id_tipo = $request->input('id_tipo');
        $organizacion->update();
        return redirect()->back()->with('modificado', 'modificado');;
    }
    public function detalle($id)
    {
        $organizacion = Organizacion::with('Tipo_Organizacion')->find($id);
        if (!$organizacion) {
            // Abortar con un error 404
            abort(404);
        }
        $tipo_org = Tipo_organicacion::pluck('tipo_nombre', 'id')->toArray();

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
            'tipo_vigencia' => $tipo_vigencia,
            'tipo_organizacion' => $tipo_org
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
