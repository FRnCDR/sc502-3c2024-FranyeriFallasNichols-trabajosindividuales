document.addEventListener('DOMContentLoaded', function () {
    console.log('Cargó mi página');

    const btn = document.getElementById("btn_calcular_salario");
    btn.addEventListener("click", calcularSalario);

    const btnParrafo = document.getElementById("btn_cambiar_parrafo");
    btnParrafo.addEventListener("click", cambiarParrafo);
});

const calcularSalario = () => {
    const salarioInput = document.getElementById("salario");
    const salarioBruto = parseFloat(salarioInput.value);

    const cargasSociales = salarioBruto * 0.105;

    let impuesto = 0;

    if (salarioBruto > 1382000) {
        impuesto = (1382000 - 941000) * 0.10 + (salarioBruto - 1382000) * 0.15;
    } else if (salarioBruto > 941000) {
        impuesto = (salarioBruto - 941000) * 0.10;
    } else {
        impuesto = 0;
    }

    const salarioNeto = salarioBruto - cargasSociales - impuesto;

    const resultado = document.getElementById("resultado");
    resultado.style.display = "block";
    resultado.innerHTML = "Cargas Sociales: ₡" + cargasSociales + "<br>" +
                          "Impuesto sobre la Renta: ₡" + impuesto + "<br>" +
                          "<strong>Salario Neto: ₡" + salarioNeto + "</strong>";
};

const cambiarParrafo = () => {
    const parrafo = document.getElementById("parrafo-ejercicio2");
    parrafo.innerHTML = "Este es el nuevo contenido del párrafo después de hacer clic en el botón.";
};
