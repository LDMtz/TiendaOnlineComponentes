<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Sección Productos -->
            <div class="w-full lg:w-3/4 bg-cm-gray-2 rounded-lg border-cm-gray-3 border-2 p-6">

                <!-- Contenedor General-->
                <div class="flex flex-col lg:flex-row justify-between gap-6">
                    <!-- Contenedor de Imágenes -->
                    <div class="w-full lg:w-1/2 mb-6 lg:mb-0">
                        <!-- Imagen Principal -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden w-full h-[28rem]">
                            @if (!empty($data_product['images']))
                                <img src="{{ $data_product['images'][0] }}" alt="Producto" class="w-full h-full object-cover">
                            @else
                                <img src="{{asset('Images/default-prod-img.png')}}" alt="Producto" class="w-full h-full object-cover">
                            @endif
                        </div>
                        
                        <div class="flex gap-4 mt-4 overflow-x-auto w-full max-w-full py-3">
                            <!-- Verificamos si el array de imágenes no está vacío -->
                            @if (!empty($data_product['images']))
                                @foreach ($data_product['images'] as $image)
                                    <div class="w-28 h-28 bg-gray-600 rounded-lg overflow-hidden flex-shrink-0">
                                        <img src="{{ $image }}" alt="Miniatura" class="w-full h-full object-cover">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        
                    </div>

                    <!-- Contenedor de Descripción -->
                    <div class="w-full lg:w-1/2">
                        <p class="text-cm-purple-2 font-bold text-base">{{$data_product['category']}}</p>
                        <h2 class="text-2xl font-bold text-white my-4">{{$data_product['name']}}</h2>
                        <p class="text-3xl font-bold text-cm-purple-10 mb-2">${{$data_product['price']}}</p>
                        <p class="text-sm font-black text-cm-gray-11 my-5">DISPONIBLES: <span class="text-cm-purple-10 font-semibold ml-3">{{$data_product['stock']}}</span></p>

                        @if ($data_product['stock'] > 0)
                            <div class="inline-flex items-center bg-cm-purple-4 text-white rounded-lg">
                                <button class="bg-cm-purple-7 hover:bg-purple-700 p-2 rounded-l-lg">
                                <i class="fa-solid fa-minus text-xs"></i>
                                </button>
                                <span class="px-6 py-2 text-sm font-semibold">1</span>
                                <button class="bg-cm-purple-7 hover:bg-purple-700 p-2 rounded-r-lg">
                                <i class="fa-solid fa-plus text-xs"></i>
                                </button>
                            </div>

                            <!-- Botón Agregar al carrito -->
                            <button class="bg-cm-purple-7 text-cm-purple-8 font-bold hover:bg-purple-700 p-1 rounded-lg ml-4">
                                <i class="fa-solid fa-cart-plus text-sm ml-2"></i>
                                <span class="mx-2 text-lg">Agregar al carrito</span>
                            </button>
                        @else
                            <!-- Botón Agregar a la lista de deseos -->
                            <button class="bg-cm-blue-2 text-cm-blue-7 font-bold hover:bg-blue-700 p-1 rounded-lg">
                                <i class="fa-solid fa-ticket text-sm ml-2"></i>
                                <span class="mx-2 text-lg">Agregar a la lista de deseos</span>
                            </button>
                        @endif

                        <div class="flex flex-wrap gap-2 mt-4">
                            @foreach($data_product['tags'] as $tag)
                                @if($tag['name'] == 'NUEVO') 
                                    <div class="flex items-center border-2 border-cm-yellow-2 rounded-md py-0.5 px-1.5 bg-cm-yellow-1">
                                        <img class="h-4 w-4" src="{{asset('/images/labels/etiqueta-new.png')}}" alt="">
                                        <p class="ml-2 text-md text-cm-yellow-2 font-semibold">NUEVO</p>
                                    </div>
                                @elseif($tag['name'] == 'DESCUENTO') 
                                    <div class="flex items-center border-2 border-cm-red-3 rounded-md py-0.5 px-1.5 bg-cm-red-2">
                                        <img class="h-4 w-4" src="{{asset('/images/labels/etiqueta-desc.png')}}" alt="">
                                        <p class="ml-2 text-md text-cm-red-3 font-semibold">DESCUENTO</p>
                                    </div>
                                @elseif($tag['name'] == 'ENVIO GRATIS') 
                                    <div class="flex items-center border-2 border-cm-blue-3 rounded-md py-0.5 px-1.5 bg-cm-blue-4">
                                        <img class="h-4 w-4" src="{{asset('/images/labels/etiqueta-envio.png')}}" alt="">
                                        <p class="ml-2 text-md text-cm-blue-3 font-semibold">ENVIO GRATIS</p>
                                    </div>
                                @elseif($tag['name'] == 'EXCLUSIVO') 
                                    <div class="flex items-center border-2 border-cm-purple-10 rounded-md py-0.5 px-1.5 bg-cm-purple-11">
                                        <img class="h-4 w-4" src="{{asset('/images/labels/etiqueta-exclusive.png')}}" alt="">
                                        <p class="ml-2 text-md text-cm-purple-10 font-semibold">EXCLUSIVO</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <hr class="h-0.5 bg-gray-400 border-0 my-5">
                        
                        <h3 class="text-cm-gray-5 font-extrabold mb-2">CARACTERISTICAS:</h3>
                        <div class="flex flex-wrap">
                            @foreach($data_product['specific_data'] as $title => $content)
                                <div class="w-1/2 mb-2">
                                    <strong class="text-white">{{$title}}: <span class="text-cm-gray-5 font-light">{{$content}}</span></strong> 
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>

            <!-- Seccion Reseñas -->
            <div class="w-full lg:w-1/4 bg-cm-gray-2 rounded-lg border-cm-gray-3 border-2 p-6">
                
            </div>
        </div>
    </div>
</x-app-layout>
