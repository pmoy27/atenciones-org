@include('menu.menu')
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <div class="flex gap-4 items-center">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-download">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M12 17v-6" />
                    <path d="M9.5 14.5l2.5 2.5l2.5 -2.5" />
                </svg> Excel <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="{{ route('export') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Org. Comunal</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                </ul>
            </div>

            <a data-modal-target="crud-create-org" data-modal-toggle="crud-create-org" class="cursor-pointer p-2 border border-blue-600 text-blue-600 text-xs font-semibold bg-white rounded-sm uppercase">Agregar Nueva Organización</a>
        </div>

    </div>
    <div class="mt-2 bg-white border p-3 shadow-sm rounded-sm">
        <livewire:organizacion-table />
    </div>
</div>

@include('organizaciones.create')