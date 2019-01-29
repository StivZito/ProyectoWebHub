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
	//var url = "cliente.xml";
	//var url = "consultar_cliente.php"
	//var username = document.getElementById("username").value;
	//var pass = document.getElementById("pass").value;
	alert(username)
	alert(pass)
	var estado = "../Controller/ctrl_login.php?op=consultar&username="+username+"&pass="+pass;
	//var ai 	= new AJAXInteraction(url,mostrarCliente,"XML");
	//ai.doGet();
	alert(estado)
	if(estado == true){
		alert("Usuario exitoso")
		return true;
	}
	else
		alert("Usuario no encontrado")	
	return false;
}

