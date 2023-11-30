<div>
    <h1 class=" text-sm font-semibold text-gray-900">Eligiendo opcion de titulacion</h1>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Selecciona el plan de estudios:</span>
        <select wire:model.change='selector' name="selector" class=" inline-block p-2 m-2 rounded-full h-10 w-52">
          <option value="1">Plan 2010</option>
          <option value="2">Plan 2004/2005</option>
      </select>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="m-2 w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs uppercase bg-[#022372] text-white dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="p-2">N.o</th>
                            <th class="p-2">Opcion</th>
                            <th class="p-2">Plan</th>
                            <th class="p-2">Acciones</th>
                        </tr>
                     </thead>
                    <tbody>
                        @foreach ($opciones as $index =>$i)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="p-2">{{$index+1}}</td>
                                <td class="p-2">{{$i->opcion}}</td>
                                <td class="p-2">{{$i->plan->plan}}</td>
                                <td >
                                    <button wire:click.prevent="seleccionar('{{ $i->id_opcion }}')" type="submit" class="p-2 ml-2 mb-2 mt-2 bg-[#022372] hover:bg-blue-800 text-white font-bold py-1 px-2 rounded">Seleccionar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <h4 class="p-2 text-sm font-semibold text-gray-900">Carreras aceptadas por el plan :*
            <small>
                @foreach ($carreras as $u)
                    {{$u->carrera}} ,
                @endforeach
            </small>
        </h4>
</div>
    
