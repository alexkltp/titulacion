<div>
    <button wire:click.prevent="back"><i class="fa-solid fa-left-long fa-xl px-2 m-4"></i>Regresar</button>
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
        @if ($cantidad_revisores==0)
        <div class="w-1/2">
            <div class="justify-end">
            <p class="mt-2 mr-2">Asignar Revisores: </p>
            <button wire:click.prevent="preparar" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Asignar</button>
            </div>
        </div>
        @else
            <div class="w-1/2">
            <div class="justify-end">
            <p class="mt-2 mr-2">Reasignar Revisores: </p>
            <button wire:click.prevent="preparar" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Reasignar</button>
            </div>
        </div>
        @endif
    </div>
    @if ($acto_count==0)
    <form wire:submit.prevent='asignarActoRecepcional'>
        @csrf
        <div class="w-full flex">
            <div class="m-2">
                <p>Asignar fecha del acta recepcional</p>
                <input type="datetime-local" required wire:model="fecha_acto">
            </div>
            <div class="m-2">
                <p>Asignar Lugar del acto recepcional</p>
                <input type="text" required wire:model="sala">
            </div>
        </div>
        <div class="mr-8 mb-6 flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar</button>      
        </div>
    </form>
    @else
    <div class="bg-gray-100 p-4 rounded-md shadow-md">
        <p class="mb-2 text-lg font-semibold">Fecha del Acto Recepcional:</p>
        <p class="mb-4 text-gray-700">{{ $acto->fecha_acto }}</p>

        <p class="mb-2 text-lg font-semibold">Lugar del Acto Recepcional:</p>
        <p class="text-gray-700">{{ $acto->sala }}</p>
    </div>
    @endif
            
</div>