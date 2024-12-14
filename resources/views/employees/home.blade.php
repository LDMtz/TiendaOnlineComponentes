<x-app-layout>
    <!-- Sidebar -->
<div class="flex mx-8">
        <div class="">
            <x-sidebar-employee/>
        </div>
        <div class="flex-1 p-4 ml-8 my-5">

  <!-- Script para Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Contenedor principal -->
    <div class="flex flex-col w-full lg:ml-6 space-y-4">
        <!-- Fila superior -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Tarjeta de Bienvenida -->
            <div class="bg-cm-gray-2 shadow rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-white font-bold">Bienvenido Leoncio</p>
                        <p class="text-gray-500 text-sm mt-1">Pedidos hechos</p>
                    </div>
                    <p class="text-4xl font-bold text-blue-600">102</p>
                </div>
            </div>

            <!-- Tarjeta de Activos -->
            <div class="bg-cm-gray-2 shadow rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-white font-bold">Pedidos en proceso</p>
                        <p class="text-gray-500 text-sm mt-1">Pedidos pendientes</p>
                    </div>
                    <p class="text-4xl font-bold text-blue-600">325</p>
                </div>
            </div>
        </div>

        <!-- Fila inferior -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Tarjeta Total Leads -->
            <div class="bg-cm-gray-2 shadow rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-cm-blue-5 text-xl font-bold">300</p>
                        <p class="text-gray-500 text-sm">Compras</p>
                    </div>
                    <i class="fa-solid fa-cart-shopping text-3xl text-cm-blue-5"></i>
                </div>
                <div class="flex justify-between items-center mt-4">

                    <div class="bg-cm-blue-5 w-10 h-4"></div>
                </div>
            </div>

            <!-- Tarjeta Total Pending -->
            <div class="bg-cm-gray-2 shadow rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-cm-blue-5  text-xl font-bold">195</p>
                        <p class="text-gray-500 text-sm">Descuentos</p>
                    </div>
                    <i class="fa-solid fa-tag text-3xl text-cm-blue-5"></i>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="bg-cm-blue-5 w-10 h-4"></div>
                </div>
            </div>

            <!-- Tarjeta Case Closed -->
            <div class="bg-cm-gray-2 shadow rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-cm-blue-5 text-xl font-bold">273</p>
                        <p class="text-gray-500 text-sm">Elementos por llegar</p>
                    </div>
                    <i class="fa-solid fa-meteor text-cm-blue-5 text-3xl"></i>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="bg-cm-blue-5 w-10 h-4"></div>
                </div>
            </div>

            <!-- Tarjeta Task Completed -->
            <div class="bg-cm-gray-2 shadow rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-cm-blue-5 text-xl font-bold">355</p>
                        <p class="text-gray-500 text-sm">Elementos recibidos</p>
                    </div>
                    <i class="fa-solid fa-truck-ramp-box text-cm-blue-5 text-3xl"></i>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="bg-cm-blue-5 w-10 h-4"></div>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
    <!-- Tabla Active Orders -->
    <div class="bg-cm-gray-2 shadow rounded-lg p-4 overflow-auto">
        <h2 class="text-lg font-bold text-white mb-4">Productos en almacén</h2>
        <table class="min-w-full text-left border-collapse">
            <thead>
            <tr class="bg-cm-gray-2">
                    <th class="px-4 py-2 text-white font-medium whitespace-nowrap">Orden</th>
                    <th class="px-4 py-2 text-white font-medium whitespace-nowrap">Nombre</th>
                    <th class="px-4 py-2 text-white font-medium whitespace-nowrap">Cantidad</th>
                    <th class="px-4 py-2 text-white font-medium whitespace-nowrap">Código del producto</th>
                    <th class="px-4 py-2 text-white font-medium whitespace-nowrap">Proovedor</th>
                    <th class="px-4 py-2 text-white font-medium whitespace-nowrap">Fecha de llegada</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fila de ejemplo -->
                <tr class="border-b">
                    <td class="px-4 py-2 text-gray-500">3589</td>
                    <td class="px-4 py-2 text-gray-500">Arch</td>
                    <td class="px-4 py-2 text-gray-500">1</td>
                    <td class="px-4 py-2 text-gray-500">19145</td>
                    <td class="px-4 py-2 text-gray-500">Hocks</td>
                    <td class="px-4 py-2 text-gray-500">6/27/2019</td>
                </tr>
                <!-- Agrega más filas aquí -->
            </tbody>
        </table>
    </div>

    <!-- Gráfico Analytics -->
    <div class="bg-cm-gray-2 shadow rounded-lg p-4">
        <h2 class="text-lg font-bold text-white mb-4">Análisis</h2>
        <canvas id="analyticsChart" class="w-full h-64"></canvas>
    </div>
</div>


<!-- Script para el gráfico -->
<script>
    const ctx = document.getElementById('analyticsChart').getContext('2d');
    const analyticsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago'],
            datasets: [{
                label: 'Clientes',
                data: [300, 400, 500, 600, 700, 800, 700, 600],
                backgroundColor: 'rgba(26, 55, 246, 1)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</x-app-layout>