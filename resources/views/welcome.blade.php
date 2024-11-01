<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-cm-gray-1">
  <x-header />

  <!-- Contenedor principal -->
  <div class="container  max-w-md py-2 flex">
    <!-- Rectángulo vertical de categorías -->
    <aside class="w-1/2 p-4 mr-4 ml-4 mt-3 text-center rounded-lg bg-cm-gray-2">
      <h2 class="text-xl font-Libre Franklin-extrabold mb-8 items-center text-cm-gray-5">Categorías</h2>
      <ul class="space-y-10 text-purple-500">
        <li>Componente</li>
        <li>Audio</li>
        <li>Monitor</li>
        <li>Accesorios</li>
        <li>Laptop</li>
        <li>Dispositivos</li>
        <li>Almácen</li>
        <li>Gamer</li>
      </ul>
    </aside> 



 <!-- Sección de Marcas Destacadas (fijada) -->
 <div style="position: absolute; top: 80px; right: 1050px;" class="w-1/5 bg-cm-gray-2 rounded-lg p-4 pl-2 overflow-y-auto">
        <h2 class="text-lg text-center font-bold text-white mb-4">Marcas Destacadas</h2>
        <div class="grid grid-cols-2 gap-4">
            <!-- Agrega imágenes de las marcas -->
            <img src="path/to/intel-logo.png" alt="Intel" class="w-full">
            <img src="path/to/amd-logo.png" alt="AMD" class="w-full">
            <img src="path/to/nvidia-logo.png" alt="NVIDIA" class="w-full">
            <img src="path/to/asus-logo.png" alt="ASUS" class="w-full">
            <!-- Añade más logotipos si es necesario -->
        </div>
    </div>




 <!-- Imagen a la derecha con enlace -->
 <div style="position: absolute; top: 80px; right: 340px;">
        <a href="https://ddtech.mx/" target="_blank">
            <img src="Images/fotobanner.png" alt="Banner" style="width: 700px; height: auto;" class="mx-auto">
        </a>
    </div>





<!-- Sección de productos con descuento -->
 
<!-- S<div class="bg-gray-800 rounded-lg p-4 m-4">
    <h2 class="text-lg font-bold text-white mb-4">Productos con descuento</h2>
    <div class="grid grid-cols-4 gap-4">
         Tarjeta de producto -->
      <!--  <div class="bg-gray-700 rounded-lg p-2 text-white text-center">
            <img src="path/to/product.jpg" alt="Producto" class="rounded-lg">
            <p class="mt-2 font-semibold">Nombre del Producto</p>
            <p class="text-green-500">$23.99</p>
            <p class="text-sm">Con Existencia</p>
        </div>-->
        <!-- Repite para cada producto -->
         <!-- 
    </div>
</div>
-->


  <x-footer />
</body>
</html>