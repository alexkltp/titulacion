<div class="p-2">
    @if ($estado_solicitud==null)
        @if ($aux==1)
            @include("paso1")
        @elseif($aux==2)
            @include("paso2")
        @endif
    @else
        @if ($estado_solicitud->estado_solicitud===0)
        <div class="m-2">
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-yellow-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M19.707 18.293l-8-8A.996.996 0 0011 10V3a1 1 0 00-1-1H4a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 00.707-.293zM12 4v5l4.4 4.4L16 15.6 11 10V4h1z"/></svg></div>
                    <div>
                        <p class="font-bold">Solicitud Enviada</p>
                        <p class="text-sm">Tu Solicitud ya ha sido enviada y Se encuentra en revision, pronto recibiras una notificacion para el siguiente paso.</p>
                    </div>
                </div>
            </div>
        </div>
        @elseif($estado_solicitud->estado_solicitud===1)
            @if ($cantidad_sinodales==0)
                @if ($aux_2==1)
                    @include('seleccionsinodal')
                @else
                    <div class="m-2">
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md shadow-md" role="alert">
                            <div class="flex items-center">
                                <div class="py-1">
                                    <svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M19.707 18.293l-8-8A.996.996 0 0011 10V3a1 1 0 00-1-1H4a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 00.707-.293zM12 4v5l4.4 4.4L16 15.6 11 10V4h1z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-lg">Solicitud Aceptada</p>
                                    <p class="text-sm">Se te han asignado revisores para tu trabajo de titulación. El siguiente paso es elegir tus sinodales.</p>
                                    <button wire:click.prevent="siguiente" class="mt-2 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green">Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endif
            @else
                    @include('seleccionsinodal')                
            @endif

        @elseif($estado_solicitud->estado_solicitud===2)
        <div class="m-2">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-md shadow-md" role="alert">
                <div class="flex items-center">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M19.707 18.293l-8-8A.996.996 0 0011 10V3a1 1 0 00-1-1H4a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 00.707-.293zM12 4v5l4.4 4.4L16 15.6 11 10V4h1z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-lg">Solicitud Rechazada</p>
                        <p class="text-sm">No has cumplido los requisitos para la opción de titulación, por los siguientes motivos: {{$estado_solicitud->razon_rechazo}}</p>
                        <button wire:click.prevent="nuevaSolicitud" class="mt-2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:shadow-outline-red">Nueva solicitud</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
    @include('solicitud-enviada_modal')
    @include('asignar-sinodales-modal')
</div>
