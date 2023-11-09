document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const buttonAprobar = document.getElementById("button2");
    const buttonRechazar = document.getElementById("button3");
 
    buttonAprobar.addEventListener("click", async function (event) {
        event.preventDefault();
        await mostrarAlerta();
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'submit_action';
        input.value = 'aprobar';
        form.appendChild(input);
        form.submit();
    });
 
    buttonRechazar.addEventListener("click", async function (event) {
        event.preventDefault();
        await mostrarAlerta();
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'submit_action';
        input.value = 'rechazar';
        form.appendChild(input);
        form.submit();
    });
 });
 
 async function mostrarAlerta() {
    await Swal.fire('¡Perfecto!', 'Registro actualizado con éxito', 'success');
 }