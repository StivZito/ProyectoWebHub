<?php
require_once('db/MysqliDb.php');

class cls_login{
	
	public $datos = array();

	function __construct($request){	
	  //var_dump("<pre>",$request,"</pre>");
	  //die(); 		  
	  $numero 	= count($request);
	  $tags 	= array_keys($request); 
	  $valores 	= array_values($request);
	  
	  for($i=0;$i<$numero;$i++)
		$this->datos[$tags[$i]]=$valores[$i];				
		//$$tags[$i]=$valores[$i];	
	  //var_dump("<pre>",$this->datos,"</pre>");	
	}

	function consultar_login(){
		$base 	= new MysqliDb();
		$username	= $this->datos["username"];
		$pass = $this->datos["pass"];  

		echo username
		echo pass
		//var_dump("<pre>",$this->datos,"</pre>");
		
		$sql = sprintf("SELECT * FROM cliente WHERE %s LIKE '%%%s%%'",$base->escape($username),$base->escape($pass));

		$resultado = $base->query($sql);
		 
		/*$records = $conn-->prepare('SELECT username, pass FROM login WHERE username =$username');
		$records-->bindParam(':username', $username);

		$records.execute();
		$results = $records-->fetch(PDO::FETCH_ASSOC);

		$message = '';

		if(count($results)>0 && password_verify($_POST['pass'},$results['pass'])){
			$_SESSION['username'] = $results['username'];
			$message = 'Usuario exitoso';	
		}
		else{
			$message = 'Usuario no registrado';
		}*/
	}
	return json_encode($resultado);
}

?>