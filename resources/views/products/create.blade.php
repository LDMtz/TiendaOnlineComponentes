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
                <h1 class="text-cm-blue-10 font-black text-3xl" >Agregar Producto</h1>
            </div>
    
            <!-- Card  -->
            <div class="flex justify-center">
                <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
                        <h2 class="text-cm-gray-5 text-xl font-black">NUEVO PRODUCTO</h2>

                        <!-- Contenedor para las tres columnas -->
                        <div class="flex flex-row space-x-5 mt-2">

                            <!-- Columna 1 -->
                            <div class="flex-1">
                                <h2 class="text-cm-blue-6 text-lg font-bold text-center">Datos generales</h2>
                                <!-- Input: Nombre -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="name" class="text-base font-bold text-cm-gray-5">Nombre:</label>
                                    <input name="name" value="{{ old('name') }}" type="text" placeholder="Ingresa el nombre"
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>
                                @error('name')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror

                                <!-- Input: Modelo -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="model" class="text-base font-bold text-cm-gray-5">Modelo:</label>
                                    <input name="model" value="{{ old('model') }}" type="text" placeholder="Ingresa el modelo"
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>
                                @error('model')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror

                                <!-- Input: Marca -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="brand" class="text-base font-bold text-cm-gray-5">Marca:</label>
                                    <input name="brand" value="{{ old('brand') }}" type="text" placeholder="Ingresa la marca"
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>
                                @error('brand')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror

                                <!-- Select: Categoría -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="category" class="text-base font-bold text-cm-gray-5">Categoría:</label>
                                    <select name="category" class="outline-none p-1 rounded-lg w-full border border-cm-gray-5 bg-cm-gray-7 text-white text-sm font-semibold">
                                        <option value="" selected>Selecciona la categoría</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Select: Proveedor -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="supplier" class="text-base font-bold text-cm-gray-5">Proveedor:</label>
                                    <select name="supplier" class="outline-none p-1 rounded-lg w-full border border-cm-gray-5 bg-cm-gray-7 text-white text-sm font-semibold">
                                        <option value="" selected>Selecciona el proveedor</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}" {{ old('supplier') == $supplier->id ? 'selected' : '' }}>
                                                {{ $supplier->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('supplier')
                                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
            
                            <!-- Columna 2 -->
                            <div class="flex-1">
                                <h2 class="text-cm-blue-6 text-lg font-bold text-center">Datos especificos</h2>
                                <!-- Input: Datos -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <div class="flex justify-between items-center mb-2">
                                        <label for="" class="text-base font-bold text-cm-gray-5">Agregar dato:</label>
                                        <button id="addDataBtn" type="button" class="bg-cm-blue-7 text-white px-2 rounded-sm text-sm">
                                            <i class="fa-solid fa-square-plus"></i>
                                            <span class="font-semibold">Incluir</span>
                                        </button>
                                    </div>
                                    <input id="data-title" value="" type="text" placeholder="Ingresa el titulo"
                                        class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                    <input id="data-content" value="" type="text" placeholder="Ingresa el contenido"
                                    class="w-full mt-3 p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                                </div>
                                
                                <!-- Tabla -->
                                <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                                    <label for="" class="text-base font-bold text-cm-gray-5">Datos especificos del producto:</label>
                                    <table class="table-auto w-full mt-1">
                                        <thead>
                                            <tr>
                                                <th class="px-2 py-2 text-left font-semibold text-blue-500">Titulo</th>
                                                <th class="px-2 py-2 text-left font-semibold text-blue-500">Contenido</th>
                                                <th class="px-2 py-2 text-center font-semibold text-blue-500">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data-table-body">

                                        </tbody>
                                    </table>

                                </div>

                            </div>
            
                            <!-- Columna 3 -->
                            <div class="flex-1">
                                <h2 class="text-cm-blue-6 text-lg font-bold text-center">Imagenes</h2>
                                <!-- Input: Images -->
                                <div class="flex items-center justify-center w-full mt-5">
                                    <label for="dropzone-file" class="flex flex-col items-center justify-center border-2 border-dashed rounded-lg cursor-pointer bg-cm-gray-3 border-cm-gray-8 hover:border-gray-500 hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center py-6 px-10">
                                            <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span class="font-semibold">Click para agregar</span><br>Debes seleccionar todos los archivos</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">JPG, PNG, JPE (MAX. 4MB)</p>
                                        </div>
                                        <input name="images[]" id="dropzone-file" type="file" class="hidden" multiple />
                                    </label>
                                </div>

                                @error('images.*')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror

                                <div class="mt-3 text-sm bg-cm-gray-3 p-3 rounded-lg text-gray-600">
                                    <label for="" class="text-base font-bold text-cm-gray-5">Imagenes cargadas:</label>
                                    <div id="file-name-container" class="bg-cm-gray-7 text-gray-400 p-2 rounded-sm"></div>
                                </div>

                            </div>
                            
                        </div>
            
                        <!-- Botón -->
                        <button type="submit"
                            class="mt-10 bg-cm-green-3 text-cm-green-4 py-1 px-3 rounded-lg hover:bg-green-500 hover:text-green-100">
                            <i class="fa-solid fa-plus text-sm"></i>
                            <span class="font-semibold ml-1">Agregar</span>
                        </button>
                    </div>
                </form>
            </div>
            
    
        </div>
    </div>
@push('scripts')
    @vite('resources/js/create-product.js')
@endpush
</x-app-layout>