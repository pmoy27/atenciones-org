<?php

namespace App\Livewire;

use App\Models\Personas;
use Livewire\Component;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\ViewColumn;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UsuariosTabla extends LivewireTable
{
    protected string $model = Personas::class;

    protected function columns(): array
    {
        return [
            Column::make('Nombre', 'nombres'),
            Column::make('APELLIDOS', 'apellidos'),
            Column::make('RUT', 'rut'),
            Column::make('SECTOR', 'sector'),
            ViewColumn::make('ACCIONES', 'botones.tabla'),

        ];
    }
}
