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
            <h1 class="text-cm-blue-10 font-black text-3xl" >Agregar Categoría</h1>
        </div>

        <!-- Card  -->
        <div class="flex justify-center">
            <form action="{{route("category_store")}}" method="POST">
                @csrf
                @method('POST')
                <div class="flex flex-col items-center bg-cm-gray-2 rounded-lg border-2 border-cm-gray-3 mt-7 p-6">
                    <h2 class="text-cm-gray-5 text-xl font-black">NUEVA CATEGORÍA</h2>
                
                    <!-- Input: Nombre -->
                    <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-8">
                        <label for="name" class="text-base font-bold text-cm-gray-5">Nombre:</label>
                        <input name="name" value="{{ old('name') }}" type="text" class="w-full p-0.5 outline-none bg-transparent border-2 rounded-md px-2 border-cm-gray-5 text-sm text-white">
                    </div>
                    @error('name')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror

                    <!-- Select: Padre -->
                    <div class="bg-cm-gray-3 text-white rounded-md w-80 px-4 pb-3 pt-2 mt-5">
                        <label for="parent_category_id" class="text-base font-bold text-cm-gray-5">Categoría padre:</label>
                        <select name="parent_category_id" class="outline-none p-1 rounded-lg w-full 
                        border border-cm-gray-5 bg-cm-gray-7 
                        text-white text-sm font-semibold">
                            <option value="" selected>Sin categoría padre</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Mostrar error para el campo 'parent_category_id' -->
                    @error('parent_category_id')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror

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