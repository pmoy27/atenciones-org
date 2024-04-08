@include('menu.menu')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="p-4 sm:ml-64  h-full bg-slate-50">
    <div class="mb-7">
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
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Registro de Atención</span>
                    </div>
                </li>
            </ol>
        </nav>

    </div>
    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Información</span>
        <div>
            <span class="font-medium">Importante!</span> Ingresar todos los campos obligatorios demarcados con (*).
        </div>
    </div>

    <section class=" mt-7 p-2  ">
        <form action="{{route('atenciones.store')}}" method="post" class="max-w-2xl m-auto ">
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-1">
                <input type="hidden" name="id_persona" value="{{$personas->id}}">
                <input type="hidden" name="id_usuario" value="{{$id_usuario}}">
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Tipo de Atención <span class="text-red-700 text-sm">*</span></label>
                    <select id="tipo_atencion" name="tipo_atencion" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                        <option value="" selected>Selecciones una Opción</option>
                        @foreach ($tipos_atencion as $id => $nombre)
                        <option name="tipo_atencion" id="tipo_atencion" value="{{ $id }}">{{ $nombre }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Fecha de la Atención <span class="text-red-700 text-sm">*</span></label>
                    <input type="date" name="fecha_antencion" id="fecha_antencion" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase"> Detalle de la atención <span class="text-red-700 text-sm">*</span></label>
                    <textarea id="detalle_atencion" name="detalle_atencion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " required=""></textarea>
                </div>

            </div>
            <button type="submit" class="flex gap-1 items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-xs px-2 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M14 4l0 4l-6 0l0 -4" />
                </svg>Registrar Atención
            </button>
        </form>
    </section>
</div>