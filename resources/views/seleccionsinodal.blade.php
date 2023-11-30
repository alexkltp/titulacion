<div>
    <h2 class=" m-2 text-2xl font-medium text-gray-900">Configura la solicitud</h2>
    <h4 class=" m-2 text-2xl font-medium text-gray-900">Opcion: {{$solicitud->opcion->opcion}}</h4>
    <div class="m-4">
        <ul class="list-disc list-inside">
            <li class="text-lg font-semibold">{{ $solicitud->user->nombre }} {{ $solicitud->user->apellidoP }} {{ $solicitud->user->apellidoM }}</li>
            <li class="text-gray-600">Número de Control: {{ $solicitud->user->n_control }}</li>
            <li class="text-gray-600">Carrera: {{ $solicitud->user->carrera }}</li>
            <li class="text-gray-600">Fecha de Solicitud: {{ $solicitud->fecha_solicitud }}</li>
        </ul>
    </div>
    <div class="w-full m-4 flex">
        <div class="w-1/2">
            <p>Revisores Asignados: </p>
                @foreach ($revisores_solicitud as $u)
                    <ul class="list-disc list-inside">
                        <li class="text-lg font-semibold">{{ $u->user->nombre }} {{ $u->user->apellidoP }} {{ $u->user->apellidoM }}</li>
                        <li class="text-gray-600">Número de Control: {{ $u->user->n_control }}</li>
                        <li class="text-gray-600">Carrera: {{ $u->user->carrera }}</li>
                    </ul>
                @endforeach
        </div>
        @if ($cantidad_sinodales==0)
        <div class="w-1/2">
            <div class="w-full">
                <div class="w-1/2">
                    <p>Sinodales Seleccionados: </p>
                    @foreach ($sinodales_solicitud as $u)
                        <ul class="list-disc list-inside">
                            <li class="text-lg font-semibold">{{ $u->user->nombre }} {{ $u->user->apellidoP }} {{ $u->user->apellidoM }}</li>
                            <li class="text-gray-600">Número de Control: {{ $u->user->n_control }}</li>
                            <li class="text-gray-600">Carrera: {{ $u->user->carrera }}</li>
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="justify-end">
            <p class="mt-24 mr-2">Seleccionar sinodales: </p>
            <button wire:click.prevent="preparar" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Seleccionar</button>     
        </div>
        @else
        <div class="w-1/2">
            <div class="w-full">
                <div class="w-1/2">
                    <p>Sinodales Seleccionados: </p>
                    @foreach ($sinodales_solicitud as $u)
                        <ul class="list-disc list-inside">
                            <li class="text-lg font-semibold">{{ $u->user->nombre }} {{ $u->user->apellidoP }} {{ $u->user->apellidoM }}</li>
                            <li class="text-gray-600">Número de Control: {{ $u->user->n_control }}</li>
                            <li class="text-gray-600">Carrera: {{ $u->user->carrera }}</li>
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
        @endif
    </div>
    @if ($acto_count==0)
        <div class="bg-gray-100 p-4 rounded-md shadow-md">
            <p class="mb-2 text-lg font-semibold">Fecha del Acto Recepcional:</p>
            <p class="mb-4 text-gray-700">Aun no se te ha asignado una fecha</p>

            <p class="mb-2 text-lg font-semibold">Lugar del Acto Recepcional:</p>
            <p class="text-gray-700">Aun no se te ha asignado un lugar</p>
        </div>
    @else
    <div class="bg-gray-100 p-4 rounded-md shadow-md">
        <p class="mb-2 text-lg font-semibold">Fecha del Acto Recepcional:</p>
        <p class="mb-4 text-gray-700">{{ $acto->fecha_acto }}</p>

        <p class="mb-2 text-lg font-semibold">Lugar del Acto Recepcional:</p>
        <p class="text-gray-700">{{ $acto->sala }}</p>
    </div>
    @endif
    
            
</div>