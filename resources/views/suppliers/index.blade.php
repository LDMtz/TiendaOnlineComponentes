<x-app-layout>
    
    <div class="flex mx-8">
        <div class="">
            <x-sidebar-employee/>
        </div>
        <div class="flex-1 px-4 ml-8 my-8">
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
                        <x-td-table type="actions" :content="['section' => 'supplier', 'id' => $user['id']]" />
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>

        </div>
    </div>

</x-app-layout>