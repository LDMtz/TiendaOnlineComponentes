<x-app-layout>
  <div class="flex justify-center">
      <!-- Contenedor principal -->
      <div class="bg-cm-gray-2 p-8 rounded-lg shadow-lg text-white mt-10 mb-10 border-2 border-cm-gray-3">

          <!-- Título -->
          <h2 class="text-center text-2xl font-black font-sans text-cm-gray-5 uppercase mb-10">Datos del Cliente</h2>

          <!-- Imagen de perfil -->
          <div class="flex justify-center mb-20 relative">
            @if($accountData['picture_profile'])
                <img src="data:;base64,{{ $accountData['picture_profile'] }}" alt="Perfil" class="w-44 h-44 rounded-full border-2 border-white">
            @else
                <img src="{{ asset('images/default-user-profile.jpg') }}" alt="Imagen por defecto" class="w-44 h-44 rounded-full border-2 border-white">
            @endif
              <!-- Ícono de edición sobre la imagen -->
              <button class="absolute bottom-0 w-11 h-11 transform translate-y-1/2 flex items-center justify-center bg-cm-gray-3 rounded-full border-4 border-cm-gray-2">
                  <i class="fa-regular fa-pen-to-square text-cm-gray-12 text-lg"></i>
              </button>
          </div>

          <!-- Campos de datos -->
          <div class="grid cols-2 gap-4">

              <!-- Campo: Nombre de usuario -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <div class="flex justify-between items-center mb-2">
                          <label for="" class="text-base text-cm-gray-5">Nombre de usuario</label>
                      </div>
                      <input value="{{$accountData['username']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Correo electrónico -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <div class="flex justify-between items-center mb-2">
                          <label for="" class="text-base text-cm-gray-5">Correo electrónico</label>
                      </div>
                      <input value="{{$accountData['email']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Nombres -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <div class="flex justify-between items-center mb-2">
                          <label for="" class="text-base text-cm-gray-5">Nombres</label>
                      </div>
                      <input value="{{$client['names']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Apellidos -->
              <div class="relative">
                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                    <div class="flex justify-between items-center mb-2">
                        <label for="" class="text-base text-cm-gray-5">Apellidos</label>
                    </div>
                    <input value="{{$client['last_names']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                </div>
              </div>

              <!-- Campo: Apellidos -->
              <div class="relative">
                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                    <div class="flex justify-between items-center mb-2">
                        <label for="" class="text-base text-cm-gray-5">Teléfono</label>
                    </div>
                    <input value="{{$client['number']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                </div>
              </div>

              <!-- Campo: ID de Cuenta -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <div class="flex justify-between items-center mb-2">
                          <label for="" class="text-base text-cm-gray-5">ID de Cuenta</label>
                      </div>
                      <input value="{{$accountData['id']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Fecha de creación -->
              <div class="relative col-span-2">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <div class="flex justify-between items-center mb-2">
                          <label for="" class="text-base text-cm-gray-5">Fecha de creación</label>
                      </div>
                      <input value="{{$accountData['created_at']}}" type="text" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

          </div>
      </div>
  </div>
</x-app-layout>
