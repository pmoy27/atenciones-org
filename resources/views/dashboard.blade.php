@include('menu.menu')

<div class="p-4 lg:ml-64  h-full bg-slate-50">
    <div class="mb-5">
        <span class="text-2xl font-semibold uppercase">dashboard</span>
    </div>
    <div class="flex flex-col lg:flex-row gap-10 lg:gap-20 m-auto pl-10">
        <div class="flex items-center justify-between gap-5 lg:w-[270px] w-[100%vw] p-6 bg-white border border-gray-200 rounded-sm shadow">
            <div class="flex flex-col">
                <span class="text-[18px]">{{$totalAtenciones}}</span>
                <span class="uppercase text-[11px] text-gray-500">Atenciones totales</span>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="text-[#12478a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                <path d="M11 6l9 0" />
                <path d="M11 12l9 0" />
                <path d="M11 18l9 0" />
            </svg>

        </div>
        <div class="flex items-center justify-between gap-5 lg:w-[270px] w-[100%vw] p-6 bg-white border border-gray-200 rounded-sm shadow">
            <div class="flex flex-col">
                <span class="text-[18px]">10</span>
                <span class="uppercase text-[11px] text-gray-500">Atenciones del dia</span>
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
        <div class="flex items-center justify-between gap-5 lg:w-[270px] w-[100%vw] p-6 bg-white border border-gray-200 rounded-sm shadow">
            <div class="flex flex-col">
                <span class="text-[18px]">10</span>
                <span class="uppercase text-[11px] text-gray-500">Atenciones personales</span>
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
    <div class="flex flex-col lg:flex-row gap-10 lg:gap-20 mt-5 pl-10">
        <div class="flex items-center justify-between gap-5 lg:w-[270px] w-[100%vw] p-6 bg-white border border-gray-200 rounded-sm shadow">
            <div class="flex flex-col">
                <span class="text-[18px]">{{ $totalOrg }}</span>
                <span class="uppercase text-[11px] text-gray-500">Organizaciones</span>
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
        <div class="flex items-center justify-between gap-5 lg:w-[270px] w-[100%vw] p-6 bg-white border border-gray-200 rounded-sm shadow">
            <div class="flex flex-col">
                <span class="text-[18px]">{{ $totalPersonas }}</span>
                <span class="uppercase text-[11px] text-gray-500">Usuarios registrados</span>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="text-[#12478a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>

        </div>
    </div>


</div>