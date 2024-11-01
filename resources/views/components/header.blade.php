<header>
  <!-- Barra de navegación -->
  <nav class="bg-cm-purple-1">
    <div class="flex items-center justify-between h-12 mx-5 ">
      <!-- Logo y Nombre -->
      <a href="{{ url('/') }}" class="flex items-center">
        <img class="w-9 h-9" src="https://static.vecteezy.com/system/resources/previews/036/895/728/non_2x/hacker-logo-or-hacker-in-black-hoodie-cyber-crime-with-laptop-free-png.png" alt="">
        <span class="text-lg ml-3 font-bold font-sans text-white">Belikekis Components</span>
    </a>

      <div class="flex items-center text-lg text-white space-x-5">
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
        <button type="button" class="ml-4">
          <i class="fa-solid fa-chevron-down "></i>
        </button>

        <!--Usuario -->
        <div class="flex items-center ml-4 text-base">
          <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          <span class="ml-3">Javier Zamudio</span>
        </div>

        <!-- Campana de notificaciones -->
        <button type="button" class="">
          <i class="fa-solid fa-bell"></i>
        </button>

        <!-- Botón de carrito de compras blanco, sin fondo -->
        <button type="button" class="">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>

      </div>
    </div>
  </nav>
</header>