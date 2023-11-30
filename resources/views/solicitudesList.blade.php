<div class="max-w-screen-xl mx-auto bg-white rounded shadow-lg p-4">
        <h1 class="text-2xl font-semibold mb-4">Solicitudes de Titulación</h1>
        <div>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Selecciona la prioridad:</span>
            <select wire:model.change='orden' name="orden" class=" inline-block p-2 mb-2 rounded-full h-10 w-52">
                <option value="desc">Mas recientes</option>
                <option value="asc">Mas antiguas</option>
            </select>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Filtrar por carrera:</span>
            <select wire:model.change='carrerAux' name="carrerAux" id="carrerAux" class=" inline-block p-2 mb-2 rounded-full h-10 w-58">
                    <option value="Todas las carreras">Todas las carreras</option>
                    <option value="Ingenieria en sistemas">Ingenieria en sistemas</option>
                    <option value="Ingenieria industrial">Ingenieria industrial</option>
                    <option value="Ingenieria mecatronica">Ingenieria mecatronica</option>
                    <option value="Ingenieria mecanica">Ingenieria mecanica</option>
                    <option value="Ingenieria electrica">Ingenieria electrica</option>
                    <option value="Ingenieria biomedica">Ingenieria biomedica</option>
                    <option value="Ingenieria bioquimica">Ingenieria bioquimica</option>
                    <option value="Ingenieria electronica">Ingenieria electronica</option>
                    <option value="Ingenieria en tecnologias de la informacion">Ingenieria en tecnologias de la informacion</option>
                    <option value="Ingenieria en gestion empresarial">Ingenieria en gestion empresarial</option>
                    <option value="Ingenieria en materiales">Ingenieria en materiales</option>
            </select>
        </div>
        

        <ul class="grid grid-cols-3 gap-4">
           @foreach ($solicitudes as $index =>$i)
            <li class="p-4 border border-gray-300 rounded">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{$i->user->nombre}}</h2>
                    <span class="text-gray-600">Fecha: {{$i->created_at}}</span>
                </div>
                <p>{{$i->user->carrera}}</p>
                <div class="mt-2 flex justify-end">
                    @if ($i->estado_solicitud==0)
                         <i class="mt-7 mr-2 fa-regular fa-clock fa-lg" title="Pendiente de revisar"></i>
                    @elseif($i->estado_solicitud==1)
                        <i class="mt-7 mr-2 fa-regular fa-circle-check fa-lg" title="Solicitud Aceptada"></i>
                    @elseif($i->estado_solicitud==2)
                        <i class="mt-7 mr-2 fa-regular fa-circle-xmark fa-lg" title="Solicitud Rechazada"></i>
                    @endif
                    <button wire:click.prevent="informacion('{{ $i->id_solicitud }}')" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Ver</button>
                </div>
            </li>
            @endforeach
        </ul>
    </div>