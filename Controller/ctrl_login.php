<?php
 //ini_set('display_errors',1);
 //error_reporting(E_ALL);
 include('cls_login.php');
 //header('Content-type: text/xml');
 header('Content-type: application/json');
 header('Cache-Control: no-store, no-cache, must-revalidate');  
 extract($_GET);
 //var_dump("<pre>",$_GET,"</pre>");   
 $p = new cls_login($_GET);
//var_dump("<pre>",$p->datos,"</pre>");

 switch($op){
	case 'consultar':
			$xml = $p->consultar_login();
			//CONSULTA
			break;
	/*case 'ingresar':
			//INGRESO
			$xml = $p->ingresar_cliente();
			break;
	case 'editar':
			//EDICION
			$xml = $p->editar_cliente();
			break;
	case 'eliminar':
			//ELIMINACION
			$xml = $p->eliminar_cliente();
			break;*/
 } 
 echo $xml;
?>