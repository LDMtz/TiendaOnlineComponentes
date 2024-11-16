<x-app-layout>


    <div class="flex justify-center gap-4 p-6 text-white">
      <!-- Mis Compras -->
      <div class=" bg-cm-gray-2 rounded-lg p-4 border-cm-gray-3 border-2">
        <h2 class="text-2xl font-black mb-8 pl-2">MIS COMPRAS</h2>
        
        <!-- Entregado -->
        <div class="mb-4 rounded-lg bg-cm-gray-3 relative border-cm-gray-5 border-4">
          <p class="text-xs pl-2 text-cm-gray-5 font-bold">1 de Diciembre</p>
          <a class="absolute top-0 right-3 text-xs text-cm-purple-2">Volver a comprar</a>
          <div class="border-t border-cm-gray-5 my-1 w-full"></div>
          <div class="flex items-center space-x-4 p-2">
            <!-- Icono -->
            <div class="bg-cm-purple-9 w-20 h-20 flex items-center justify-center rounded-lg mb-2">
              <i class="fa-solid fa-bag-shopping text-5xl text-cm-purple-2"></i>
            </div>
            <!-- Texto a la derecha del icono -->
            <div>
              <p class="text-green-400 font-semibold pb-2">Entregado</p>
              <p class="text-sm text-gray-400">Llegó el 7 de Diciembre</p>
            </div>
          </div>
        </div>

        <!-- En camino -->
        <div class="mb-4 rounded-lg bg-cm-gray-3 relative">
          <p class="absolute top-0 pl-2 text-xs text-cm-gray-5 font-bold">23 de Octubre</p>
          <a class="absolute top-0 right-3 text-xs text-cm-purple-2">Volver a comprar</a>
          
          <!-- Línea divisora completa -->
          <div class="flex justify-center">
            <div class="border-t border-cm-gray-5 my-5 w-full"></div>
          </div>

          <!-- Contenedor en flex para ícono y texto alineados -->
          <div class="flex items-center space-x-4 pl-2 pb-2">
            <!-- Icono -->
            <div class="bg-cm-purple-9 w-20 h-20 flex items-center justify-center rounded-lg mb-2">
              <i class="fa-solid fa-bag-shopping text-5xl text-cm-purple-2"></i>
            </div>  
            <!-- Texto a la derecha del icono -->
            <div>
              <p class="text-blue-400 font-semibold pb-2">En camino</p>
              <p class="text-sm text-gray-400">Llegará el 2 de Enero</p>
            </div>
          </div>
        </div>

        <!-- Cancelado -->
        <div class="mb-4 rounded-lg bg-cm-gray-3 relative">
          <p class="absolute top-0 pl-2 text-xs text-cm-gray-5 font-bold">31 de Octubre</p>
          <button class="absolute top-0 right-3 text-xs text-cm-purple-2">Volver a comprar</button>

          <!-- Línea divisora completa -->
          <div class="flex justify-center">
            <div class="border-t border-cm-gray-5 my-5 w-full"></div>
          </div>

          <!-- Contenedor en flex para ícono y texto alineados -->
          <div class="flex items-center space-x-4 pl-2 pb-2">
            <!-- Icono -->
            <div class="bg-cm-purple-9 w-20 h-20 flex items-center justify-center rounded-lg mb-2">
              <i class="fa-solid fa-bag-shopping text-5xl text-cm-purple-2"></i>
            </div>
            <div>
              <!-- Texto a la derecha del icono -->
              <p class="text-red-400 font-semibold pb-2">Cancelado</p>
              <p class="text-xs text-gray-400">Se canceló el pedido el 31 de Octubre</p>
            </div>
          </div>
        </div>

          <!-- En camino (penúltimo) -->

                <div class="mb-4 rounded-lg bg-cm-gray-3 relative">
          <p class="absolute top-0 text-xs text-cm-gray-5 font-bold pl-2">23 de Octubre</p>
          <button class="absolute top-0 right-3 text-xs text-cm-purple-2">Volver a comprar</button>
          
          <!-- Línea divisora completa -->
          <div class="flex justify-center">
            <div class="border-t border-cm-gray-5 my-5 w-full"></div>
          </div>

          <!-- Contenedor en flex para ícono y texto alineados -->
          <div class="flex items-center space-x-4 pl-2 pb-2">
            <!-- Icono -->
            <div class="bg-cm-purple-9 w-20 h-20 flex items-center justify-center rounded-lg mb-2">
              <i class="fa-solid fa-bag-shopping text-5xl text-cm-purple-2"></i>
            </div>
            <!-- Texto a la derecha del icono -->
            <div>
              <p class="text-blue-400 font-semibold pb-2">En camino</p>
              <p class="text-sm text-gray-400">Llegará el 12 de Noviembre</p>
            </div>
          </div>
        </div>

          <!-- En camino (último) -->
           
                <div class="mb-4 rounded-lg bg-cm-gray-3 relative">
          <p class="absolute top-0 text-xs text-cm-gray-5 font-bold pl-2">23 de Octubre</p>
          <button class="absolute top-0 right-3 text-xs text-cm-purple-2">Volver a comprar</button>
          
          <!-- Línea divisora completa -->
          <div class="flex justify-center">
            <div class="border-t border-cm-gray-5 my-5 w-full"></div>
          </div>

          <!-- Contenedor en flex para ícono y texto alineados -->
          <div class="flex items-center space-x-4 pl-2 pb-2">
            <!-- Icono -->
            <div class="bg-cm-purple-9 w-20 h-20 flex items-center justify-center rounded-lg mb-2">
              <i class="fa-solid fa-bag-shopping text-5xl text-cm-purple-2"></i>
            </div>
            <!-- Texto a la derecha del icono -->
            <div>
              <p class="text-blue-400 font-semibold pb-2">En camino</p>
              <p class="text-sm text-gray-400">Llegará el 2 de Diciembre</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content: Detalle de Compra -->
      <div class="bg-cm-gray-2 rounded-lg p-6 ml-10 border-cm-gray-3 border-2">
        <h2 class="text-lg font-black mb-6 text-cm-gray-5">DETALLE DE COMPRA</h2>

        <!-- Estado de entrega -->
        <div class="flex items-center mb-4 p-2 bg-cm-gray-3 rounded-lg">
          <i class="fa-solid fa-circle-check text-cm-green-1 text-2xl pr-3"></i>
          <span class="text-green-400 font-semibold mr-4">Entregado</span>
          <p class="text-white text-sm">Se entregó el paquete a las 17:32 en Calle Girasol, No 1932, Coloradas, Culiacán, Sinaloa</p>
        </div>

        <!-- Folio y Fecha -->
        <div class="flex mb-6 p-2 bg-cm-gray-3 rounded-lg">
          <p class="text-sm mt-1 text-white font-black pl-2">FOLIO:</p>
          <span class="ml-3 mt-1 text-sm text-cm-gray-5">234543534534</span>
          <p class="text-sm mt-1 ml-28 font-black">FECHA:</p>
          <span class="text-sm ml-3 mt-1 text-cm-gray-5">7 de Diciembre de 2024</span>
        </div>

        <!-- Tabla de productos -->
        <div class="bg-cm-gray-3 rounded-lg pl-2 pr-2 mb-4">
          <table class="w-full text-sm">
            <thead>
              <tr class="border-b border-white whitespace-nowrap">
                <th class="text-left pl-20">Producto</th>
                <th class="py-2 text-center pl-6 pr-6">Cantidad</th>
                <th class="py-2 text-center pr-6 pl-6">Precio Unitario</th>
                <th class="py-2 text-center pr-6 pl-6">Descuento</th>
                <th class="py-2 text-center pr-6 pl-6">SubTotal</th>
              </tr>
            </thead>
            <tbody>

              <!-- Primer producto -->
              <tr class="border-b border-cm-gray-5 text-cm-gray-5">
                <td class="py-2 flex items-center ">
                  <img src="{{ asset('images/desc/TarjetaVideo.jpeg') }}" alt="Producto" class="w-16 h-16 mr-4 rounded">
                  <span>Tarjeta de Video NVIDIA GeForce RTX 4090</span>
                </td>
                <td class="py-2 text-center">1</td>
                <td class="py-2 text-center">$35,000</td>
                <td class="py-2 text-center">$500</td>
                <td class="py-2 text-center">$34,500</td>
              </tr>
              <!-- Segundo producto -->
              <tr class="border-b border-cm-gray-5 text-cm-gray-5">
                <td class="py-2 flex items-center">
                  <img src="{{ asset('images/desc/Monitor.jpeg') }}" alt="Producto" class="w-16 h-16 mr-4 rounded">
                  <span>Monitor Gamer MSI MAG 275QF / 27” / 2560x1440...</span>
                </td>
                <td class="py-2 text-center">1</td>
                <td class="py-2 text-center">$5,000</td>
                <td class="py-2 text-center">$400</td>
                <td class="py-2 text-center">$4,600</td>
              </tr>
              <!-- Tercer producto -->
              <tr class="border-b border-cm-gray-5 text-cm-gray-5">
                <td class="py-2 flex items-center">
                  <img src="{{ asset('images/desc/Mouse.jpeg') }}" alt="Producto" class="w-16 h-16 mr-4 rounded">
                  <span>Mouse Gamer Xzeal XZ-401 / RGB / 5 Botones / Alámbrico</span>
                </td>
                <td class="py-2 text-center">1</td>
                <td class="py-2 text-center">$1,000</td>
                <td class="py-2 text-center">$200</td>
                <td class="py-2 text-center">$800</td>
              </tr>
              <!-- Cuarto producto -->
              <tr class="border-b border-cm-gray-5 text-cm-gray-5">
                <td class="py-2 flex items-center">
                  <img src="{{ asset('images/desc/Procesador.jpeg') }}" alt="Producto" class="w-16 h-16 mr-4 rounded">
                  <span>Procesador AMD RYZEN 7 8700F / 4.1 GHz / Octa Core / AM5</span>
                </td>
                <td class="py-2 text-center">1</td>
                <td class="py-2 text-center">$5,399</td>
                <td class="py-2 text-center">$0</td>
                <td class="py-2 text-center">$5,399</td>
              </tr>
                <!-- Quinto producto -->
                <tr class="text-cm-gray-5">
                <td class="py-2 flex items-center ">
                  <img src="{{ asset('images/desc/TarjetaMadre.jpeg') }}" alt="Producto" class="w-16 h-16 mr-4 rounded">
                  <span>Tarjeta de Video NVIDIA GeForce RTX 4090</span>
                </td>
                <td class="py-2 text-center">1</td>
                <td class="py-2 text-center">$6,999</td>
                <td class="py-2 text-center">$0</td>
                <td class="py-2 text-center">$6,999</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Servicio adicional -->
        <div class="bg-cm-gray-3 rounded-lg mb-4">
          <h3 class="text-sm font-semibold mb-2 pl-3 pt-2">SERVICIO ADICIONAL</h3>
          <HR class="border-b bg-cm-gray-3 border-3 rounded-lg"></HR>

          <div class="px-2">
<table class="w-full text-sm">
            <thead>
              <tr class="border-b border-white border-1 rounded-lg">
                <th class="py-2 pl-28 text-left">Servicio</th>
                <th class="py-2 text-center">Precio Unitario</th>
                <th class="py-2 text-center">Descuento</th>
                <th class="py-2 text-center">SubTotal</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-cm-gray-5 text-cm-gray-5">
                <td class="py-2">
                <i class="fa-solid fa-wrench text-cm-purple-2 pl-5 pr-4 text-lg "></i>
                Ensamblado de computadora</td>
                <td class="py-2 text-center">$1,000</td>
                <td class="py-2 text-center">$200</td>
                <td class="py-2 text-center">$800</td>
              </tr>

              <tr class="text-cm-gray-5">
                <td class="py-2 pl-4 ">
                <i class="fa-solid fa-truck text-cm-purple-2 pr-4 text-lg"></i>
                Envío por paquetería</td>
                <td class="py-2 text-center">$0</td>
                <td class="py-2 text-center">$0</td>
                <td class="py-2 text-center">$0</td>
              </tr>
            </tbody>
          </table>
          </div>
          
        </div>

        <!-- Totales -->
        <div class="flex justify-between pl-4 p-2 bg-cm-gray-3 rounded-lg ">
          <p class="text-sm">Productos: 10</p>
          <p class="text-sm">Servicios: 2</p>
          <p class="text-sm font-semibold">Descuento Total: $5,100</p>
          <p class="text-sm font-semibold pr-4">Monto Total: $70,098</p>
        </div>
      </div>
    </div>

</x-app-layout>
