
function validacion(){
    var nombre;
  	var password;
	var apellido;
	var email;
	var telefono;
	var comentario;
	var guardarConbinacion =/\w+@\w+\.+[a-z]/;

    nombre = document.getElementById('name').value;
    password = document.getElementById('password').value;
    apellido = document.getElementById('lastname').value;
    email = document.getElementById('email').value;
    telefono = document.getElementById('phone').value;
	comentario =document.getElementById('coment').value;
 	
    if(nombre == ""){
        alert("Falta ingresar su nombre");
        document.getElementById('name').focus();
        return false;
    }
    else{
        if(password == ""){
            alert("Falta ingresar la contraseña");
            document.getElementById('password').focus();
            return false;
        }
 	else{
            if(apellido == ""){
                alert("Falta ingresar los apellidos");
                document.getElementById('lastname').focus();   
                return false;
            }
            else{
            if(email == ""){
                alert("Falta ingresar el email");
                document.getElementById('email').focus();   
                return false;
            }
             else{
            if(telefono == ""){
                alert("Falta ingresar el telefono");
                document.getElementById('phone').focus();   
                return false;
            }
            else{
            if(comentario == ""){
                alert("Falta ingresar algun comentario");
                document.getElementById('coment').focus();   
                return false;
            }
             else{
                      if(isNaN(telefono)){
                            alert("Solo tipo de dato numerico");
                            return false;
                        }
                        else{
                            if(telefono.length!=10){
                                alert("solo se aceptan 10 caracteres en Telefono");
                                return false;
                            }
                            else{
                                if(password.length<8||password.length>15){
                                    alert("Password, minimo 8 digitos, maximo 15 digitos");
                                    return false;
                                }
                                else{
                                    if(!guardarConbinacion.test(email)){
                                        alert("¡ Correo incorrecto !");
                                        return false;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
}


