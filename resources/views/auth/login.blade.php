<x-app-layout>
    <div class="flex justify-center my-12">
        <div class="bg-cm-purple-1 shadow-lg shadow-cm-gray-8/50 border-2 border-cm-purple-2 p-10 max-w-sm rounded-lg">
            <h1 class="text-center text-2xl font-bold text-cm-blue-6 mb-6">Belikekis Components</h1>
            <img class="w-36 h-auto mx-auto mb-8" src="{{ asset('images/logo.png') }}" alt="Logo de la aplicación">

            <form action="{{route('to_login')}}" method="POST">
                @csrf
                @method('post')
                <label for="email" class="text-cm-blue-3 text-md font-bold">Correo electrónico:</label>
                <div class="relative mb-4">
                    <i class="fa-solid fa-envelope absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                    <input name="email" type="email" autocomplete="off" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                </div>

                <label for="password" class="text-cm-blue-3 text-md font-bold">Contraseña:</label>
                <div class="relative ">
                    <i class="fa-solid fa-key absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                    <input name="password" type="password" autocomplete="off" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                </div>

                <!-- Mostrar errores -->
                @if ($errors->any())
                    <div class="flex justify-center items-center text-red-500 text-sm mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="flex justify-center mb-8">
                    <button class="mt-8 w-36 bg-blue-500 text-white rounded-lg py-2 hover:bg-blue-600 font-medium">
                        Iniciar sesión
                    </button>
                </div>

                <label class="text-white font-semibold">¿No tienes una cuenta? <span class="underline text-cm-blue-3 ml-1 hover:text-cm-blue-1 hover:cursor-pointer">
                    <a href="{{route('register')}}">Registrate aquí</a></span>
                </label>
            </form>
            
        </div>
    </div>
</x-app-layout>