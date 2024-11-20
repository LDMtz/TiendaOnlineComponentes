<x-app-layout>


 <!-- Contenedor principal -->
 <div class="flex flex-col w-full lg:ml-6 space-y-4">
            <!-- Fila superior -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Tarjeta de Bienvenida -->
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-600 font-bold">Welcome Jonathan</p>
                            <p class="text-gray-500 text-sm mt-1">Number of Reports</p>
                        </div>
                        <p class="text-4xl font-bold text-blue-600">102</p>
                    </div>
                </div>

                <!-- Tarjeta de Activos -->
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-600 font-bold">Active</p>
                            <p class="text-gray-500 text-sm mt-1">Leads/Contacts</p>
                        </div>
                        <p class="text-4xl font-bold text-blue-600">325</p>
                    </div>
                </div>
            </div>



<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
    <!-- Tabla Active Orders -->
    <div class="bg-white shadow rounded-lg p-4 overflow-auto">
        <h2 class="text-lg font-bold text-gray-600 mb-4">Active Orders</h2>
        <table class="min-w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-gray-600 font-medium">Order</th>
                    <th class="px-4 py-2 text-gray-600 font-medium">Item Name</th>
                    <th class="px-4 py-2 text-gray-600 font-medium">Quantity</th>
                    <th class="px-4 py-2 text-gray-600 font-medium">Product Code</th>
                    <th class="px-4 py-2 text-gray-600 font-medium">Vendor</th>
                    <th class="px-4 py-2 text-gray-600 font-medium">Order Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fila de ejemplo -->
                <tr class="border-b">
                    <td class="px-4 py-2 text-gray-700">3589</td>
                    <td class="px-4 py-2 text-gray-700">Arch</td>
                    <td class="px-4 py-2 text-gray-700">1</td>
                    <td class="px-4 py-2 text-gray-700">19145</td>
                    <td class="px-4 py-2 text-gray-700">Hocks</td>
                    <td class="px-4 py-2 text-gray-700">6/27/2019</td>
                </tr>
                <!-- Agrega más filas aquí -->
            </tbody>
        </table>
    </div>

    <!-- Gráfico Analytics -->
    <div class="bg-white shadow rounded-lg p-4">
        <h2 class="text-lg font-bold text-gray-600 mb-4">Analytics</h2>
        <canvas id="analyticsChart" class="w-full h-64"></canvas>
    </div>
</div>

<!-- Script para el gráfico -->
<script>
    const ctx = document.getElementById('analyticsChart').getContext('2d');
    const analyticsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            datasets: [{
                label: 'Customers',
                data: [300, 400, 500, 600, 700, 800, 700, 600],
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
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