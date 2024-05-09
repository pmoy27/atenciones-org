@include('menu.menu')
@livewireScripts

<style>
    #table_base_default thead tr th {
        background-color: #1F2937;
        color: white;
    }

    #pg-footer nav a {
        color: black;
    }
</style>

<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="flex justify-between items-center">
        <h1 class="text-xl uppercase">Listado de Usuarios</h1>
        <a href="{{ route('personas.create') }}" class="p-2 bg-purple-600 text-xs text-white rounded-sm uppercase">Agregar Nuevo Usuario</a>
    </div>
    <div class="mt-2 bg-white border p-3 shadow-sm rounded-sm">
        <livewire:personas-table />
    </div>