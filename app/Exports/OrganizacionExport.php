<?php

namespace App\Exports;

use App\Models\Organizacion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpParser\Node\Expr\FuncCall;

class OrganizacionExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Organizacion::select('tipo_organicacions.tipo_nombre', 'organizacions.nombre', 'organizacions.rol_municipal', 'organizacions.fecha_concesion', 'organizacions.n_inscripcion_RC', 'organizacions.lugar_funcionamiento', 'directivas.integrantes')
            ->join('tipo_organicacions', 'tipo_organicacions.id', '=', 'organizacions.id_tipo')
            ->join('directivas', 'directivas.id_organizacion', '!=', 'organizacions.id')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Tipo de Organizacion comunal',
            'Nombre',
            'Rol Municipal',
            'Fecha concesión Personalidad Juridica',
            'Nro de Inscripcion Registro Civil',
            'Sede o Lugar de funcionamiento'
        ];
    }
}
