// Obtener los elementos
const openModalBtn = document.getElementById('open-modal');
const closeModalSearchBtn = document.getElementById('close-modal-search');
const closeModalSuccessBtn = document.getElementById('close-modal-success');
const modalSearch = document.getElementById('search-modal');
const modalSuccess = document.getElementById('successModal');


// Abrir el modal
openModalBtn.addEventListener('click', (e) => {
    e.preventDefault(); // Prevenir el comportamiento por defecto del enlace
    modalSearch.classList.remove('hidden'); // Quitar la clase `hidden` para mostrar el modal
});

// Cerrar el modal
closeModalSearchBtn.addEventListener('click', () => {
    modalSearch.classList.add('hidden'); // Agregar la clase `hidden` para ocultar el modal
});

// Cerrar el modal al hacer clic fuera del contenido
window.addEventListener('click', (e) => {
    if (e.target === modalSearch) { // Si el clic fue en el fondo del modal
        modalSearch.classList.add('hidden');
    }
}); 


/*_____________________________*/

// Cerrar el modal
closeModalSuccessBtn.addEventListener('click', () => {
    modalSuccess.classList.add('hidden'); // Agregar la clase `hidden` para ocultar el modal
});

// Cerrar el modal al hacer clic fuera del contenido
window.addEventListener('click', (e) => {
    if (e.target === modalSuccess) { // Si el clic fue en el fondo del modal
        modalSuccess.classList.add('hidden');
    }
}); 