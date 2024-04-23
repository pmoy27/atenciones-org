@include('menu.menu')
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    #pg-footer nav a {
        color: black;
    }
</style>
<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="flex justify-between items-center">
        <h1 class="text-xl uppercase">Listado de Usuarios</h1>
        <a data-modal-target="crud-create-org" data-modal-toggle="crud-create-org" class="cursor-pointer p-2 border border-blue-600 text-blue-600 text-xs font-semibold bg-white rounded-sm uppercase">Agregar Nueva Organización</a>
    </div>
    <div class="mt-2 bg-white border p-3 shadow-sm rounded-sm">
        <livewire:organizacion-table />
    </div>
</div>

@include('organizaciones.create')