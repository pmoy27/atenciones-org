@include('menu.menu')
<style>
    .select2.select2-container {
        width: 100% !important;
    }

    .select2.select2-container .select2-selection {
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        height: 34px;
        margin-bottom: 15px;
        outline: none !important;
        transition: all .15s ease-in-out;
    }

    .select2.select2-container .select2-selection .select2-selection__rendered {
        color: #333;
        line-height: 32px;
        padding-right: 33px;
    }

    .select2.select2-container .select2-selection .select2-selection__arrow {
        background: #f8f8f8;
        border-left: 1px solid #ccc;
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
        height: 32px;
        width: 33px;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
        background: #f8f8f8;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
        -webkit-border-radius: 0 3px 0 0;
        -moz-border-radius: 0 3px 0 0;
        border-radius: 0 3px 0 0;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
        border: 1px solid #34495e;
    }

    .select2.select2-container .select2-selection--multiple {
        height: auto;
        min-height: 34px;
    }

    .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
        margin-top: 0;
        height: 32px;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
        display: block;
        padding: 0 4px;
        line-height: 29px;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__choice {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin: 4px 4px 0 0;
        padding: 0 6px 0 22px;
        height: 24px;
        line-height: 24px;
        font-size: 12px;
        position: relative;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        margin: 0;
        text-align: center;
        color: #e74c3c;
        font-weight: bold;
        font-size: 16px;
    }

    .select2-container .select2-dropdown {
        background: transparent;
        border: none;
        margin-top: -5px;
    }

    .select2-container .select2-dropdown .select2-search {
        padding: 0;
    }

    .select2-container .select2-dropdown .select2-search input {
        outline: none !important;
        border: 1px solid #34495e !important;
        border-bottom: none !important;
        padding: 4px 6px !important;
    }

    .select2-container .select2-dropdown .select2-results {
        padding: 0;
    }

    .select2-container .select2-dropdown .select2-results ul {
        background: #fff;
        border: 1px solid #34495e;
    }

    .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
        background-color: #3498db;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Main modal -->
<div id="crud-editar-personas" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    MODIFICAR PERSONA
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-editar-personas">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4">
                <form action="{{route('personas.update',$personas->id)}}" method="post" class="  max-w-2xl m-auto ">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2  sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Nombres <span class="text-red-700 text-sm">*</span></label>
                            <input type="text" name="nombres" value="{{$personas->nombres}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Apellidos <span class="text-red-700 text-sm">*</span></label>
                            <input type="text" name="apellidos" value="{{$personas->apellidos}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Rut <span class="text-red-700 text-sm">*</span> <span id="mensajeErrorRut" style="display: none;" class="text-red-500 ml-9">Rut No valido!!</span></label>
                            <input type="text" name="rut" id="clients_rut" value="{{$personas->rut}}" oninput="formatInput(this)" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">dirección</label>
                            <input type="text" name="direccion" value="{{$personas->direccion}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block ">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Sector <span class="text-red-700 text-sm">*</span></label>
                            <select id="sector" name="sector" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">

                                <option name="sector" value="URBANO" {{ $personas->sector == "URBANO" ? 'selected' : '' }}>URBANO</option>
                                <option name="sector" value="RURAL" {{ $personas->sector == "RURAL" ? 'selected' : '' }}>RURAL</option>
                                <option name="sector" value="INSULAR" {{ $personas->sector == "INSULAR" ? 'selected' : '' }}>INSULAR</option>

                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">numero de teléfono</label>
                            <input type="text" name="telefono" value="{{$personas->telefono}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block ">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">fecha de nacimiento <span class="text-red-700 text-sm">*</span></label>
                            <input type="date" name="fecha_nacimiento" value="{{$personas->fecha_nacimiento}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">GENERO <span class="text-red-700 text-sm">*</span></label>
                            <select id="sector" name="sexo" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">

                                <option value="MASCULINO" {{ $personas->sexo == "MASCULINO" ? 'selected' : '' }}>MASCULINO</option>
                                <option value="FEMENINO" {{ $personas->sexo == "FEMENINO" ? 'selected' : '' }}>FEMENINO</option>
                            </select>
                        </div>

                        <div class="col-span-2 sm:col-span-2">
                            <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">ORGANIZACIÓN <span class="text-red-700 text-sm">*</span></label>
                            <select id="organizacion" name="organizacion" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block ">
                                <option value="" selected>SELECCIONES UNA OPCIÓN</option>
                                @foreach ($organizacion as $id => $nombre)
                                <option value="{{ $id }}" @if ($personas->Organizacion && $personas->Organizacion->id == $id) selected @endif>{{ $nombre }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        CONFIRMAR MODIFICACIÓN
                    </button>
                </form>

            </div>


        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#organizacion').select2({
            language: "es"
        });
    });
</script>