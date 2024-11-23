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
                <a href="{{route('supplier_index')}}" class="w-7 h-7 flex items-center justify-center rounded-full bg-cm-blue-10 p-1 hover:bg-blue-400">
                    <i class="fa-solid fa-arrow-left text-white text-lg"></i>
                </a>
                <h1 class="text-cm-blue-10 font-black text-3xl" >Mostrar Proveedor</h1>
            </div>
    
            <!-- Card  -->
            <div class="flex justify-center">
                <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
    
                    <h2 class="text-cm-gray-5 text-xl font-black">MOSTRAR PROVEEDOR</h2>

                    <!-- Contenedor para dividir en 2 -->
                    <div class="flex flex-row justify-between w-full mt-8 gap-6">
                        
                        <!-- Primera columna -->
                        <div class="flex flex-col items-start w-1/2">
                            <!-- Input: Id categoría -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2">
                                <label class="text-base font-bold text-cm-gray-5">Id Categoría:</label>
                                <input value="{{ $supplier->id }}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>

                            <!-- Input: Nombre -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2 mt-5">
                                <label class="text-base font-bold text-cm-gray-5">Nombre:</label>
                                <input value="{{ $supplier->name }}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>

                            <!-- Input: Correo -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2 mt-5">
                                <label class="text-base font-bold text-cm-gray-5">Correo:</label>
                                <input value="{{ $supplier->email }}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>

                            <!-- Input: Telefono -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2 mt-5">
                                <label class="text-base font-bold text-cm-gray-5">Telefono:</label>
                                <input value="{{ $supplier->number }}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>
                        </div>
                        
                        <!-- Segunda columna -->
                        <div class="flex flex-col items-center w-1/2">
                            <!-- Input: Estado -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2">
                                <label class="text-base font-bold text-cm-gray-5">Estado:</label>
                                <input value="{{ $supplier->state ? 'Activo' : 'Inactivo' }}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>

                            <!-- Input: Fecha de creacion -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2 mt-5">
                                <label class="text-base font-bold text-cm-gray-5">Fecha de creación:</label>
                                <input  value="{{ $supplier->created_at}}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>

                            <!-- Input: Ultima actualizacion -->
                            <div class="bg-cm-gray-3 text-white rounded-md w-full px-4 pb-3 pt-2 mt-5">
                                <label class="text-base font-bold text-cm-gray-5">Ultima actualización:</label>
                                <input value="{{ $supplier->updated_at}}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white" disabled>
                            </div>


                        </div>

                    </div>
    
                </div>
            </div>
    
    
        </div>
    </div>
</x-app-layout>

