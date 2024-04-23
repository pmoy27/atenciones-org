@include('menu.menu')
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

<div class="p-4 lg:ml-64  h-full bg-slate-50">

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
    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Información</span>
        <div>
            <span class="font-medium">Importante!</span> Ingresar todos los campos obligatorios demarcados con (*).
        </div>
    </div>


    <section class=" mt-7 p-2">

        <form action="{{route('personas.store')}}" method="post" class="w-[1054px] m-auto ">
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-3">
                <div class="col-span-2  sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Nombres <span class="text-red-700 text-sm">*</span></label>
                    <input type="text" name="nombres" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Apellidos <span class="text-red-700 text-sm">*</span></label>
                    <input type="text" name="apellidos" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Rut <span class="text-red-700 text-sm">*</span> <span id="mensajeErrorRut" style="display: none;" class="text-red-500 ml-9">Rut No valido!!</span></label>
                    <input type="text" name="rut" id="clients_rut" oninput="formatInput(this)" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">dirección</label>
                    <input type="text" name="direccion" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">Sector <span class="text-red-700 text-sm">*</span></label>
                    <select id="sector" name="sector" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block ">
                        <option selected>Seleccione una Opción</option>
                        <option name="sector" value="URBANO">URBANO</option>
                        <option name="sector" value="RURAL">RURAL</option>
                        <option name="sector" value="INSULAR">INSULAR</option>

                    </select>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">numero de teléfono</label>
                    <input type="text" name="telefono" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">fecha de nacimiento <span class="text-red-700 text-sm">*</span></label>
                    <input type="date" name="fecha_nacimiento" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block " required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">GENERO <span class="text-red-700 text-sm">*</span></label>
                    <select id="sector" name="sexo" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block ">
                        <option selected>Seleccione una Opción</option>
                        <option name="sexo" value="MASCULINO">MASCULINO</option>
                        <option name="sexo" value="FEMENINO">FEMENINO</option>

                    </select>
                </div>

                <div class="col-span-2 sm:col-span-2">
                    <label for="" class="block text-[10px] font-semibold text-gray-500 mb-1 uppercase">ORGANIZACIÓN <span class="text-red-700 text-sm">*</span></label>
                    <select id="organizacion" name="organizacion" class="bg-white border uppercase w-full border-gray-300 text-gray-900 text-xs rounded-sm focus:ring-primary-400 focus:border-primary-600 block ">
                        <option selected>Seleccione una Opción</option>
                        @foreach ($organizacion as $id => $nombre)
                        <option value="{{ $id }}">{{ $nombre }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="flex gap-1 items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-xs px-2 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M14 4l0 4l-6 0l0 -4" />
                    </svg>Registrar Usuario
                </button>
                <button id="backButton" type="button" class="flex gap-1 items-center text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-xs px-2 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M5 12l6 6" />
                        <path d="M5 12l6 -6" />
                    </svg>ir para atras
                </button>
            </div>

        </form>
    </section>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#organizacion').select2({
            language: "es"
        });
    });
</script>


@if(session('error'))
<script>
    Swal.fire({
        title: "Registro Cancelado!!",
        text: "Rut duplicado, este rut ya se encuerta registrado.",
        icon: "error"
    });
</script>
@endif
@if(session('success'))
<script>
    Swal.fire({
        title: "Registrado!",
        text: "Persona registrada correctamente!",
        icon: "success"
    });
</script>
@endif
<script>
    document.getElementById("backButton").addEventListener("click", function() {
        history.go(-1); // Retrocede una página en el historial del navegador
    });
</script>

<script>
    function formatInput(input) {
        let rut = input.value.replace(/[^\dKk]/g, ''); // Elimina caracteres no numéricos ni 'K'

        if (rut.length > 1) {
            const digits = rut.slice(0, -1);
            const verifier = rut.slice(-1).toUpperCase();
            rut = formatWithDots(digits) + '-' + verifier;
        }

        input.value = rut;
    }

    function formatWithDots(digits) {
        const parts = [];
        while (digits.length > 3) {
            parts.unshift(digits.slice(-3));
            digits = digits.slice(0, -3);
        }
        parts.unshift(digits);
        return parts.join('.');
    }

    function isValidRUT(digits, verifier) {
        const mod = 11;
        let sum = 0;
        let factor = 2;

        digits = digits.replace(/\./g, ''); // Elimina los puntos de separación

        for (let i = digits.length - 1; i >= 0; i--) {
            sum += parseInt(digits.charAt(i)) * factor;
            factor = factor === 7 ? 2 : factor + 1;
        }

        const calculatedVerifier = (11 - (sum % 11)).toString();
        const expectedVerifier = verifier === 'K' ? '10' : verifier;

        if (calculatedVerifier === '11') {
            return expectedVerifier === '0';
        } else if (calculatedVerifier === '10') {
            return expectedVerifier === 'K';
        }

        return calculatedVerifier === expectedVerifier;
    }

    const inputElement = document.getElementById('clients_rut');
    inputElement.addEventListener('input', function() {
        formatInput(inputElement);

        const verifier = inputElement.value.slice(-1).toUpperCase();
        const digits = inputElement.value.slice(0, -2);
        const isValid = isValidRUT(digits, verifier);

        const mensajeErrorRut = document.getElementById("mensajeErrorRut");
        if (isValid) {
            mensajeErrorRut.style.display = "none";
        } else {
            mensajeErrorRut.style.display = "inline";
        }
    });
</script>