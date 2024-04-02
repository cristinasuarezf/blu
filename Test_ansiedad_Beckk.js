
/*
window.addEventListener("load", function(){

});
*/
const btnCerrarRegistro = document.querySelector("#cerrar");
const modalRegistro = document.querySelector("#modal");



btnCerrarRegistro.addEventListener("click", () => {
    modalRegistro.close();
    modalRegistro.classList.remove('active')
});

var formulario=document.getElementById('test');
formulario.addEventListener('submit', (e)=> {
    e.preventDefault();
    let preg = new Array(22);
    res =0;

    for(var i = 1;i<=22;i++){
        preg[i] = document.querySelector('input[name="preg'+[i]+'"]:checked');
    }


     if(preg[1] && preg[2] && preg[3] && preg[4] && preg[5] && preg[6] && preg[7] && preg[8] && preg[9] && preg[10]
     && preg[11]&& preg[12] && preg[13]&& preg[14] && preg[15] && preg[16] && preg[17] && preg[18] && preg[19] && preg[20] && preg[21] ) {
    //$(document).ready(function(){
            var res = 0;
            for(var j = 1;j<=21;j++){
                res = parseInt(res) + parseInt(preg[j].value);
            }

            var nc=document.getElementById('numControl');
            nc = nc.value;
        
            console.log("Res: " + res  );
            console.log("noctrl: " + nc  );
    
            window.location.href = "guardar_test.php?resultado=" + res + "&nc=" + nc;
    //});

    modalRegistro.showModal();
    modalRegistro.classList.add('active')
    } else {
    alert('No hay ninún elemento activo');
    }
    });