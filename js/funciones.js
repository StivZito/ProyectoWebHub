/*Funciones Cliente*/
function validarIngresoLogin(){
	var username	= document.getElementById("username").value;
	var pass 		= document.getElementById("pass").value;
	
	
	if(username == "" || pass == "" ){
		alert("Formulario incompleto");
	}
	else{
		consultarLogin(username,pass);
		//alert("Ingreso Exitoso");
	}
	return false;
}

function consultarLogin(username,pass){
	
	alert(username)
	alert(pass)
	var resultado = "../Controller/ctrl_login.php?op=consultar&username="+username+"&pass="+pass;
	alert(resultado)

	if(resultado != NULL){
		alert("Usuario exitoso")
		header('Locationn: /homepage.php');
	}
	else
		alert("Usuario no encontrado")	
		header('Locationn: /login.php');
}

