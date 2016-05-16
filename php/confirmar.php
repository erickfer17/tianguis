<?php 
session_start();
if(isset($_SESSION['usuario'])){
require ("conn.php");
$peticion="INSERT INTO pedidos values('',".$_SESSION['id'].",'".date('U')."','0')";
$resultado = mysqli_query($conexion, $peticion);

$peticion="SELECT * from pedidos WHERE idusuario='".$_SESSION['id']."' ORDER BY fecha DESC LIMIT 1";
$resultado = mysqli_query($conexion, $peticion);

while($fila=mysqli_fetch_array($resultado)){
	$_SESSION['idpedido']=$fila['id'];
}

for($i=0; $i<$_SESSION['contador'];$i++){
		
		$peticion = "INSERT INTO lineaspedido VALUES('',".$_SESSION['idpedido'].",".$_SESSION['producto'][$i].",'1')";
		$resultado = mysqli_query($conexion, $peticion);

		// RESTA EXISTENCIAS //

		$peticion = "SELECT * FROM producto WHERE id='".$_SESSION['producto'][$i]."'" ;
		$resultado = mysqli_query($conexion, $peticion);		
		while($fila=mysqli_fetch_array($resultado)){
	$existencias=$fila['existencias'];
	$peticion2 = "UPDATE producto SET existencias='".($existencias - 1)."' WHERE id='".$_SESSION['producto'][$i]."'" ;
		$resultado2 = mysqli_query($conexion, $peticion2);		
}

	}

mysqli_close($conexion);
header("Location: pedido.php");
}else
echo "ERROR INICIA SESION";
 ?>
