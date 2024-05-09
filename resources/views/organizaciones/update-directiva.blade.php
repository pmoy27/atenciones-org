@include('menu.menu')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Main modal -->
<div id="crud-editar-directiva" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    MODIFICAR DIRECTIVA
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-editar-directiva">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4">
                <form action="" method="post" class="  max-w-2xl m-auto ">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-1">


                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">Vigencia <span class="text-red-700 text-sm">*</span></label>
                            <select id="id_vigencia" name="id_vigencia" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                                <option value="" selected>Selecciones una Opción</option>
                                @foreach ($tipo_vigencia as $id => $vigencia)
                                <option value="{{ $id }}" {{ $directiva->id_vigencia == $id ? 'selected' : '' }}>{{ $vigencia }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">Fecha de Termino <span class="text-red-700 text-sm">*</span></label>
                            <input type="date" name="fecha_termino_directiva" id="fecha_termino_directiva" value="{{$directiva->fecha_termino_directiva}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                        </div>
                        <div class="col-span-4 sm:col-span-1">
                            <label for="" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase"> Directiva <span class="text-red-700 text-sm">*</span></label>
                            <textarea id="integrantes" name="integrantes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " required="">{{$directiva->integrantes}}</textarea>
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