@include('menu.menu')

<div class="p-4 sm:ml-64  h-full bg-slate-50">
    <div class="flex justify-between items-center">
        <h1 class="text-xl uppercase">Listado de Usuarios</h1>
        <a href="/registro" class="p-2 bg-purple-600 text-xs text-white rounded-sm uppercase">Agregar Nuevo Usuario</a>
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
                        <th scope="col" class="px-3 py-2 uppercase">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-3 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-3 py-2">
                            White
                        </td>
                        <td class="px-3 py-2">
                            Laptop PC
                        </td>
                        <td class="px-3 py-2">
                            $1999
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-3 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="px-3 py-2">
                            Black
                        </td>
                        <td class="px-3 py-2">
                            Accessories
                        </td>
                        <td class="px-3 py-2">
                            $99
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>