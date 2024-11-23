<x-app-layout>
    
    <div class="flex mx-8">
        <div class="">
            <x-sidebar-employee/>
        </div>
        <div class="flex-1 px-4 ml-8 my-8">

            <!-- Sección  -->
            <div class="flex items-center space-x-5">
                <a href="{{route('home')}}" class="w-7 h-7 flex items-center justify-center rounded-full bg-cm-blue-10 p-1 hover:bg-blue-400">
                    <i class="fa-solid fa-arrow-left text-white text-lg"></i>
                </a>
                <h1 class="text-cm-blue-10 font-black text-3xl" >SECCIÓN PROVEEDORES</h1>
            </div>

            <!-- Banner tabla -->
            <div class="flex items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-3">
                <p class="text-white font-bold text-lg">Lista de Proveedores</p>
                <!-- Buttons -->
                <div class="flex space-x-4 ml-auto">
                    <a id="open-modal" href="#" class="bg-cm-blue-9 text-white py-1 px-3 rounded-lg hover:bg-sky-500 hover:text-sky-100">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="font-semibold ml-1">BUSCAR</span>
                    </a>
                    <a href="{{route('supplier_create')}}" class="bg-cm-green-3 text-white py-1 px-3 rounded-lg hover:bg-green-500 hover:text-green-100">
                        <i class="fa-solid fa-plus"></i>
                        <span class="font-semibold ml-1">AGREGAR</span>
                    </a>
                </div>
            </div>

            <!-- Tabla -->
            <div class="bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-6 p-4">
                <x-table>
                    <x-slot name="headTable">
                        <x-th-table>Id</x-th-table>
                        <x-th-table>Nombre</x-th-table>
                        <x-th-table>Correo</x-th-table>
                        <x-th-table>Telefono</x-th-table>
                        <x-th-table>Estado</x-th-table>
                        <x-th-table>Fecha de creación</x-th-table>
                        <x-th-table>Ultima actualización</x-th-table>
                        <x-th-table>Acciones</x-th-table>
                    </x-slot>
                    <x-slot name="bodyTable">
                        @foreach($suppliers as $supplier)
                        <tr>
                            <x-td-table type="normal" :content="$supplier['id']" />
                            <x-td-table type="normal" :content="$supplier['name']" />
                            <x-td-table type="normal" :content="$supplier['email']" />
                            <x-td-table type="normal" :content="$supplier['number']" />
                            <x-td-table type="state" :content="$supplier['state']" />
                            <x-td-table type="normal" :content="$supplier['created_at']" />
                            <x-td-table type="normal" :content="$supplier['updated_at']" />
                            <x-td-table type="actions" :content="['section' => 'supplier', 'id' => $supplier['id']]" />
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>



        </div>
    </div>
@push('scripts')
    @vite('resources/js/modal-crud.js')
@endpush
</x-app-layout>

<!-- Modal -->
<div id="search-modal" class="hidden">
    <div class="flex fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 justify-center items-center">
        <div class="bg-gray-700 rounded-lg shadow-lg w-full max-w-md">
            <!-- Modal header -->
            <div class="flex justify-between items-center border-b px-5 py-3">
                <h3 class="text-sm font-semibold text-white">BUSCAR</h3>
                <button id="close-modal-search" class="text-gray-500 hover:text-red-500">
                    <i class="fa-solid fa-x text-sm"></i>
                </button>
            </div>
    
            <!-- Modal body -->
            <form>
                <div class="p-5">
                    <!-- Contenedor del Select -->
                    <div class="mb-4">
                        <label for="filter" class="text-sm font-medium text-gray-200">Filtrar por:</label>
                        <select id="filter" class="w-full mt-1 text-white border border-gray-300 bg-gray-600 rounded-lg p-1">
                            <option>Selecciona una opción</option>
                            <option>Nombre</option>
                            <option>Estado</option>
                        </select>
                    </div>
            
                    <!-- Contenedor del Input -->
                    <div class="mb-4">
                        <label for="input-data" class="text-sm font-medium text-gray-200">Ingresa el dato:</label>
                        <input id="input-data" type="text" class="w-full mt-1 text-white border border-gray-300 bg-gray-600 rounded-lg p-1 outline-none">
                    </div>
            
                    <!-- Contenedor del Botón -->
                    <div class="flex justify-center mt-4">
                        <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700">
                            <i class="fa-solid fa-magnifying-glass text-sm"></i>
                            <span class="font-semibold ml-1">Buscar</span>
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

<!-- Modal Success -->
@if(session('success'))
    <!-- Modal Success -->
    <div id="successModal" class="">
        <div tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 flex justify-center items-center bg-gray-900 bg-opacity-50">
            <div class="relative p-4 w-full max-w-md h-auto rounded-lg shadow bg-gray-800">
                <!-- Modal content -->
                <div class="relative p-4 text-center">
                    <!-- Botón de Cerrar -->
                    <button id="close-modal-success" type="button" class="absolute top-2.5 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
                        <i class="fa-solid fa-x"></i>
                    </button>
                    <div class="w-12 h-12 rounded-full bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                        <i class="fa-solid fa-check text-green-400 text-xl"></i>
                    </div>
                    <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif