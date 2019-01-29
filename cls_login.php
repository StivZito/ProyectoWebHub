<?php
require_once('db/MysqliDb.php');

class cls_login{
	

	function consultar_login(){
		$base 	= new MysqliDb();
		$username	= $this->datos["username"];
		$pass = $this->datos["pass"];  
		

		if(is_null($base->where('username', $username);) && is_null($base->where('pass', $pass);))
			return false;
		else 
			return true;
	}
	
}

?>