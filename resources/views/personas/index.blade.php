@include('menu.menu')



<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="flex justify-between items-center">
        <h1 class="text-xl uppercase">Listado de Usuarios</h1>
        <a href="{{ route('personas.create') }}" class="p-2 bg-purple-600 text-xs text-white rounded-sm uppercase">Agregar Nuevo Usuario</a>
    </div>
    <div>

        <form class="flex items-center max-w-xl mx-auto">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                    </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase  bg-gray-700 text-white">
                    <tr>
                        <th scope="col" class="px-3 py-2  uppercase">
                            Nombres
                        </th>
                        <th scope="col" class="px-3 py-2  uppercase">
                            Apellidos
                        </th>
                        <th scope="col" class="px-3 py-2  uppercase">
                            Rut
                        </th>
                        <th scope="col" class="px-3 py-2  uppercase">
                            Sector
                        </th>
                        <th scope="col" class="px-3 py-2 uppercase">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $personals )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-3 py-2 uppercase">
                            {{$personals->nombres}}
                        </td>
                        <td class="px-3 py-2 uppercase">
                            {{$personals->apellidos}}
                        </td>
                        <td class="px-3 py-2 uppercase">
                            {{$personals->rut}}
                        </td>
                        <td class="px-3 py-2 uppercase">
                            {{$personals->sector}}
                        </td>
                        <td class="px-3 py-2 flex gap-1">
                            <a data-tooltip-target="detalle{{$personals->id}}" class="border border-blue-500 p-1 " href="/detalle/{{$personals->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" class="text-blue-500" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>

                            </a>
                            <a data-tooltip-target="eliminar{{$personals->id}}" class="border border-blue-500 p-1 " href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7h16" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    <path d="M10 12l4 4m0 -4l-4 4" />
                                </svg></a>
                        </td>

                    </tr>
                    <div id="detalle{{$personals->id}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Detalle
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="eliminar{{$personals->id}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Eliminar
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>
</div>


@if(session('success'))
<script>
    Swal.fire({
        title: "Registrado!",
        text: "Atención registrada correctamente!",
        icon: "success"
    });
</script>
@endif

<script>
    $(document).ready(function() {
        $('#miTabla').DataTable();
    });
</script>