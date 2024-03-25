@include('menu.menu')
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
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Registro de Usuarios</span>
                    </div>
                </li>
            </ol>
        </nav>

    </div>
    <section class=" p-2">
        <form action="" class="w-[1054px] m-auto ">
            <div class="grid gap-4 mb-4 grid-cols-3">
                <div class="col-span-2  sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">Nombre</label>
                    <input type="text" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">Apellidos</label>
                    <input type="text" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">Rut</label>
                    <input type="text" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">dirección</label>
                    <input type="text" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">Sector</label>
                    <input type="text" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">numero de teléfono</label>
                    <input type="text" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-xs font-semibold text-gray-500 mb-1 uppercase">fecha de nacimiento</label>
                    <input type="date" class="bg-gray-50 border uppercase w-full border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 uppercase">Registrar Usuario</button>
        </form>
    </section>

</div>