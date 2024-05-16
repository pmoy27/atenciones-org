@include('menu.menu')
@livewireScripts

<div class="p-4 lg:ml-64  h-full bg-gray-50">

    <section class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="flex justify-between items-center mb-6  p-3 border-b border-gray-300">
            <h5 class="font-semibold text-lg uppercase ">Información de la Organización</h5>
        </div>
        <div class="grid grid-cols-2 gap-5  p-3 ">
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-e-0 border-gray-400 rounded-s-sm ">
                        TIPO DE ORGANIZACIÓN
                    </span>
                    <input type="text" id="website-admin" value="{{$organizacion->Tipo_Organizacion->tipo_nombre }}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        NOMBRE
                    </span>
                    <input type="text" id="website-admin" value="{{$organizacion->nombre}}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>


            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        RUT
                    </span>
                    <input type="text" id="website-admin" value="{{$organizacion->rut}}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        ROL MUNICIPAL
                    </span>
                    <input type="text" id="website-admin" value="{{$organizacion->rol_municipal}}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        FECHA CONCESION
                    </span>
                    <input type="text" id="website-admin" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $organizacion->fecha_concesion)->format('d/m/Y') }}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        N° REGISTRO CIVIL
                    </span>
                    <input type="text" id="website-admin" value="{{$organizacion->n_inscripcion_RC}}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        LUGAR FUNCIONAMIENTO
                    </span>
                    <input type="text" id="website-admin" value="{{$organizacion->lugar_funcionamiento}}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>
            <div class="flex flex-col col-span-2 sm:col-span-1 ">
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                        ESTATUTO
                    </span>
                    <input type="text" id="website-admin" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $organizacion->estatuto)->format('d/m/Y') }}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                </div>
            </div>

        </div>

    </section>
    <section class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6  p-3 border-b border-gray-300">
            <h5 class="font-semibold text-lg uppercase">DIRECTIVA ACTUAL</h5>


        </div>
        <div class="p-3">
            @foreach($directivas as $directiva)
            <div class="grid grid-cols-2 gap-5  ">


                <input type="hidden" name="id_directiva" value="{{$directiva->id}}">
                <div class="flex flex-col col-span-2 sm:col-span-1 ">
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                            VIGENCIA
                        </span>
                        <input type="text" id="website-admin" value="{{$directiva->vigencia}}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                    </div>
                </div>
                <div class="flex flex-col col-span-2 sm:col-span-1 ">
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border-l border-t border-b border-gray-400 rounded-s-sm ">
                            FECHA DE TERMINO
                        </span>
                        <input type="text" id="website-admin" value="{{ $directiva->fecha_termino_directiva ? \Carbon\Carbon::createFromFormat('Y-m-d', $directiva->fecha_termino_directiva)->format('d/m/Y') : '' }}" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                    </div>
                </div>
                <div class="flex flex-col col-span-1 sm:col-span-2 ">
                    <div class="flex flex-col">
                        <span class="inline-flex items-center  p-2.5  text-sm text-gray-900 bg-gray-100 border-t border-l border-r  border-gray-400 rounded-s-sm ">
                            DIRECTIVA
                        </span>
                        <textarea type="text" id="website-admin" value="" disabled readonly class="rounded-none uppercase font-semibold rounded-e-sm bg-white border border-gray-400 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm ">
                        {{$directiva->integrantes}}
                        </textarea>
                    </div>
                </div>



            </div>


        </div>
        @include('organizaciones.update-directiva')

        @endforeach
    </section>
    <section class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between bg-[#b5beca] p-3 border-t border-r border-l border-gray-200">
            <h5 class="font-semibold text-sm text-BLACK uppercase">DIRECTIVAS ANTERIORES</h5>

        </div>

        <div class="grid grid-cols-3 gap-5 p-3 bg-gray-200">
            @foreach($directiva_anterior as $directiva_anteriores)
            <div>
                <label class="text-xs text-gray-600 uppercase">Vigencia</label>
                <p class="uppercase text-sm font-semibold">{{$directiva_anteriores->vigencia}}</p>
            </div>
            <div>
                <label class="text-xs text-gray-600 uppercase">FECHA DE TERMINO</label>
                <p class="uppercase text-sm font-semibold">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $directiva_anteriores->fecha_termino_directiva)->format('d/m/Y') }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-600 uppercase">Directiva</label>
                <p class="uppercase text-sm font-semibold">{{$directiva_anteriores->integrantes}}</p>
            </div>

            @endforeach
        </div>




    </section>





    <div data-dial-init class="fixed end-6 bottom-6 group">
        <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">

            <button data-modal-target="modal-directiva" data-modal-toggle="modal-directiva" type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-[#12478a] hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M12 11l0 6" />
                    <path d="M9 14l6 0" />
                    <span class="sr-only">Registrar Directiva</span>
            </button>
            <div id="tooltip-copy" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Registrar Directiva
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button data-modal-target="crud-editar-org" data-modal-toggle="crud-editar-org" type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-[#12478a] hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                    <path d="M16 5l3 3" />
                </svg>
                <span class="sr-only">Editar Organización</span>
            </button>
            <div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Editar Organización
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <button data-modal-target="crud-editar-directiva" data-modal-toggle="crud-editar-directiva" type="button" data-tooltip-target="tooltip-edit" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-[#12478a] hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-pencil">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M10 18l5 -5a1.414 1.414 0 0 0 -2 -2l-5 5v2h2z" />
                </svg>
                <span class="sr-only">Editar Directiva</span>
            </button>
            <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Editar Directiva
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false" class="flex items-center justify-center text-white bg-[#12478a] rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>

</div>

@include('organizaciones.directiva')
@include('organizaciones.update')



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(session('modificado'))
<script>
    Swal.fire({
        title: "Modificado!",
        text: "Organización Modificada Correctamente!",
        icon: "success"
    });
</script>
@endif