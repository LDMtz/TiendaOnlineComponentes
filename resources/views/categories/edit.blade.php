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
                <a href="{{route('category_index')}}" class="w-7 h-7 flex items-center justify-center rounded-full bg-cm-blue-10 p-1 hover:bg-blue-400">
                    <i class="fa-solid fa-arrow-left text-white text-lg"></i>
                </a>
                <h1 class="text-cm-blue-10 font-black text-3xl" >Modificar Categoría</h1>
            </div>
    
            <!-- Card  -->
            <div class="flex justify-center">
                <form action="{{route('category_update', $category->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
    
                        <h2 class="text-cm-gray-5 text-xl font-black">EDITAR CATEGORÍA</h2>
        
                        <!-- Input: Nombre -->
                        <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-8">
                            <label for="name" class="text-base font-bold text-cm-gray-5">Nombre:</label>
                            <input name="name" value="{{ $category->name}}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                        </div>
                        @error('name') 
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
        
                        <!-- Select: Padre -->
                        <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                            <label for="parent_category_id" class="text-base font-bold text-cm-gray-5">Categoría padre:</label>
                            <select name="parent_category_id" class="outline-none p-1 rounded-lg w-full border border-cm-gray-5 bg-cm-gray-7 text-white text-sm font-semibold">
                                <option value="" {{ !$category->parent_category_id ? 'selected' : '' }}>Sin categoría padre</option>
                                @foreach($categories as $parentCategory)
                                    <option 
                                        value="{{ $parentCategory->id }}" 
                                        {{ $category->parent_category_id == $parentCategory->id ? 'selected' : '' }}>
                                        {{ $parentCategory->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('parent_category_id') 
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
    
                        <!-- Estado -->
                        <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                            <label for="state" class="text-base font-bold text-cm-gray-5">Estado:</label>
                            <select name="state" class="outline-none p-1 rounded-lg w-full border border-cm-gray-5 bg-cm-gray-7 text-white text-sm font-semibold">
                                <option value="1" {{ $category->state == 1 ? 'selected' : '' }}>Activo</option>
                                <option value="0" {{ $category->state == 0 ? 'selected' : '' }}>Inactivo</option>
                            </select>
                        </div>
                        @error('state') 
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
        
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