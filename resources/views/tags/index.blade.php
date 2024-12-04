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
                <h1 class="text-cm-blue-10 font-black text-3xl" >SECCIÓN ETIQUETAS</h1>
            </div>

            <!-- MIS ETIQUETAS -->
            <div class="flex items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-3 space-x-10">
                <p class="text-white font-bold text-lg">Etiquetas:</p>

                <div class="flex items-center border-2 border-cm-yellow-2 rounded-md py-1 px-3 bg-cm-yellow-1">
                    <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-new.png')}}" alt="">
                    <p class="ml-3 text-xl text-cm-yellow-2 font-semibold">NUEVO</p>
                </div>
                <div class="flex items-center border-2 border-cm-red-3 rounded-md py-1 px-3 bg-cm-red-2">
                    <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-desc.png')}}" alt="">
                    <p class="ml-3 text-xl text-cm-red-3 font-semibold">DESCUENTO</p>
                </div>
                <div class="flex items-center border-2 border-cm-blue-3 rounded-md py-1 px-3 bg-cm-blue-4">
                    <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-envio.png')}}" alt="">
                    <p class="ml-3 text-xl text-cm-blue-3 font-semibold">ENVIO GRATIS</p>
                </div>
                <div class="flex items-center border-2 border-cm-purple-10 rounded-md py-1 px-3 bg-cm-purple-11">
                    <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-exclusive.png')}}" alt="">
                    <p class="ml-3 text-xl text-cm-purple-10 font-semibold">EXCLUSIVO</p>
                </div>

            </div>

            <div class="flex items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-8 p-3">
                <p class="text-white font-bold text-lg">Lista de productos con etiquetas</p>
                <!-- Buttons -->
                <div class="flex space-x-4 ml-auto">
                    <button onclick="openTagModal()" class="bg-cm-green-3 text-white py-1 px-3 rounded-lg hover:bg-green-500 hover:text-green-100">
                        <i class="fa-solid fa-plus"></i>
                        <span class="font-semibold ml-1">AGREGAR ETIQUETA A PRODUCTO</span>
                    </button>
                </div>
            </div>

            <!-- Tabla -->
            <div class="bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-6 p-4">
                <x-table>
                    <x-slot name="headTable">
                        <x-th-table>Id</x-th-table>
                        <x-th-table>Nombre</x-th-table>
                        <x-th-table>Modelo</x-th-table>
                        <x-th-table>Marca</x-th-table>
                        <x-th-table>Etiquetas</x-th-table>
                        <x-th-table>Acciones</x-th-table>
                    </x-slot>
                    <x-slot name="bodyTable">
                        @foreach($products_with_tags as $product)
                        <tr>
                            <x-td-table type="normal" :content="$product['id']" />
                            <x-td-table type="normal" :content="$product['name']" />
                            <x-td-table type="normal" :content="$product['model']" />
                            <x-td-table type="normal" :content="$product['brand']" />
                            <td class="py-3 border-b border-cm-gray-5">
                                <div class="flex justify-center space-x-3">
                                    @foreach ($product['tags'] as $tag)
                                        <img class="w-6 h-6" src="{{ asset('images/labels/' . $tag) }}" alt="">
                                    @endforeach
                                </div>
                            </td>
                            <x-td-table type="actions-id" :content="['section' => 'tag', 'id' => $product['id']]" />
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>



        </div>
    </div>

</x-app-layout>


<!-- Modal -->
<div id="add-tag-modal" class="hidden">
    <div class="flex fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 justify-center items-center">
        <div class="bg-gray-700 rounded-lg shadow-lg w-full max-w-md">
            <!-- Modal header -->
            <div class="flex justify-between items-center border-b px-5 py-3">
                <h3 class="text-sm font-semibold text-white">BUSCAR</h3>
                <button onclick="closeTagModal()" id="close-add-tag-modal" class="text-gray-500 hover:text-red-500">
                    <i class="fa-solid fa-x text-sm"></i>
                </button>
            </div>
    
            <!-- Modal body -->
            <form action="{{route('tag_create') }}" method="GET">
                <div class="p-5">
                    <!-- Contenedor del Select -->
                    <div class="mb-4">
                        <label class="text-sm font-medium text-gray-200">Selecciona el producto:</label>
                        <select name="product-selected" class="w-full mt-1 text-white border border-gray-300 bg-gray-600 rounded-lg p-1">
                            @foreach ($select_products as $product)
                                <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                            @endforeach
                        </select>
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

<script>
    // Función para abrir la modal
    function openTagModal() {
        document.getElementById("add-tag-modal").classList.remove("hidden");
    }

    // Función para cerrar la modal
    function closeTagModal() {
        document.getElementById("add-tag-modal").classList.add("hidden");
    }

    const modalSuccess = document.getElementById('successModal');
    const closeModalSuccessBtn = document.getElementById('close-modal-success');
    // Cerrar el modal
    closeModalSuccessBtn.addEventListener('click', () => {
        modalSuccess.classList.add('hidden'); // Agregar la clase `hidden` para ocultar el modal
    });

    // Cerrar el modal al hacer clic fuera del contenido
    window.addEventListener('click', (e) => {
        if (e.target === modalSuccess) { // Si el clic fue en el fondo del modal
            modalSuccess.classList.add('hidden');
        }
    }); 
</script>