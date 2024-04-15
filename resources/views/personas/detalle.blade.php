@include('menu.menu')

<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="mb-7 flex flex-col gap-3 lg:flex-row justify-between  item-center ">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Atenciones
                    </a>
                </li>

                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Detalles</span>
                    </div>
                </li>
            </ol>
        </nav>
        <a data-modal-target="modal-crear" data-modal-toggle="modal-crear" class="cursor-pointer p-2 bg-[#12478a] text-center text-xs text-white rounded-sm uppercase">Agregar Atención</a>

    </div>
    <section class="flex justify-between  ">
        <div class="border w-[520px] bg-white shadow-md p-4">
            <div class="flex justify-between ">
                <h1 class="mb-3  uppercase">Información Personal</h1>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </a>
            </div>
            <div class=" grid gap-x-16 gap-y-3 mb-4 grid-cols-2 max-w-full ">
                <div class="flex flex-col col-span-2 sm:col-span-1 ">
                    <span class="text-xs text-gray-600 uppercase">Nombre</span>
                    <label class="uppercase font-semibold">{{$personas->nombres}} {{$personas->apellidos}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Rut</span>
                    <label class="uppercase font-semibold">{{$personas->rut}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Telefono</span>
                    <label class="uppercase font-semibold">{{$personas->telefono}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Sexo</span>
                    <label class="uppercase font-semibold">{{$personas->sexo}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Fecha de Nacimiento</span>
                    <label class="uppercase font-semibold">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $personas->fecha_nacimiento)->format('d/m/Y') }}</label>

                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Edad</span>
                    <label class="uppercase font-semibold">{{$personas->edad}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Dirección</span>
                    <label class="uppercase font-semibold">{{$personas->direccion}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1">
                    <span class="text-xs text-gray-600 uppercase">Sector</span>
                    <label class="uppercase font-semibold">{{$personas->sector}}</label>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-2">
                    <span class="text-xs text-gray-600 uppercase">Organización</span>
                    <label class="uppercase font-semibold">{{ $nombre_organizacion }}</label>
                </div>
            </div>

        </div>
        <div class="flex flex-col">
            <div class="flex items-center justify-between gap-5 w-[270px] p-6 bg-white border border-gray-200 rounded-sm shadow">
                <div class="flex flex-col">
                    <span class="text-[18px]">10</span>
                    <span class="uppercase text-[11px] text-gray-500">Atenciones totales</span>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="text-[#12478a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-hours-24">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 13c.325 2.532 1.881 4.781 4 6" />
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2" />
                    <path d="M4 5v4h4" />
                    <path d="M12 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />
                    <path d="M18 15v2a1 1 0 0 0 1 1h1" />
                    <path d="M21 15v6" />
                </svg>

            </div>

        </div>

    </section>

    <div class="mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase  bg-gray-700 text-white">
                <tr>
                    <th scope="col" class="px-3 py-2 text-xs  uppercase">
                        Tipo de atención
                    </th>
                    <th scope="col" class="px-3 py-2 text-xs  uppercase">
                        Fecha de Atención
                    </th>
                    <th scope="col" class="px-3 py-2 text-xs  uppercase">
                        Atendido Por
                    </th>
                    <th scope="col" class="px-3 py-2 text-xs  uppercase">
                        acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas->atenciones as $atencion)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-3 py-2 text-xs uppercase">
                        {{ $atencion->tipos->nombre }}
                    </td>
                    <td class="px-3 py-2 text-xs uppercase">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $atencion->fecha_antencion)->format('d/m/Y') }}

                    </td>
                    <td class="px-3 py-2 text-xs uppercase">
                        {{ $atencion->usuario->name }}
                    </td>
                    <td class="px-3 py-2 flex gap-1">
                        <a data-modal-target="modal-detalle{{$atencion->id}}" data-modal-toggle="modal-detalle{{$atencion->id}}" data-tooltip-target="detalle" class="border border-blue-500 p-1 cursor-pointer "><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" class="text-blue-500" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>

                        </a>
                        <a onclick="confirmDelete('{{ $atencion->id }}')" class="border border-blue-500 p-1 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7h16" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                <path d="M10 12l4 4m0 -4l-4 4" />
                            </svg>
                        </a>
                        <!-- Script para mostrar el cuadro de diálogo de confirmación -->
                        <script>
                            function confirmDelete(id) {
                                Swal.fire({
                                    title: '¿Estás seguro?',
                                    text: "¡No podrás revertir esto!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: '¡Sí, eliminarlo!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Envía el formulario si se confirma la eliminación
                                        document.querySelector(`#deleteForm${id}`).submit();
                                    }
                                });
                            }
                        </script>

                        <!-- Formulario para eliminar la atención -->
                        <form id="deleteForm{{ $atencion->id }}" action="{{ route('atenciones.delete', $atencion->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>


                    </td>

                </tr>
                @include('atenciones.detalle')
                @endforeach

            </tbody>
    </div>
</div>
@include('atenciones.create')

@if(session('agregado'))
<script>
    Swal.fire({
        title: "Registrado!",
        text: "Atención registrada correctamente!",
        icon: "success"
    });
</script>
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(session('success'))
<script>
    Swal.fire({
        title: "Eliminado!",
        text: "Atención Eliminado Correctamente!",
        icon: "success"
    });
</script>
@endif