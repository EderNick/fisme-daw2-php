const botonesEliminar = document.querySelectorAll(".btn-eliminar");
document.addEventListener("DOMContentLoaded", () => {

    botonesEliminar.forEach((boton) => {
        boton.addEventListener("click", (event) => {
            const confirmar = confirm("¿Está seguro que quieres eliminar este cliente?");
            if (!confirmar) event.preventDefault();
        });
    });
});

