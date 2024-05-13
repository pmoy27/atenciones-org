<!-- Main modal -->
<div id="crud-editar-org" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 uppercase ">
                    Modificar Organización
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-editar-org">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5 " action="{{route('organizaciones.update',$organizacion->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <input type="hidden" value="{{$organizacion->id }}">
                    <div class="col-span-2">
                        <label for="name" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">NOMBRE</label>
                        <input type="text" name="nombre" id="nombre" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block" value="{{$organizacion->nombre}}" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">RUT</label>
                        <input type="text" name="rut" id="rut" value="{{$organizacion->rut}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">Tipo de organización</label>
                        <select id="id_tipo" name="id_tipo" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block">
                            @foreach ($tipo_organizacion as $id => $tipo_nombre)
                            <option value="{{ $id }}" @if ($organizacion->Tipo_Organizacion->id == $id) selected @endif>{{ $tipo_nombre }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">ROL MUNICIPAL</label>
                        <input type="text" name="rol_municipal" id="rol_municipal" value="{{$organizacion->rol_municipal}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">fecha concesión</label>
                        <input type="date" name="fecha_concesion" id="fecha_concesion" value="{{$organizacion->fecha_concesion}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">N° Registro</label>
                        <input type="text" name="n_inscripcion_RC" id="n_inscripcion_RC" value="{{$organizacion->n_inscripcion_RC}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">Estatuto</label>
                        <input type="date" name="estatuto" id="estatuto" value="{{$organizacion->estatuto}}" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block text-[12px] font-semibold text-gray-500 mb-1 uppercase">Lugar de funcionamiento</label>
                        <textarea id="lugar_funcionamiento" name="lugar_funcionamiento" rows="4" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block">{{$organizacion->lugar_funcionamiento}}</textarea>
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