<x-guest-layout>
    <x-authentication-card>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{route('postRegistro')}}">
        @csrf
            <div class="p-2">
            <x-label class=" p-2" for="name" value="{{ __('Nombre') }}" />
                <input type="text" name="nombre" wire:model='nombre' placeholder="Nombre" class="w-full" />
            </div>
            <div class="p-2">
            <x-label class=" p-2" for="apellidoP" value="{{ __('Apellido Paterno') }}" />
                <input type="text" name="apellidoP" wire:model='apellidoP' placeholder="Apellido Paterno" class="w-full" />
            </div>
            <div class="p-2">
            <x-label class=" p-2" for="apellidoM" value="{{ __('Apellido Materno') }}" />
                <input type="text" name="apellidoM" wire:model='apellidoM' placeholder="Apellido Materno" class="w-full" />
            </div>
            <div class="p-2">
            <x-label class=" p-2" for="n_control" value="{{ __('Numero de Control') }}" />
                <input type="number" name="n_control" wire:model='n_control' placeholder="20120029" class="w-full" />
            </div>
            <div class="p-2">
            <x-label class=" p-2" for="sexo" value="{{ __('Sexo') }}" />
                <select name="sexo" id="sexo" wire:model='sexo'>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
                
            </div>
            <div class="p-2">
                <x-label class=" p-2" for="email" value="{{ __('Email') }}" />
                <input type="text" name="email" wire:model='email' placeholder="l20120099@morelia.tecnm.mx" class="w-full" />
            </div>
            <div class="p-2">
                <x-label class=" p-2" for="carrera" value="{{ __('Especialidad') }}" />
                <select name="carrera" id="carrera">
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
            <div class="p-2">
                <x-label class=" p-2" for="email" value="{{ __('Contraseña') }}" />
                <input type="password" name="password" placeholder="Contraseña" class="w-full" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ya tienes cuenta?') }}
                </a>
                <x-button class="ml-4" type="submit">
                    {{ __('Registrarse') }}
                </x-button>
                
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
