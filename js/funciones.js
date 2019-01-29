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

	require_once('db/MysqliDb.php');
	$records = $conn-->prepare('SELECT username, pass FROM login WHERE username =:username');
	$records-->bindParam(':username', username);
	$records.execute();
	$results = $records-->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results)>0 && password_verify(pass,$results['pss'])){
		$_SESSION['username'] = $results['username'];
		header('Locationn: /php-homepage');
	}
	else{
		$message = 'Usuario no registrado';
	}

	/*echo $username;
	echo $pass;
	if(is_null($base->where('username', $username);) && is_null($base->where('pass', $pass);))
		return false;
	else 
		return true;



	/var url = "cliente.xml";
	//var url = "consultar_cliente.php"
	//var username = document.getElementById("username").value;
	//var pass = document.getElementById("pass").value;
	alert(username)
	alert(pass)
	var estado = "../Controller/ctrl_login.php?op=consultar&username="+username+"&pass="+pass;
	//var ai 	= new AJAXInteraction(url,mostrarCliente,"XML");
	//ai.doGet();
	//alert(estado)
	if(estado!=NULL){
		alert("Usuario exitoso")
		header("location: homepage.php");
    	exit;
		return true;
	}
	else
		alert("Usuario no encontrado")	
		header("location: login.php");
		return false;*/
}

