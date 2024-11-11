<x-app-layout>
    <div class="flex justify-center mt-12">
        <div class="bg-cm-purple-1 shadow-lg shadow-cm-gray-8/50 border-2 border-cm-purple-2 p-10 max-w-4xl rounded-lg"> <!-- Amplié el ancho -->
            <h1 class="text-center text-2xl font-bold text-cm-blue-6 mb-6">Crear una cuenta</h1>

            <div class="grid grid-cols-2 gap-4"> <!-- Dividir en 2 columnas -->
                <div>
                    <label class="text-cm-blue-3 text-md font-bold">Nombres:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-user-group absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="text" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>

                    <label class="text-cm-blue-3 text-md font-bold">Nombre de usuario:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-circle-user absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="text" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>

                    <label class="text-cm-blue-3 text-md font-bold">Contraseña:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-key absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="password" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>

                    <label class="text-cm-blue-3 text-md font-bold">Correo electrónico:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-envelope absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="text" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>
                </div>

                <div>
                    <label class="text-cm-blue-3 text-md font-bold">Apellidos:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-address-card absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="text" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>

                    <label class="text-cm-blue-3 text-md font-bold">Teléfono:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-phone absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="text" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>

                    <label class="text-cm-blue-3 text-md font-bold">Cofirmar Contraseña:</label>
                    <div class="relative mb-4">
                        <i class="fa-solid fa-key absolute left-2 top-1/2 transform -translate-y-1/2 text-cm-blue-3"></i>
                        <input type="password" class="py-1 text-sm border-2 rounded-lg pl-7 border-cm-purple-3 bg-cm-purple-4 text-cm-blue-3 focus:outline-none focus:border-cm-blue-1 focus:text-white w-full">
                    </div>

                    <label class="text-cm-blue-3 text-md font-bold">Foto de perfil (opcional):</label>
                    <label class="block">
                        <input type="file" class="block w-full text-sm text-cm-blue-3
                          file:mr-4 file:py-1.5 file:px-4
                          file:rounded-full file:border-0
                          file:text-sm file:font-semibold
                          file:bg-cm-purple-2 file:text-cm-purple-1
                          hover:file:bg-cm-blue-1
                        "/>
                      </label>

                </div>
            </div>
            
            <div class="flex justify-center mb-8">
                <button class="mt-8 w-36 bg-blue-500 text-white rounded-lg py-2 hover:bg-blue-600 font-medium">
                    Registrarse
                </button>
            </div>

            <div class="flex justify-center text-white font-semibold">
                <label>¿Ya tienes una cuenta? 
                    <span class="underline text-cm-blue-3 ml-1 hover:text-cm-blue-1 hover:cursor-pointer">Inicia sesión aquí</span>
                </label>
            </div>
            
        </div>
    </div>
</x-app-layout>