<x-app-layout>
  <div class="flex justify-center">
      <!-- Contenedor principal -->
      <div class="bg-cm-gray-2 p-8 rounded-lg shadow-lg text-white mt-10 mb-10 border-2 border-cm-gray-3">

          <!-- Título -->
          <h2 class="text-center text-2xl font-black font-sans text-cm-gray-5 uppercase mb-10">Datos del Cliente</h2>

          <!-- Imagen de perfil -->
          <div class="flex justify-center mb-20 relative">
              <img src="{{ asset('images/temp/a.jpg') }}" alt="" class="w-44 h-44 rounded-full border-2 border-white">
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
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">Nombre de usuario</label>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="RaulLR123" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Correo electrónico -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">Correo electrónico</label>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="RaulLop123@gmail.com" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Nombres -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">Nombres</label>
                          <!-- Botón alineado a la derecha -->
                          <button class="text-gray-400">
                              <i class="fa-regular fa-pen-to-square text-cm-gray-12"></i>
                          </button>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="José Raul" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Apellidos -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">Apellidos</label>
                          <!-- Botón alineado a la derecha -->
                          <button class="text-gray-400">
                              <i class="fa-regular fa-pen-to-square text-cm-gray-12"></i>
                          </button>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="López Ramos" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Teléfono -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">Teléfono</label>
                          <!-- Botón alineado a la derecha -->
                          <button class="text-gray-400">
                              <i class="fa-regular fa-pen-to-square text-cm-gray-12"></i>
                          </button>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="6671234567" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: ID de Cuenta -->
              <div class="relative">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">ID de Cuenta</label>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="12" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

              <!-- Campo: Fecha de creación -->
              <div class="relative col-span-2">
                  <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-1">
                      <!-- Contenedor con flex para alinear el label y el botón en una línea -->
                      <div class="flex justify-between items-center mb-2">
                          <!-- Label alineado a la izquierda -->
                          <label for="username" class="text-base text-cm-gray-5">Fecha de creación</label>
                      </div>
                      <!-- Input dentro del mismo contenedor -->
                      <input id="username" type="text" value="22/10/24" class="w-full bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                  </div>
              </div>

          </div>
      </div>
  </div>
</x-app-layout>
