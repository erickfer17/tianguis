<?php
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$nick=$_POST['nick'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
$tel=$_POST['tel'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$rfc=$_POST['rfc'];


$reqlen = strlen($nick) * strlen($pass) * strlen($pass2) *  strlen($nombre)* strlen($apellidos) * strlen($mail) * strlen($tel) * strlen($direccion) * strlen($cp) * strlen($estado) * strlen($ciudad);

if ($reqlen > 0) {
	# code...
	if*($pass===$pass2){
		require("php/conexion.php");
		$pass=md5($pass);
		mysql_query("INSERT into usuario VALUES('','$nombre','$apellidos','$mail','$nick','$pass','$tel','$direccion','$cp','$estado','$ciudad','$rfc')");
		mysql_close($link);
		echo "REGISTRO EXITOSO";
		

	} else{
		echo "VERIFIQUE CONTRASEÑAS";

	}


}

else{

	echo 'POR FAVOR, RELLENE TODOS LOS CAMPOS REQUERIDOS';
}

  ?>