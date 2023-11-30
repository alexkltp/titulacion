<x-modal wire:model='modal_rechazar'>
    <div class="p-2 text-center font-bold">
        {{ $title }}
    </div>
    <br />
    <em class="ml-3">La Solicitud ha sido Rechazada</em>
    <br />
    <div class="p-2">
        <form wire:submit.prevent='rechazar'>
            <p>La solicitud para iniciar el proceso de titulacion ha sido rechazada, se le notificara al Solicitante, no te olvides de especificar los motivos de rechazo :</p>
            <div class="flex justify-center mt-2">
                <textarea name="razon_rechazo" id="razon_rechazo" wire:model="razon_rechazo" cols="50" rows="10" required></textarea>
            </div>
    </div>
    <div class="flex justify-end">   
        <button type="submit" class="mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
    </div>
     </form>
</x-modal>