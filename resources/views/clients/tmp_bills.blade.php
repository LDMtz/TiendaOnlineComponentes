<x-app-layout>


    <div class="bg-cm-gray-2 p-6 rounded-lg shadow-md text-white w-auto mx-80 my-20">
        <h2 class="text-lg font-extrabold mb-4 text-cm-gray-5">MIS FACTURAS</h2>
        <div class="overflow-y-auto max-h-80">
        <table class="min-w-full border-collapse">
            <thead>
            <tr>
                        <th class="border-b-4 border-white py-3 text-left">Folio</th>
                        <th class="border-b-4 border-white py-3 px-8 text-left">IdCliente</th>
                        <th class="border-b-4 border-white py-3 px-4 text-left">Productos</th>
                        <th class="border-b-4 border-white py-3 px-4 text-left">Servicios</th>
                        <th class="border-b-4 border-white py-3 px-4 text-left">Monto Total</th>
                        <th class="border-b-4 border-white py-3 px-4 text-left">Fecha de emisión</th>
                        <th class="border-b-4 border-white py-3 px-4 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="border-b border-cm-gray-5 py-3">324234326</td>
                        <td class="border-b border-cm-gray-5 py-3 px-8">023</td>
                        <td class="border-b border-cm-gray-5 py-3 px-4">4</td>
                        <td class="border-b border-cm-gray-5 py-3 px-4">1</td>
                        <td class="border-b border-cm-gray-5 py-3 px-4">$23,213</td>
                        <td class="border-b border-cm-gray-5 py-3 px-4">24 de Octubre de 2024</td>
                        <td class="border-b border-cm-gray-5 py-3 px-4 flex gap-4">
    
                        <button class="bg-cm-purple-7 h-8 w-8 rounded-md pr-2 mt-3">
                        <i class="fa-solid fa-envelope text-cm-purple-8 h-8 w-8 pt-1 text-xl"></i>
                        </button>
                        <button class="bg-cm-blue-5 hover:bg-blue-700 h-8 w-8 mt-3 ml-2 text-cm-blue-6 rounded-md">
                            <i class="fas fa-download h-8 w-8 pt-1 text-xl"></i>
                        </button>
                    </td>
                </tr>   
            </tbody>
        </table>
    </div>
    
    
    
    
    </x-app-layout>
    