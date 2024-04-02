    const updateButton = document.getElementById('agendar1'); //Boton de agendar
    const dialog = document.getElementById('agendarDialog'); //Dialogo para confirmar fecha y hora
    const confirmBtn = dialog.querySelector('#confirmBtn'); //Boton para confirmar

    confirmBtn.addEventListener("click", () => {
        dialog.close();
        dialog.classList.remove('active')
    });

    document.getElementById('agendar1').addEventListener('click', function() {
        dialog.showModal();
        dialog.classList.add('active')
    });  

    // "Confirm" button of form triggers "close" on dialog because of [method="dialog"]
    favDialog.addEventListener('close', () => {
        outputBox.value = `${favDialog.returnValue} button clicked - ${(new Date()).toString()}`;
    });

    
/*
    const updateButtonF = document.getElementById('confirmBtn'); //Boton de agendar
    const dialogF = document.getElementById('agendarCitaDialog'); //Dialogo para confirmar fecha y hora
    const confirmBtnF = dialog.querySelector('aceptar'); //Boton para confirmar

    confirmBtnF.addEventListener("click", () => {
        dialogF.close();
        dialogF.classList.remove('active')
    });

    document.getElementById('confirmBtn').addEventListener('click', function() {
        dialogF.showModal();
        dialogF.classList.add('active')
    }); 
*/