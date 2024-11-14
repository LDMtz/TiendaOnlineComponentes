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
    
                    <!-- Componente de Categoría -->
                    <li class="p-2 mx-3 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                        <i class="fa-solid fa-memory text-cm-purple-2 mr-4 ml-8"></i>
                        <span class="text-cm-purple-2 font-bold">COMPONENTES</span>
                    </li>
    
                    <!-- Audio (con subcategorías) -->
                    <li class="mx-3 opcion-con-desplegable list-none">
                        <div class="p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-purple-3">
                            <i class="fa-solid fa-headphones text-cm-purple-2 mr-4 ml-8"></i>
                            <span class="text-cm-purple-2 font-bold">AUDIO</span>
                        </div>
                        <ul class="desplegable hidden text-white mx-4">
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
                                <img src="Images/nvidia_logo.png" alt="logo de nvidia" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/amd-logo.png" alt="logo de amd" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/intel-logo.png" alt="logo de intel" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/msi-logo.png" alt="logo de msi" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/asus-logo.png" alt="logo de asus" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/Corsair-logo.png" alt="logo de corsair" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/aorus-logo.png" alt="logo de aorus" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/xpg-logo.png" alt="logo de xpg" class="w-full h-full object-contain">
                            </button>

                        </div>
                    </div>


                </div>
                <!-- Carrusel -->
                <div id="carousel" class="col-span-3 mt-4 overflow-hidden shadow-[0_0_15px_5px_rgba(107,14,221,0.5)] h-72">
                    <img src="Images/Banner.png" class="w-full h-full object-cover" alt="Banner">
                    <img src="Images/Banner-2.png" class="w-full h-full object-cover hidden" alt="Banner">
                    <img src="Images/Banner-3.png" class="w-full h-full hidden" alt="Banner">
                    <img src="Images/Banner-4.png" class="w-full h-full hidden" alt="Banner">
                    <img src="Images/Banner-5.jpg" class="w-full h-full hidden" alt="Banner">
                </div>
    
                <!-- Métodos de pago -->
                <div class="col-span-1 mt-4">
                    <div class="bg-cm-gray-2 text-white p-4 rounded-lg w-full md:w-100 shadow-lg border-2 border-cm-gray-6">
                        <span class="text-base mb-4 block font-extrabold text-cm-gray-5 text-center">MÉTODOS DE PAGO</span>
                        <div class="grid grid-cols-2 gap-y-2 gap-x-4">
                            <!-- Botón con imagen -->
                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/paypal-logo.png" alt="logo de paypal" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/oxxo-logo.png" alt="logo de nvidia" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/visa-logo.png" alt="Intel" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/mastercard-logo.png" alt="msi" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/spe-logo.png" alt="ASUS" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/applepay-logo.png" alt="Corsair" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/googlepay-logo.png" alt="AORUS" class="w-full h-full object-contain">
                            </button>

                            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-full h-12">
                                <img src="Images/mercadopago-logo.png" alt="XPG" class="w-full h-full object-contain">
                            </button>

                        </div>
                    </div>


                </div>

            </div>
            <!-- Productos -->
            <div class="mt-8 border-2 border-cm-gray-6 rounded-2xl">
                <!-- Productos destacados -->
                <div class="container grid grid-cols-5 p-4 gap-4">
                    <div class="col-span-5">
                        <span class="font-black text-2xl text-cm-purple-2">Productos destacados</span>
                    </div>
                    <style>

                    </style>
                    <!-- Producto 1  -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 2 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/tarjeta-video-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Tarjeta de Video Asus ROG Strix GeForce RTX 4090 OC Edition / ROG-STRIX-RTX4090-O24G-GAMING</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-xmark text-cm-red-1"></i>
                                <span class="ml-1 font-semibold text-xs">SIN EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7
                            hover:bg-sky-800 hover:border-sky-400">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 3  -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 4 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/tarjeta-video-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Tarjeta de Video Asus ROG Strix GeForce RTX 4090 OC Edition / ROG-STRIX-RTX4090-O24G-GAMING</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-xmark text-cm-red-1"></i>
                                <span class="ml-1 font-semibold text-xs">SIN EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7
                            hover:bg-sky-800 hover:border-sky-400">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 5 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    
                </div>

                <!-- Productos con descuento -->
                <div class="container grid grid-cols-5 p-4 gap-4">
                    <div class="col-span-5">
                        <span class="font-black text-2xl text-cm-purple-2">Productos con descuento</span>
                    </div>
                    <!-- Producto 1  -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 2 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/tarjeta-video-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Tarjeta de Video Asus ROG Strix GeForce RTX 4090 OC Edition / ROG-STRIX-RTX4090-O24G-GAMING</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-xmark text-cm-red-1"></i>
                                <span class="ml-1 font-semibold text-xs">SIN EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7
                            hover:bg-sky-800 hover:border-sky-400">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 3  -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 4 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/tarjeta-video-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Tarjeta de Video Asus ROG Strix GeForce RTX 4090 OC Edition / ROG-STRIX-RTX4090-O24G-GAMING</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-xmark text-cm-red-1"></i>
                                <span class="ml-1 font-semibold text-xs">SIN EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7
                            hover:bg-sky-800 hover:border-sky-400">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 5 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    
                </div>

                <!-- Productos nuevos -->
                <div class="container grid grid-cols-5 p-4 gap-4">
                    <div class="col-span-5">
                        <span class="font-black text-2xl text-cm-purple-2">Productos nuevos</span>
                    </div>
                    <!-- Producto 1  -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 2 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/tarjeta-video-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Tarjeta de Video Asus ROG Strix GeForce RTX 4090 OC Edition / ROG-STRIX-RTX4090-O24G-GAMING</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-xmark text-cm-red-1"></i>
                                <span class="ml-1 font-semibold text-xs">SIN EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7
                            hover:bg-sky-800 hover:border-sky-400">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 3  -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 4 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/tarjeta-video-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Tarjeta de Video Asus ROG Strix GeForce RTX 4090 OC Edition / ROG-STRIX-RTX4090-O24G-GAMING</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-xmark text-cm-red-1"></i>
                                <span class="ml-1 font-semibold text-xs">SIN EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-blue-2 border-cm-blue-7
                            hover:bg-sky-800 hover:border-sky-400">
                            <i class="fa-solid fa-receipt text-cm-blue-7 text-lg"></i>
                        </button>
                    </div>
                    <!-- Producto 5 -->
                    <div class="flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product">
                        <div class="divide-y-2 divide-cm-gray-8">
                            <div class="flex justify-center p-1 gap-2">
                                <img class="w-5 h-auto" src="Images/etiqueta-new.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-desc.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-exclusive.png" alt="">
                                <img class="w-5 h-auto" src="Images/etiqueta-envio.png" alt="">
                            </div>
                            <div class="flex w-full justify-center bg-white">
                                <img class="w-auto h-28 object-contain" src="Images/procesador-prueba.png" alt="producto de prueba">
                            </div>
                            <div class="text-cm-gray-10 leading-4">
                                <p class="line-clamp-3">Procesador Intel Core Ultra 7 265K / 20 Nucleos (8P+12E) / 3.9 GHz / LGA1851 / Intel Graphics / 125w / BX80768265K</p>
                            </div>
                            <div class="text-center">
                                <span class="font-semibold text-xs text-cm-purple-10">$29,000</span>
                            </div>
                            <div class="text-center text-white">
                                <i class="fa-solid fa-check text-cm-green-1"></i>
                                <span class="ml-1 font-semibold text-xs">CON EXISTENCIA</span>
                            </div>
                        </div>
                        <!-- Agregar a carrito || Lista deseos -->
                        <button class="btn-cart-list absolute top-[-6px] right-[-10px] 
                            z-10 w-10 h-10 rounded-full border-2 bg-cm-green-2 border-cm-green-1
                            hover:bg-green-800 hover:border-green-400">
                            <i class="fa-solid fa-cart-plus text-cm-green-1 text-lg"></i>
                        </button>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
 
  <script>
    // Opciones desplegables de las categorías 
    document.addEventListener("DOMContentLoaded", function () {
      // Obtener todas las opciones principales con desplegables
      const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

      // Agregar evento de clic a cada opción principal
      opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
          // Obtener el desplegable asociado a la opción
          const desplegable = opcion.querySelector(".desplegable");

          // Alternar la clase "hidden" para mostrar u ocultar el desplegable
          desplegable.classList.toggle("hidden");
        });
      });
    });

    // Carrusel
    document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.getElementById('carousel');
    const images = Array.from(carousel.querySelectorAll('#carousel img'));  // Selecciona las imágenes
    let currentIndex = 0;

    function showNextImage() {
        // Oculta la imagen actual
        images[currentIndex].classList.add('hidden');

        // Incrementa el índice y hace que sea cíclico
        currentIndex = (currentIndex + 1) % images.length;

        // Muestra la siguiente imagen
        images[currentIndex].classList.remove('hidden');
    }

    // Cambia la imagen cada 3 segundos
    setInterval(showNextImage, 3000);
    });

  </script>