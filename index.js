

// Obtener boton
const btn = document.getElementById('btn-scroll');
// Agregar evento click
btn.addEventListener('click', () => {
    // Subir el scroll al principio de la pagina
    window.scrollTo(0, 0);
});

// Dark y light mode

// Obtener boton
const btnDark = document.getElementById('flexSwitchCheckDefault');

// Agregar evento click
btnDark.addEventListener('click', () => {
    // Obtener el body
    const body = document.querySelector('body');
    // Agregar o quitar la clase dark-mode
    body.classList.toggle('dark-mode');
});

// Autogeneracion de nombres

