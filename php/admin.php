<?php

session_start();
extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
			require("conexion.php");
		echo $id;
	$sentencia="update pedidos set estado=1 where id='".$id."'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: mcompras.php");
		
		echo "<script>location.href='mcompras.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='mcompras.php'</script>";

		
	}
?>