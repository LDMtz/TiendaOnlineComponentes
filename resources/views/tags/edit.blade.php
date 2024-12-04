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
                <h1 class="text-cm-blue-10 font-black text-3xl" >Modificar Etiquetas</h1>
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
                <form action="{{route('tag_update', $product['id'])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
                        <h2 class="text-cm-gray-5 text-xl font-black">MIS ETIQUETAS</h2>

                        <table class="table-auto w-full border-collapse mt-1">
                            <thead>
                                <tr>
                                    <th class="p-2 font-semibold text-blue-500">Etiqueta</th>
                                    <th class="p-2 font-semibold text-blue-500">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_tags as $tag)
                                <tr class="text-white border-b-2">
                                    <td class="px-4 py-2">{{ $tag->name }}</td>
                                    <td class="px-4 py-2">
                                        <input 
                                            type="checkbox" 
                                            name="selected_tags[]" 
                                            value="{{ $tag->id }}" 
                                            class="w-4 h-4 focus:ring-blue-600 ring-offset-gray-800 bg-gray-700 border-gray-600"
                                            @if (in_array($tag->id, $product['associatedTags'])) checked @endif
                                        >
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        <input value="{{$product['id']}}" name="product_id" type="text" hidden>

                        <!-- Button -->
                        <button type="submit" class="mt-10 bg-cm-blue-5 text-cm-blue-6 py-1 px-3 rounded-lg hover:bg-blue-500 hover:text-blue-100">
                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                            <span class="font-semibold ml-1">Editar</span>
                        </button>

                    </div>
                </form>
            </div>

            
        </div>
    </div>
    </x-app-layout>