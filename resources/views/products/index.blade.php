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
                <h1 class="text-cm-blue-10 font-black text-3xl" >SECCIÓN PRODUCTOS</h1>
            </div>

            <!-- Banner tabla -->
            <div class="flex items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-3">
                <p class="text-white font-bold text-lg">Lista de Productos</p>
                <!-- Buttons -->
                <div class="flex space-x-4 ml-auto">
                    <a href="#" class="bg-cm-blue-9 text-white py-1 px-3 rounded-lg hover:bg-sky-500 hover:text-sky-100">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="font-semibold ml-1">BUSCAR</span>
                    </a>
                    <a href="#" class="bg-cm-green-3 text-white py-1 px-3 rounded-lg hover:bg-green-500 hover:text-green-100">
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
                        'state' => true,
                        'email' => 'juan.perez@example.com',
                        'age' => 30,
                        'role' => 'Admin',
                        'created_at' => '2023-06-01 12:00:00',
                        'picture' => 'logo.png'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Ana',
                        'lastname' => 'Gómez',
                        'state' => false,
                        'email' => 'ana.gomez@example.com',
                        'age' => 28,
                        'role' => 'User',
                        'created_at' => '2022-03-15 09:30:00',
                        'picture' => 'default-user-profile.jpg'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Carlos',
                        'lastname' => 'Rodríguez',
                        'state' => true,
                        'email' => 'carlos.rodriguez@example.com',
                        'age' => 35,
                        'role' => 'User',
                        'created_at' => '2021-12-10 14:45:00',
                        'picture' => 'logo.png'
                    ],
                    [
                        'id' => 4,
                        'name' => 'Lucía',
                        'lastname' => 'Martínez',
                        'state' => false,
                        'email' => 'lucia.martinez@example.com',
                        'age' => 27,
                        'role' => 'User',
                        'created_at' => '2020-08-20 16:00:00',
                        'picture' => 'default-user-profile.jpg'
                    ]
                ];
                @endphp
                <x-table>
                    <x-slot name="headTable">
                        <x-th-table>Foto</x-th-table>
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
                            <x-td-table type="picture" :content="$user['picture']" />
                            <x-td-table type="normal" :content="$user['id']" />
                            <x-td-table type="normal" :content="$user['name']" />
                            <x-td-table type="normal" :content="$user['lastname']" />
                            <x-td-table type="state" :content="$user['state']" />
                            <x-td-table type="normal" :content="$user['email']" />
                            <x-td-table type="normal" :content="$user['age']" />
                            <x-td-table type="normal" :content="$user['role']" />
                            <x-td-table type="normal" :content="$user['created_at']" />
                            <x-td-table type="actions" :content="['section' => 'product', 'id' => $user['id']]" />
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>



        </div>
    </div>

</x-app-layout>