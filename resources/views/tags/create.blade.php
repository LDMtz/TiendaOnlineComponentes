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
                <a href="{{route('tag_index')}}" class="w-7 h-7 flex items-center justify-center rounded-full bg-cm-blue-10 p-1 hover:bg-blue-400">
                    <i class="fa-solid fa-arrow-left text-white text-lg"></i>
                </a>
                <h1 class="text-cm-blue-10 font-black text-3xl" >Agregar Etiqueta</h1>
            </div>

            <!-- Datos del produco -->
            <div class="bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-3">
                <!-- Título -->
                <p class="text-white font-bold text-lg mb-3">Datos del producto:</p>
                
                <!-- Contenido de los datos -->
                <div class="flex space-x-10 font-bold text-cm-purple-2">
                    <p>Id: <span class="font-normal text-white">{{ $product['id'] }}</span></p>
                    <p>Nombre: <span class="font-normal text-white">{{ $product['general_data']['name'] ?? 'N/A' }}</span></p>
                    <p>Marca: <span class="font-normal text-white">{{ $product['general_data']['brand'] ?? 'N/A' }}</span></p>
                    <p>Modelo: <span class="font-normal text-white">{{ $product['general_data']['model'] ?? 'N/A' }}</span></p>
                </div>
            </div>

            <!-- Etiquetas asociadas al producto -->
            <div class="flex items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-3 p-3 space-x-5">
                <p class="text-white font-bold text-lg">Etiquetas actuales:</p>

                @foreach($product['tags'] as $tag)
                    @if($tag->name == 'NUEVO') 
                        <div class="flex items-center border-2 border-cm-yellow-2 rounded-md py-1 px-3 bg-cm-yellow-1">
                            <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-new.png')}}" alt="">
                            <p class="ml-3 text-xl text-cm-yellow-2 font-semibold">NUEVO</p>
                        </div>
                    @elseif($tag->name == 'DESCUENTO') 
                        <div class="flex items-center border-2 border-cm-red-3 rounded-md py-1 px-3 bg-cm-red-2">
                            <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-desc.png')}}" alt="">
                            <p class="ml-3 text-xl text-cm-red-3 font-semibold">DESCUENTO</p>
                        </div>
                    @elseif($tag->name == 'ENVIO GRATIS') 
                        <div class="flex items-center border-2 border-cm-blue-3 rounded-md py-1 px-3 bg-cm-blue-4">
                            <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-envio.png')}}" alt="">
                            <p class="ml-3 text-xl text-cm-blue-3 font-semibold">ENVIO GRATIS</p>
                        </div>
                    @elseif($tag->name == 'EXCLUSIVO') 
                        <div class="flex items-center border-2 border-cm-purple-10 rounded-md py-1 px-3 bg-cm-purple-11">
                            <img class="h-6 w-6" src="{{asset('/images/labels/etiqueta-exclusive.png')}}" alt="">
                            <p class="ml-3 text-xl text-cm-purple-10 font-semibold">EXCLUSIVO</p>
                        </div>
                    @endif
                @endforeach
            </div>

           <!-- Card  -->
            <div class="flex justify-center">
                <form action="{{ route('tag_store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
                        <h2 class="text-cm-gray-5 text-xl font-black">NUEVA ETIQUETA</h2>

                        <!-- Etiquetas -->
                        <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                            <label for="tag" class="text-base font-bold text-cm-gray-5">Etiqueta:</label>
                            <select name="tag" class="outline-none p-1 rounded-lg w-full border border-cm-gray-5 bg-cm-gray-7 text-white text-sm font-semibold">
                                <option value="">Selecciona una etiqueta</option>
                                @foreach ($product['availableTags'] as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('tag') 
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror

                        <input value="{{$product['id']}}" name="product_id" type="text" hidden>

                        <!-- Button -->
                        <button type="submit" class="mt-10 bg-cm-green-3 text-cm-green-4 py-1 px-3 rounded-lg hover:bg-green-500 hover:text-green-100">
                            <i class="fa-solid fa-plus text-sm"></i>
                            <span class="font-semibold ml-1">Agregar</span>
                        </button>

                    </div>
                </form>
            </div>

            
        </div>
    </div>
    </x-app-layout>