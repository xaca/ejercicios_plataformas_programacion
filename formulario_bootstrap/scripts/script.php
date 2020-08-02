<?php
	//var_dump($_POST);
	$salt = "MATRIX";
	$usuario = array();
	if(isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["celular"]) && isset($_POST["correo"]) && isset($_POST["ciudad"]))
	{
		$usuario["nombre"]  =   $_POST["nombre"];
		$usuario["apellido"]=   $_POST["apellido"];
		$usuario["celular"] =   $_POST["celular"];
		$usuario["correo"]  =   $_POST["correo"];
		$usuario["ciudad"]  =   $_POST["ciudad"];
	}
	$usuario["clave"] =   md5($salt.$_POST["clave1"]);

	echo json_encode($usuario);
?>