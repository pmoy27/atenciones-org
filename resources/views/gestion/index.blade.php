@include('menu.menu')
@livewireScripts

<div class="p-4 lg:ml-64  h-full bg-gray-50">

    <div class="flex justify-between gap-5 max-w-2xl mx-auto sm:px-6 lg:px-8 ">
        <div class=" p-3 w-full">
            <h3 class="mb-5 font-semibold">Tipos de Atención</h3>
            <div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase  bg-gray-700 text-white">
                        <tr>
                            <th scope="col" class="px-3 py-2 text-xs text-center  uppercase">
                                Tipo de atención
                            </th>

                            <th scope="col" class="px-3 py-2 text-xs text-center  uppercase">
                                acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                        @foreach($tipos as $tipo)
                        <tr>
                            <td class="p-3">{{$tipo->nombre}}</td>
                            <td class="p-3  flex justify-center gap-1"><a data-modal-target="modal-detalle" data-modal-toggle="modal-detalle" data-tooltip-target="detalle" class="border border-blue-500 p-1 cursor-pointer "><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" class="text-blue-500" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>

                                </a>
                                <a onclick="confirmDelete('')" class="border border-blue-500 p-1 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7h16" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        <path d="M10 12l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>