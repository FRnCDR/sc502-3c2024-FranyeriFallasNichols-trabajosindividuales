document.addEventListener("DOMContentLoaded", () => {
  const alumnos = [
    { nombre: "Ash", apellido: "Rodriguez", calificacion: 95 },
    { nombre: "Francis", apellido: "Torres", calificacion: 93 },
    { nombre: "Marcelo", apellido: "Astorga", calificacion: 98 },
    { nombre: "Daniela", apellido: "Alvarado", calificacion: 90 },
    { nombre: "Alejandro", apellido: "Arias", calificacion: 92 }
  ];

  const contenedorAlumnos = document.getElementById("estudiantes-container");
  let totalNotas = 0;

  alumnos.forEach((alumno) => {
    totalNotas += alumno.calificacion;

    const cardContainer = document.createElement("div");
    cardContainer.classList.add("col-lg-4", "col-md-6", "col-sm-12", "mb-4");

    // Crear la tarjeta para el alumno
    const cardAlumno = document.createElement("div");
    cardAlumno.classList.add("card", "p-3");

    cardAlumno.innerHTML = `
      <div class="card-body">
        <h5 class="card-title">${alumno.nombre} ${alumno.apellido}</h5>
        <p class="card-text">Nota: ${alumno.calificacion}</p>
      </div>
    `;

    cardContainer.appendChild(cardAlumno);
    contenedorAlumnos.appendChild(cardContainer);
  });

  // Evento para mostrar el promedio
  document.getElementById("btn-promedio").addEventListener("click", () => {
    const promedioAlumnos = totalNotas / alumnos.length;
    const promedioDiv = document.getElementById("promedio-container");

    promedioDiv.innerHTML = `Promedio: ${promedioAlumnos}`;
  });
});
