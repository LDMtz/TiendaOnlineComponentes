<header>
  <!-- Barra de navegación -->
  <nav class="bg-cm-purple-1">
    <div class="flex items-center justify-between h-12 mx-5">
      <!-- Logo y Nombre -->
      <a href="{{ route('default_home') }}" class="flex items-center">
        <img class="w-9 h-9" src="{{ asset('images/logo.png') }}" alt="">
        <span class="text-lg ml-3 font-bold font-sans text-white hover:text-cm-purple-9">Belikekis Components</span>
    </a>


      <div class="flex items-center text-lg text-white space-x-5">
        @auth
          <!-- Campo de búsqueda -->
          <div class="relative text-gray-300 focus-within:text-white">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-white text-base"></i>
            <input
                type="search"
                class="w-64 pl-10 py-1 rounded-2xl text-sm border border-black bg-cm-purple-4 focus:outline-none"
                placeholder="Buscar..."
            />
          </div>

          <!-- Flecha -->
          <button type="button" class="ml-4 hover:text-cm-purple-9">
            <i class="fa-solid fa-chevron-down "></i>
          </button>

          <!--Usuario -->
          <div class="flex items-center ml-4 text-base">
            @php
                $user = Auth::user(); // Asegúrate de obtener el usuario autenticado
                $imageData = $user->picture_profile ? 'data:image/jpeg;base64,'.base64_encode($user->picture_profile) : asset('images/default-user-profile.jpg');
            @endphp
            <img class="h-8 w-8 rounded-full" src="{{ $imageData }}" alt="{{ $user->username }}">
            <span class="ml-3">{{ $user->username }}</span>
        </div>

          <!-- Campana de notificaciones -->
          <button type="button" class="hover:text-cm-purple-9">
            <i class="fa-solid fa-bell"></i>
          </button>

          <!-- Botón de carrito de compras blanco, sin fondo -->
          <button type="button" class="hover:text-cm-purple-9">
            <i class="fa-solid fa-cart-shopping"></i>
          </button>

          <!-- Botón logout -->
          <a href="{{route('to_logout')}}" class="hover:text-cm-purple-9">
            <i class="fa-solid fa-right-from-bracket"></i>
          </a>
        @else
          <!-- Botón login -->
          <a href="{{route('login')}}" class="hover:text-cm-purple-9">
            <i class="fa-solid fa-right-to-bracket"></i>
          </a>
        @endauth



      </div>
    </div>
  </nav>
</header>