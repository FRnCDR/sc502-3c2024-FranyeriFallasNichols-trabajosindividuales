document.addEventListener('DOMContentLoaded', function () {
    console.log('Cargó mi página');

    const btnParrafo = document.getElementById("btn_cambiar_parrafo");
    btnParrafo.addEventListener("click", cambiarParrafo);
});

const cambiarParrafo = () => {
    const parrafo = document.getElementById("parrafo-ejercicio2");
    parrafo.innerHTML = "Parrafo cambiado";
};