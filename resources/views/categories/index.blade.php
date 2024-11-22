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
                <h1 class="text-cm-blue-10 font-black text-3xl" >SECCIÓN CATEGORIAS</h1>
            </div>

            <!-- Banner tabla -->
            <div class="flex items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-3">
                <p class="text-white font-bold text-lg">Lista de Categorias</p>
                <!-- Buttons -->
                <div class="flex space-x-4 ml-auto">
                    <a id="open-modal" href="#" class="bg-cm-blue-9 text-white py-1 px-3 rounded-lg hover:bg-sky-500 hover:text-sky-100">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="font-semibold ml-1">BUSCAR</span>
                    </a>
                    <a href="{{route('category_create')}}" class="bg-cm-green-3 text-white py-1 px-3 rounded-lg hover:bg-green-500 hover:text-green-100">
                        <i class="fa-solid fa-plus"></i>
                        <span class="font-semibold ml-1">AGREGAR</span>
                    </a>
                </div>
            </div>

            <!-- Tabla -->
            <div class="bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-6 p-4">
                @php
                $users = [
                    [
                        'id' => 1,
                        'name' => 'Juan',
                        'lastname' => 'Pérez',
                        'state' => true,  // El estado es true, lo que podría significar "ACTIVO"
                        'email' => 'juan.perez@example.com',  // Correo electrónico
                        'age' => 30,  // Edad del usuario
                        'role' => 'Admin',  // Rol del usuario
                        'created_at' => '2023-06-01 12:00:00',  // Fecha de creación
                    ],
                    [
                        'id' => 2,
                        'name' => 'Ana',
                        'lastname' => 'Gómez',
                        'state' => false,  // El estado es false, lo que podría significar "INACTIVO"
                        'email' => 'ana.gomez@example.com',  // Correo electrónico
                        'age' => 28,  // Edad del usuario
                        'role' => 'User',  // Rol del usuario
                        'created_at' => '2022-03-15 09:30:00',  // Fecha de creación
                    ],
                    [
                        'id' => 3,
                        'name' => 'Carlos',
                        'lastname' => 'Rodríguez',
                        'state' => true,  // El estado es true, lo que podría significar "ACTIVO"
                        'email' => 'carlos.rodriguez@example.com',  // Correo electrónico
                        'age' => 35,  // Edad del usuario
                        'role' => 'User',  // Rol del usuario
                        'created_at' => '2021-12-10 14:45:00',  // Fecha de creación
                    ],
                    [
                        'id' => 4,
                        'name' => 'Lucía',
                        'lastname' => 'Martínez',
                        'state' => false,  // El estado es false, lo que podría significar "INACTIVO"
                        'email' => 'lucia.martinez@example.com',  // Correo electrónico
                        'age' => 27,  // Edad del usuario
                        'role' => 'User',  // Rol del usuario
                        'created_at' => '2020-08-20 16:00:00',  // Fecha de creación
                    ]
                ];
                @endphp
                <x-table>
                    <x-slot name="headTable">
                        <x-th-table>Id</x-th-table>
                        <x-th-table>Nombre</x-th-table>
                        <x-th-table>Apellido</x-th-table>
                        <x-th-table>Estado</x-th-table>
                        <x-th-table>Email</x-th-table>
                        <x-th-table>Edad</x-th-table>
                        <x-th-table>Rol</x-th-table>
                        <x-th-table>Fecha</x-th-table>
                        <x-th-table>Acciones</x-th-table>
                    </x-slot>
                    <x-slot name="bodyTable">
                        @foreach($users as $user)
                        <tr>
                            <x-td-table type="normal" :content="$user['id']" />
                            <x-td-table type="normal" :content="$user['name']" />
                            <x-td-table type="normal" :content="$user['lastname']" />
                            <x-td-table type="state" :content="$user['state']" />
                            <x-td-table type="normal" :content="$user['email']" />
                            <x-td-table type="normal" :content="$user['age']" />
                            <x-td-table type="normal" :content="$user['role']" />
                            <x-td-table type="normal" :content="$user['created_at']" />
                            <x-td-table type="actions" :content="['section' => 'category', 'id' => $user['id']]" />
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>



        </div>
    </div>

</x-app-layout>

<!-- Modal -->
<div id="crud-modal" class="hidden">
    <div class="flex fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 justify-center items-center">
        <div class="bg-gray-700 rounded-lg shadow-lg w-full max-w-md">
            <!-- Modal header -->
            <div class="flex justify-between items-center border-b px-5 py-3">
                <h3 class="text-sm font-semibold text-white">BUSCAR</h3>
                <button id="close-modal" class="text-gray-500 hover:text-red-500">
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

<script>
    // Obtener los elementos
const openModalBtn = document.getElementById('open-modal');
const closeModalBtn = document.getElementById('close-modal');
const modal = document.getElementById('crud-modal');

// Abrir el modal
openModalBtn.addEventListener('click', (e) => {
    e.preventDefault(); // Prevenir el comportamiento por defecto del enlace
    modal.classList.remove('hidden'); // Quitar la clase `hidden` para mostrar el modal
});

// Cerrar el modal
closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden'); // Agregar la clase `hidden` para ocultar el modal
});

// Cerrar el modal al hacer clic fuera del contenido
window.addEventListener('click', (e) => {
    if (e.target === modal) { // Si el clic fue en el fondo del modal
        modal.classList.add('hidden');
    }
}); 
</script>