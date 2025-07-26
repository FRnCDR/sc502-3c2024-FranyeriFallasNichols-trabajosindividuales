document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("btn_verificar");
  btn.addEventListener("click", verificarEdad);
});

const verificarEdad = () => {
  const edad = parseInt(document.getElementById("edad").value); 
  const mensaje = document.getElementById("mensaje");

  if (edad <= 0) {
    mensaje.innerHTML = "ingrese una edad válida.";
    return;
  }
  if (edad >= 18) {
    mensaje.innerHTML = "Eres mayor de edad.";
  } else {
    mensaje.innerHTML = "Eres menor de edad.";
  }
};
