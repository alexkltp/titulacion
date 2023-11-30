<x-modal wire:model='enviada'>
    <div class="p-2 text-center font-bold">
        {{ $title }}
    </div>
    <br />
    <em class="ml-3">En espera de revision</em>
    <br />
    <div class="p-2">
        <p>Tu solicitud para iniciar el proceso de titulacion ha sido enviada, tus datos seran revisados, y se te hara llegar una notificacion si tu solicitud ha sido rechazada o aceptada en los proximos dias.</p>
    </div>
    <div class="flex justify-end">
        <button type="submit" wire:click.prevent="cerrar" class="mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aceptar</button>
    </div>
</x-modal>
