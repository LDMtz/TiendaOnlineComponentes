<x-app-layout>

    <div class="flex mx-8">
        <!-- Sidebar (Izquierda) -->
        <div>
            <aside class="bg-cm-gray-2 w-64 my-8 rounded-2xl pb-4 sticky top-8">
                <nav class="space-y-2 select-none">
                    <!-- Título de Categorías -->
                    <div class="text-3xl text-center font-extrabold truncate mb-4 bg-cm-gray-3 text-cm-gray-5 p-4 w-full rounded-t-2xl">
                        CATEGORIAS
                    </div>

                    <!-- Componentes (con subcategorías) -->
                    <li class="mx-3 dropdown-category list-none">
                        <div class="p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                            <i class="fa-solid fa-memory text-cm-purple-2 mr-4 ml-8"></i>
                            <span class="text-cm-purple-2 font-bold">COMPONENTES</span>
                        </div>
                        <ul class="dropdown-list hidden text-white mx-4">
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Procesador</a></li>
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Placa madre</a></li>
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Tarjeta de video</a></li>
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Memoria RAM</a></li>
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Unidades SSD</a></li>
                        </ul>
                    </li>
    
                    <!-- Audio (con subcategorías) -->
                    <li class="mx-3 dropdown-category list-none">
                        <div class="p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                            <i class="fa-solid fa-headphones text-cm-purple-2 mr-4 ml-8"></i>
                            <span class="text-cm-purple-2 font-bold">AUDIO</span>
                        </div>
                        <ul class="dropdown-list hidden text-white mx-4">
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Bocinas</a></li>
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Auriculares</a></li>
                            <li><a href="#" class="p-2 hover:bg-cm-gray-6 hover:text-cm-purple-9 flex items-center border-b-2 border-cm-gray-8">Barra de sonido</a></li>
                        </ul>
                    </li>
    
                    <!-- Monitor -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-desktop text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">MONITORES</span>
                    </li>
    
                    <!-- Laptop -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-laptop text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">LAPTOP</span>
                    </li>
    
                    <!-- Dispositivos -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-tablet text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">DISPOSITIVOS</span>
                    </li>
    
                    <!-- Energía -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-battery-three-quarters text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">ENERGÍA</span>
                    </li>
    
                    <!-- Gamer -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-gamepad text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">GAMER</span>
                    </li>
    
                    <!-- Exclusivo -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-crown text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">EXCLUSIVO</span>
                    </li>
    
                    <!-- Nuevos -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-shekel-sign text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">NUEVOS</span>
                    </li>

                    <!-- Computadoras -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-computer text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">EQUIPOS</span>
                    </li>

                    <!-- Servidores -->
                    <li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-server text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">SERVIDORES</span>
                    </li>
                </nav>
            </aside>
        </div>
    
        <!-- Contenedor Principal (Derecha) -->
        <div class="main-content flex-1 p-4 ml-8">
            <div class="grid grid-cols-5 gap-4">

                <!-- Marcas destacadas -->
                <div class="col-span-1 mt-4">       
                    <div class="bg-cm-gray-2 text-white p-4 rounded-lg w-full md:w-100 shadow-lg border-2 border-cm-gray-6">
                        <span class="text-base mb-4 block font-extrabold text-cm-gray-5 text-center">MARCAS DESTACADAS</span>
                        <div class="grid grid-cols-2 gap-y-2 gap-x-4">
                            <!-- Botón con imagen -->
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/nvidia-logo.png') }}" alt="logo de nvidia" class="w-full h-full object-contain">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/amd-logo.png') }}" alt="logo de amd" class="w-full h-full object-contain">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/intel-logo.png') }}" alt="logo de intel" class="w-full h-full object-contain">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/msi-logo.png') }}" alt="logo de msi" class="w-full h-full object-contain p-1">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/asus-logo.png') }}" alt="logo de asus" class="w-full h-full object-contain">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/corsair-logo.png') }}" alt="logo de corsair" class="w-full h-full object-contain">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/aorus-logo.png') }}" alt="logo de aorus" class="w-full h-full object-contain p-1">
                            </button>
                            
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="{{ asset('images/brands/xpg-logo.png') }}" alt="logo de xpg" class="w-full h-full object-contain">
                            </button>                            

                        </div>
                    </div>


                </div>

                <!-- Carrusel -->
                <div id="carousel" class="col-span-3 mt-4 overflow-hidden shadow-[0_0_15px_5px_rgba(107,14,221,0.5)] h-72">
                    <img src="{{ asset('images/banner/Banner.png') }}" class="w-full h-full object-cover" alt="Banner">
                    <img src="{{ asset('images/banner/Banner-2.png') }}" class="w-full h-full object-cover hidden" alt="Banner">
                    <img src="{{ asset('images/banner/Banner-3.png') }}" class="w-full h-full hidden" alt="Banner">
                    <img src="{{ asset('images/banner/Banner-4.png') }}" class="w-full h-full hidden" alt="Banner">
                    <img src="{{ asset('images/banner/Banner-5.jpg') }}" class="w-full h-full hidden" alt="Banner">
                </div>

                <!-- Métodos de pago -->
                <div class="col-span-1 mt-4">
                    <div class="bg-cm-gray-2 text-white p-4 rounded-lg w-full md:w-100 shadow-lg border-2 border-cm-gray-6">
                        <span class="text-base mb-4 block font-extrabold text-cm-gray-5 text-center">MEJORES DESCUENTOS</span>
                        <div class="grid grid-cols-2 gap-y-2 gap-x-4">
                            <!-- Botón con imagen -->
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/10_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/20_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/30_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/40_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/50_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/60_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/70_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg transition w-full h-12 overflow-hidden">
                                <img src="{{ asset('images/desc/80_desc.png') }}" alt="logo de paypal" class="w-full h-full object-cover">
                            </button>

                        </div>
                    </div>


                </div>
            </div>

            <!-- Productos -->
            <div class="mt-8 border-2 border-cm-gray-6 rounded-2xl">

                <!-- Productos con descuento -->
                <div class="container grid grid-cols-5 p-4 gap-4">
                    <div class="col-span-5">
                        <span class="font-black text-2xl text-cm-purple-2">Productos con descuento</span>
                    </div>
                    @foreach($products as $product)
                        @if(in_array('etiqueta-desc.png', $product['labelPaths']))
                            <a href="{{ route('client_show_product', ['product' => $product['id']]) }}">
                                <x-product-item :data-product="$product" />
                            </a>
                        @endif
                    @endforeach
                </div>

                <!-- Productos nuevos -->
                <div class="container grid grid-cols-5 p-4 gap-4 mt-8">
                    <div class="col-span-5">
                        <span class="font-black text-2xl text-cm-purple-2">Productos nuevos</span>
                    </div>
                    @foreach($products as $product)
                        @if(in_array('etiqueta-new.png', $product['labelPaths']))
                            <a href="{{ route('client_show_product', ['product' => $product['id']]) }}">
                                <x-product-item :data-product="$product" />
                            </a>
                        @endif
                    @endforeach
                </div>

                <!-- Productos exclusivos -->
                <div class="container grid grid-cols-5 p-4 gap-4 mt-8">
                    <div class="col-span-5">
                        <span class="font-black text-2xl text-cm-purple-2">Productos exclusivos</span>
                    </div>
                    @foreach($products as $product)
                        @if(in_array('etiqueta-exclusive.png', $product['labelPaths']))
                            <a href="{{ route('client_show_product', ['product' => $product['id']]) }}">
                                <x-product-item :data-product="$product" />
                            </a>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </div>

@push('scripts')
    @vite('resources/js/home-clients.js')
@endpush
</x-app-layout>