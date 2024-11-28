
// Obtener los elementos del DOM
const addDataBtn = document.getElementById('addDataBtn');
const dataTitleInput = document.getElementById('data-title');
const dataContentInput = document.getElementById('data-content');
const dataTableBody = document.getElementById('data-table-body');

// Función para agregar una fila
addDataBtn.addEventListener('click', function() {
    const title = dataTitleInput.value.trim();
    const content = dataContentInput.value.trim();

    // Validación: Asegurarse de que ambos campos no estén vacíos
    if (title === "" || content === "") {
        alert("Por favor, ingresa tanto el título como el contenido.");
        return; // No hacer nada si alguno de los campos está vacío
    }

    // Crear una nueva fila (<tr>) con los datos
    const newRow = document.createElement('tr');

    newRow.innerHTML = `
    <td class="px-2 py-2 text-sm">${title}</td>
    <td class="px-2 py-2 text-sm">${content}</td>
    <td class="px-2 py-0.5 text-center">
        <button type="button" class="delete-btn inline-flex items-center p-1.5 rounded-md bg-cm-red-1">
            <i class="fa-solid fa-trash-can text-cm-red-3"></i>
        </button>
    </td>
    <td class="px-2 py-2 hidden">
        <input type="text" value="${title}:${content}" name="dataProduct[]"/>
    </td>
    `;

    // Agregar la nueva fila al cuerpo de la tabla
    dataTableBody.appendChild(newRow);

    // Limpiar los campos de entrada después de agregar
    dataTitleInput.value = "";
    dataContentInput.value = "";

    // Añadir funcionalidad para eliminar filas
    const deleteBtn = newRow.querySelector('.delete-btn');
    deleteBtn.addEventListener('click', function() {
        const row = deleteBtn.closest('tr');
        row.remove(); // Eliminar la fila
    });
    
});

/* ---------------------------------- */

// Obtener el input de archivo
const fileInput = document.getElementById('dropzone-file');

// Obtener el contenedor donde se mostrarán los nombres de los archivos
const fileNameContainer = document.getElementById('file-name-container');

// Añadir un evento para cuando se seleccionen archivos
fileInput.addEventListener('change', function(event) {
    const fileList = event.target.files;
    
    if (fileList.length > 0) {
        // Crear un array de nombres de archivos
        const fileNames = Array.from(fileList).map(file => file.name);
        
        // Mostrar los nombres de los archivos seleccionados
        fileNameContainer.innerHTML = `<ul>${fileNames.map(name => `<li><i class="fa-solid fa-image mr-3"></i>${name}</li>`).join('')}</ul>`;
    } else {
        // Si no se seleccionó ningún archivo
        fileNameContainer.textContent = '';
    }
});