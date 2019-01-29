<?php
require_once('db/MysqliDb.php');

class cls_login{
	

	function consultar_login(){
		//$base 	= new MysqliDb();
		//$username	= $this->datos["username"];
		//$pass = $this->datos["pass"];  
		
		$records = $conn-->prepare("SELECT username, pass FROM login WHERE username = $username";

		echo $username;
		echo $pass;
		if(is_null($base->where('username', $username);) && is_null($base->where('pass', $pass);))
			return false;
		else 
			return true;
	}
	
}

?>