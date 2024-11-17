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