
const updateButton = document.getElementById('registrar'); //Boton de registro
const dialog = document.getElementById('dialogo'); //Dialogo de "Cuenta registrada"
const confirmBtn = dialog.querySelector('#aceptar'); //Boton de "aceptar" para ir a menúPrin

confirmBtn.addEventListener("click", () => {
    dialog.close();
    dialog.classList.remove('active')
});

document.getElementById('registrar').addEventListener('click', function() {
    dialog.showModal();
    dialog.classList.add('active')
});    