<?php

namespace App\Livewire;

use App\Models\Organizacion;
use Illuminate\Support\Carbon;
use App\Helpers\PowerGridThemes\TailwindStriped;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class OrganizacionTable extends PowerGridComponent
{


    public function setUp(): array
    {


        return [


            Header::make()
                ->showSearchInput(),

            Footer::make()
                ->showPerPage()
                ->showRecordCount(),

        ];
    }

    public function datasource(): Builder
    {
        return Organizacion::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('fecha_concesion', fn ($model) => Carbon::parse($model->fecha_concesion)->format('d/m/Y'))
            ->add('created_at');
    }

    public function columns(): array
    {
        return [

            Column::make('NOMBRE', 'nombre')
                ->bodyAttribute('text-xs', 'text-transform: uppercase')
                ->sortable()
                ->searchable(),
            Column::make('RUT', 'rut')
                ->bodyAttribute('text-xs', 'text-transform: uppercase')
                ->sortable()
                ->searchable(),
            Column::make('FECHA CONCESION', 'fecha_concesion')
                ->bodyAttribute('text-xs', 'text-transform: uppercase')
                ->sortable()
                ->searchable(),
            Column::action('Acciones')
        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        // Redirigir a la ruta 'detalle.persona' con el id del row
        redirect()->route('organizaciones.detalle', ['id' => $rowId]);
    }

    public function actions(Organizacion $row): array
    {
        return [
            Button::add('edit')
                ->slot('<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" class="text-blue-500" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
            </svg>')
                ->id()
                ->class('border border-blue-500 p-1 flex items-center gap-1')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
