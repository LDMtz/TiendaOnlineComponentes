<x-app-layout>
    <div class="flex mx-8">
        <!-- Sidebar -->
        <div class="">
            <x-sidebar-employee/>
        </div>
        <!-- Content -->
        <div class="flex-1 px-4 ml-8 my-8">
    
            <!-- Sección  -->
            <div class="flex items-center space-x-5">
                <a href="{{route('product_index')}}" class="w-7 h-7 flex items-center justify-center rounded-full bg-cm-blue-10 p-1 hover:bg-blue-400">
                    <i class="fa-solid fa-arrow-left text-white text-lg"></i>
                </a>
                <h1 class="text-cm-blue-10 font-black text-3xl" >Mostrar Producto</h1>
            </div>
    
            <!-- Card  -->
            <div class="flex justify-center">
            
                    <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
                        <h2 class="text-cm-gray-5 text-xl font-black">MOSTRAR PRODUCTO</h2>

                        <!-- Contenedor para las tres columnas -->
                        <div class="flex flex-row space-x-5 mt-2">

                            <!-- Columna 1 -->
                            <div class="flex-1">
                                <h2 class="text-cm-blue-6 text-lg font-bold text-center">Datos generales</h2>
                                <!-- Input: Nombre -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="name" class="text-base font-bold text-cm-gray-5">Nombre:</label>
                                    <input name="name" value="{{ $product->data['data']['general-data']['name'] }}" type="text" disabled
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>

                                <!-- Input: Modelo -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="model" class="text-base font-bold text-cm-gray-5">Modelo:</label>
                                    <input name="model" value="{{ $product->data['data']['general-data']['model'] }}" type="text" disabled
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>

                                <!-- Input: Marca -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="brand" class="text-base font-bold text-cm-gray-5">Marca:</label>
                                    <input name="brand" value="{{ $product->data['data']['general-data']['brand'] }}" type="text" disabled
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>

                                <!-- Input: Categoria -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="category" class="text-base font-bold text-cm-gray-5">Categoría:</label>
                                    <input name="category" value="{{ $product->category->name }}" type="text" disabled
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>

                                <!-- Input: Proveedor -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="supplier" class="text-base font-bold text-cm-gray-5">Proveedor:</label>
                                    <input name="supplier" value="{{ $product->supplier->name }}" type="text" disabled
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>

                                <!-- Input: Estado -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="state" class="text-base font-bold text-cm-gray-5">Estado:</label>
                                    <input name="state" value="{{ $product->state ? 'Activo' : 'Inactivo' }}" type="text" disabled
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>

                            </div>
            
                            <!-- Columna 2 -->
                            <div class="flex-1">
                                <h2 class="text-cm-blue-6 text-lg font-bold text-center">Datos especificos</h2>

                                <!-- Tabla -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="" class="text-base font-bold text-cm-gray-5">Datos especificos del producto:</label>
                                    <table class="table-auto w-full mt-1">
                                        <tbody id="data-table-body">
                                            @if(!empty($product->data['data']['specific-data']) && is_array($product->data['data']['specific-data']))
                                                @foreach($product->data['data']['specific-data'] as $title => $content)
                                                    <tr class="">
                                                        <td class="px-2 py-2 text-sm">{{ $title }}</td>
                                                        <td class="px-2 py-2 text-sm">{{ $content }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <p class="text-center text-sm mt-3">No tiene datos especificos registrados</p>
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
            
                            <!-- Columna 3 -->
                            <div class="flex-1">
                                <h2 class="text-cm-blue-6 text-lg font-bold text-center">Imagenes</h2>

                                <div class="mt-5 text-sm bg-cm-gray-3 p-3 rounded-lg text-gray-600">
                                    <label for="" class="text-base font-bold text-cm-gray-5">Imagenes del producto:</label>

                                    <div class="grid grid-cols-2 gap-2 mt-2">
                                        <!-- Cargar todas las imágenes -->
                                        @if($product->pictures->isEmpty())
                                            <p class="text-center text-sm mt-3 col-span-2 text-white">Este producto no tiene imagenes.</p>
                                        @else
                                            @foreach($product->pictures as $picture)
                                                <div class="relative group w-20 h-20">
                                                    <img class="w-full h-full" 
                                                        src="data:image/jpeg;base64,{{ $picture->base64_image }}" 
                                                        alt="Imagen del producto">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
    
        </div>
    </div>
</x-app-layout>