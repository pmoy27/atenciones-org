@include('menu.menu')
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="mt-2 bg-white border p-3 shadow-sm rounded-sm">
        <livewire:organizacion-table />
    </div>
</div>