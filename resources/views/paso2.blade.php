<div>
    <h2 class=" m-2 text-2xl font-medium text-gray-900">{{$opcion->opcion}}</h2>
    <h2 class="p-2 text-sm font-semibold text-gray-900">Tabla de requisitos: </h2>    
    <div class="flex justify-center">
        <table class="m-2 w-1/2 text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs uppercase bg-[#022372] text-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="p-2">N.o</th>
                    <th class="p-2">Requisito</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($requisitos as $index =>$i)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="p-2">{{$index+1}}</td>
                            <td class="p-2">{{$i->descripcion_requisito}}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <form wire:submit.prevent='enviarSolicitud' class="mt-8">
        @csrf
        <div class="m-2 grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="nombre" id="nombre" wire:model="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled/>
                <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre(s)</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="apellidoP" id="apellidoP" wire:model="apellidoP" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled />
                <label for="apellidoP" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido Paterno</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="apellidoM" id="apellidoM" wire:model="apellidoM" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled />
                <label for="apellidoM" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido Materno</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="correo" id="correo" wire:model="correo" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled />
                <label for="correo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo Institucional</label>
            </div>
                <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="n_control" id="n_control" wire:model="n_control" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled />
                <label for="n_control" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero de Control</label>
            </div>
                <div class="relative z-0 w-full mb-6 group">
                    <select name="carrera" id="carrera" wire:model="carrera" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled>
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
                    <label for="carrera" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Carrera</label>
            </div>
                <div class="relative z-0 w-full mb-6 group">
                <select wire:model='plan' name="plan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required disabled>
                <option value="PLAN 2010">Plan 2010</option>
                <option value="PLAN 2004/2005">Plan 2004/2005</option>
            </select>
                <label for="plan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Carrera</label>
            </div>
        </div>
        <button wire:click.prevent="regresar"><i class="fa-solid fa-left-long fa-xl px-2"></i>Regresar</button>
        <div class="flex justify-end">
            <button type="submit" class="mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
        </div>
    </form>
</div>