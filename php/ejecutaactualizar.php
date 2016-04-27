<?php

session_start();
extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	include ("clases.php");
	$opera = new actualiza($id,$nombre,$apellido,$correo,$usuario,$contrasena,$telefono,$direccion,$cp,$estado,$ciudad, $rfc,$tipo);
	$opera->actualizar();
?>