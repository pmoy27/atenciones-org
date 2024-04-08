<!-- Main modal -->
<div id="modal-detalle{{$atencion->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    DETALLE DE LA ATENCIÓN
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="modal-detalle{{$atencion->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <div class="p-4 grid gap-4 mb-4 grid-cols-1">

                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Tipo de Atención</label>
                    <span>{{ $atencion->tipos->nombre }}</span>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Fecha de la Atención</label>
                    <span class="uppercase"> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $atencion->fecha_antencion)->format('d/m/Y') }}</span>
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase"> Detalle de la atención</label>
                    <textarea id="detalle_atencion" name="detalle_atencion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 uppercase  ">{{ $atencion->detalle_atencion}}</textarea>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Atendido por</label>
                    <span class="uppercase"> {{ $atencion->usuario->name }}</span>
                </div>
            </div>


        </div>
    </div>
</div>