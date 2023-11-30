<x-modal wire:model='sinodales'>
    <div class="p-2 text-center font-bold">
        {{ $title }}
    </div>
    <br />
    <em class="ml-3">Asigna los revisores :</em>
    <br />
    <div class="p-2 flex justify-center">
    <form wire:submit.prevent='seleccionarSinodales'>
    <div class="m-2 max-w-md divide-y divide-gray-200 dark:divide-gray-700 overflow-y-auto max-h-64">
        @foreach ($sinodales_disponibles as $u)
        <div class="flex items-center space-x-4 border p-2 m-2">
                <input type="checkbox" wire:model="revisoresSeleccionados" value="{{ $u->user->id }}">
        <div class="flex-shrink-0">
            <img class="w-8 h-8 rounded-full grayscale" src="https://via.placeholder.com/48" alt="Grayed out image">
        </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                {{ $u->user->nombre }} {{ $u->user->apellidoP }} {{ $u->user->apellidoM }}
                </p>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                     {{ $u->user->email }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                {{ $u->user->carrera }}
            </div>
        </div>
        @endforeach
    </div>

    <div class="flex justify-end">   
        <button type="submit" class="mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center dark:bg-blue-600 dark:hover-bg-blue-700 dark:focus:ring-blue-800">Seleccionar</button>
    </div>
</form>

</x-modal>