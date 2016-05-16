<?php
session_start();
extract($_POST);
echo $categoria;
$reqlen = strlen($nombre) * strlen($descripcion) * strlen($precio) * strlen($existencias);

if ($reqlen > 0) {
	# code...
	$ruta="images";
$archivo=$_FILES['imagen']['tmp_name'];
$nombrearchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo, $ruta."/".$nombrearchivo);
$ruta=$ruta."/".$nombrearchivo;
		require("php/conexion.php");
		

		mysql_query("INSERT into producto VALUES('','".$_SESSION['id']."','$nombre','$descripcion','$precio','$existencias','$categoria',1,'".date('U')."')");
		mysql_close($link);
		require ("php/conn.php");
		$_SESSION['id'];
	 $peticion = "SELECT * from producto where idvendedor='".$_SESSION['id']."' ORDER BY fecha DESC LIMIT 1 " ;
		$resultado = mysqli_query($conexion, $peticion);
		
		while($fila = mysqli_fetch_array($resultado)) {
					
				$idp=$fila['id'];
				

				}
				$peticion2 = "INSERT into imagenes VALUES('','".$idp."','".$nombrearchivo."','".$nombrearchivo."')";
		$resultado2 = mysqli_query($conexion, $peticion2);
				mysqli_close($conexion);
		

		echo "REGISTRO EXITOSO";
		$nombre='';
		$descripcion='';
		$precio='';
		$categoria='';
		$existencias='';
		$imagen='';
		$ruta='';
	
	 echo	'<meta http-equiv="refresh" content="2; url=/prueba/tianguis/plantilla.php">';


}

else{

	echo "POR FAVOR, RELLENE TODOS LOS CAMPOS REQUERIDOS";
}

  ?>