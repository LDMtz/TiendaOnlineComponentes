<x-app-layout>

<!-- Marcas destacadas -->
<div class="relative">
    <!-- Sección de marcas destacadas -->
    <div class="absolute ml-80 my-8 bg-cm-gray-2 text-white p-4 rounded-2xl mr-2 mb-2 w-60 shadow-lg">
        <div class="text-center text-2xl font-semibold mb-6">MARCAS DESTACADAS</div>
        <div class="grid grid-cols-2 gap-4">

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-30 h-30">
                <img src="Images/nvidia_logo.png" alt="Nvidia" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 p-2 transition  w-30 h-30">
                <img src="Images/amd-logo.png" alt="Amd" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-30 h-14">
                <img src="Images/intel-logo.png" alt="Intel" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 p-1 rounded-lg hover:bg-cm-purple-2 transition w-30 h-14">
                <img src="Images/msi-logo.png" alt="msi" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-30 h-14">
                <img src="Images/asus-logo.png" alt="ASUS" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-30 h-14">
                <img src="Images/Corsair-logo.png" alt="Corsair" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-30 h-16">
                <img src="Images/aorus-logo.png" alt="AORUS" class="w-full h-60">
            </button>
            
            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-cm-purple-2 transition w-30 h-16">
                <img src="Images/xpg-logo.png" alt="XPG" class="w-full h-33">
            </button>

        </div>
    </div>
</div>





<!-- Métodos de pago -->
<div class="relative pl-80">
    <!-- Sección de pagos -->
    <div class="absolute ml-80 my-8 bg-cm-gray-2 text-white p-4 rounded-2xl mr-2 mb-2 w-60 shadow-lg">
        <div class="text-center text-2xl font-semibold mb-6">METODOS DE PAGO</div>
        <div class="grid grid-cols-2 gap-4">

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-white transition w-30 h-30">
                <img src="Images/paypal-logo.png" alt="PayPal" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-white p-2 transition  w-30 h-30">
                <img src="Images/oxxo-logo.png" alt="OXXO" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-white transition w-30 h-14">
                <img src="Images/visa-logo.png" alt="VISA" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 p-1 rounded-lg hover:bg-white transition w-30 h-14">
                <img src="Images/mastercard-logo.png" alt="MasterCard" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-white transition w-30 h-14">
                <img src="Images/spe-logo.png" alt="SPE" class="w-full h-full">
            </button>

            <button class="flex items-center justify-center bg-cm-gray-3 rounded-lg hover:bg-white transition w-30 h-14">
                <img src="Images/applepay-logo.png" alt="Apple Pay" class="w-full h-full">
            </button>
        </div>
    </div>
</div>




    
    <!-- Navegación lateral -->
 <aside class="bg-cm-gray-2 text-white w-64 my-8 rounded-2xl ml-4 pb-4">
    <nav>
      <ul class="space-y-2">
  <!-- Categorías -->
    <div class="text-3xl text-center font-semi-bold truncate mb-4 bg-cm-gray-3 p-4 w-full rounded-t-2xl">CATEGORIAS</div>

    <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">

    <div class="flex items-center ml-8">
             <i class="fa-regular fa-keyboard mr-4 text-cm-purple-2"></i>
              <span class="mb-1 text-cm-purple-2">COMPONENTES</span>
            </div>
          </div>
          
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 mr-2 hover:bg-gray-700 ml-2  bg-cm-gray-3 rounded-lg">
            <div class="flex items-center mb-1">
            <i class="fa-solid fa-headphones text-cm-purple-2 ml-8 mr-4"></i>
              <span class="text-cm-purple-2">AUDIO</span>
            </div>
            <i class="fas hidden-fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                BOCINAS
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
        
                AURICULARES
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
               
                BARRA DE SONIDO
              </a>
            </li>
          </ul>
        </li>


        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700 ml-2 mr-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center mb-1">
            <i class="fa-solid fa-desktop ml-8 mr-4 text-cm-purple-2"></i>
              <span class="text-cm-purple-2">MONITOR</span>
            </div>
      
          </div>

        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-laptop ml-8 mr-4 text-cm-purple-2"></i>
              <span class="text-cm-purple-2">LAPTOP</span>
            </div>
          </div>

          <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-laptop ml-8 mr-4 text-cm-purple-2"></i>
              <span class="text-cm-purple-2">DISPOSITIVOS</span>
            </div>
          </div>

          <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-memory ml-8 mr-4 text-cm-purple-2"></i>
              <span class="text-cm-purple-2">ALMACENAMIENTO</span>
            </div>
          </div>

          <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-gamepad ml-8 mr-4 text-cm-purple-2"></i>
              <span class="text-cm-purple-2">GAMER</span>
            </div>
          </div>

          <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-crown text-cm-purple-2 ml-8 mr-4"></i>
              <span class="text-cm-purple-2">EXCLUSIVO</span>
            </div>
          </div>

          <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-shekel-sign text-cm-purple-2 ml-8 mr-4"></i>
              <span class="text-cm-purple-2">NUEVOS</span>
            </div>
          </div>
    </div>

    <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between mr-2 p-2 hover:bg-gray-700 ml-2 bg-cm-gray-3 rounded-lg">
            <div class="flex items-center">
            <i class="fa-solid fa-shekel-sign text-cm-purple-2 ml-8 mr-4"></i>
              <span class="text-cm-purple-2">NUEVOS</span>
            </div>
          </div>
    </div>
        <!-- Agrega más enlaces para la navegación lateral -->
      </ul>
    </nav>
  </aside>
  

 <!-- Opciones desplegables de las categorías -->
  
  <script>
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
  </script>



</x-app-layout>