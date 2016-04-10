<?php 
$mysqli= new mysqli('localhost','Erick','0217','tienda');

session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
if (isset($user) && isset($pass)) {


	# code...
	//echo $consulta=mysqli_query($con,'Select usuario, contrasena from usuario WHERE usuario="$user" AND contrasena="$pass"');
 $query = "Select usuario, contrasena from usuario WHERE usuario='".$user."' AND contrasena='".md5($pass)."'";
$result = $mysqli->query($query) or die ($mysqli->error);
$row = mysqli_fetch_array($result);





if (mysqli_num_rows($result)>0) {

	$_SESSION['usuario'] = $user;
echo "1";	
//header('Location: /prueba/tianguis/plantilla.php');
}else{

	echo "2";

}

	
}else

{


}
?>