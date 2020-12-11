

function validacionF(){
    var nombre1;
  	var password1;
	
    nombre1 = document.getElementById('Name').value;
    password1 = document.getElementById('Password').value;
 	
    if(nombre1 == ""){
        alert("Falta ingresar su nombre");
        document.getElementById('Name').focus();
        return false;
    }
    else{
        if(password1 == ""){
            alert("Falta ingresar la contraseña");
            document.getElementById('Password').focus();
            return false;
        }
 	
 	}
 }
