// Obtener boton
const btnDark = document.getElementById('flexSwitchCheckDefault');

// Agregar evento click
btnDark.addEventListener('click', (e) => {

    e.preventDefault()
    // Obtener el body
    const body = document.querySelector('body');
    // Agregar o quitar la clase dark-mode
    body.classList.toggle('dark-mode');

    // Mantener el modo seleccionado
    // if (body.classList.contains('dark-mode')) {
    //     localStorage.setItem('dark-mode', 'true');
    // } else {
    //     localStorage.setItem('dark-mode', 'false');
    // }

    // Obtener el modo actual
    // const modoActual = localStorage.getItem('dark-mode');



    // console.log(modoActual);



});
