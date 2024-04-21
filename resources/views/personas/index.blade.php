@include('menu.menu')
@livewireScripts



<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="flex justify-between items-center">
        <h1 class="text-xl uppercase">Listado de Usuarios</h1>
        <a href="{{ route('personas.create') }}" class="p-2 bg-purple-600 text-xs text-white rounded-sm uppercase">Agregar Nuevo Usuario</a>
    </div>
    <div class="mt-2 bg-white border p-3 shadow-sm rounded-sm">
        <livewire:personas-table />
    </div>