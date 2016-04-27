<?php 




session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];


$mysql= new mysqli('localhost','Erick','0217','tienda');
 
include ("clases.php"); 

$opera = new validar($user,$pass,$mysql);
$opera->validacion();
	
?>