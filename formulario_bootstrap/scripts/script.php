<?php
	//var_dump($_POST);
	$salt = "MATRIX";
	$respuesta = array();
	$respuesta["clave"]=md5($salt.$_POST["clave1"]);
	echo json_encode($respuesta);
?>