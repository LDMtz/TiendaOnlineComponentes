    // Opciones desplegables de las categorías 
    document.addEventListener("DOMContentLoaded", function () {
    // Obtener todas las opciones principales con desplegables
    const opcionesConDesplegable = document.querySelectorAll(".dropdown-category");

    // Agregar evento de clic a cada opción principal
    opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
        // Obtener el desplegable asociado a la opción
        const desplegable = opcion.querySelector(".dropdown-list");

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

  // Obtener los elementos
  const dropdownButton = document.getElementById('dropdownDefaultButton');
  const dropdownMenu = document.getElementById('dropdown');
  const chevronDownIcon = document.getElementById('chevronDownIcon');
  const chevronUpIcon = document.getElementById('chevronUpIcon');

  // Función para alternar la visibilidad del dropdown
  dropdownButton.addEventListener('click', function () {
    // Alternar la clase 'hidden' en el menú
    dropdownMenu.classList.toggle('hidden');
    
    // Alternar la visibilidad de los íconos
    chevronDownIcon.classList.toggle('hidden');
    chevronUpIcon.classList.toggle('hidden');
  });

  // Cerrar el dropdown si se hace clic fuera de él
  document.addEventListener('click', function (event) {
    if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
      dropdownMenu.classList.add('hidden');
      chevronDownIcon.classList.remove('hidden');
      chevronUpIcon.classList.add('hidden');
    }
  });
