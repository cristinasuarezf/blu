function mostrarContrasena(){
            var tipo = document.getElementById("pass");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }