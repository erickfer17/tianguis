<?php 
	session_start();
 ?>
<!--header-->
<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>TIANGUIS ONLINE</title>
		<link rel="stylesheet" type="text/css" href="/prueba/tianguis/plantilla.css">
		<script type="text/javascript" src="/prueba/tianguis/js/jquery-latest.min.js"></script>
		<script type="text/javascript" src="/prueba/tianguis/js/carrito.js"></script>
		
	
   <script type="text/javascript" src="/prueba/tianguis/bootstrap/js/bootstrap.min.js"/></script> 
    <link href="/prueba/tianguis/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 

	</head>
	<body>
		
		<div class="header">
		<!--<a id ="join" href="php/logout.php">Cerra Sesión</a>-->
		<a href="/prueba/tianguis/plantilla.php"><img style="width: 15%; height: 80%; margin-top: 40px; margin-left: 20px" src="/prueba/tianguis/logo/2.png"></a>
		</div>
 
 	 <div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		
	
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
			  <li><a href="/prueba/tianguis/php/logout.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-----------------------------------fin header-------------------------------------->
<div style="text-align: center;">
	<h1>TU COMPRA HA SIDO CONFIRMADA</h1>
<h4>Te hemos enviado un correo con los datos de la compra</h4>
<h5>Redirigiendo página principal en 5 segundos</h5>

</div>


 <?php
 $_SESSION['contador']=0;
 echo	'<meta http-equiv="refresh" content="5; url=/prueba/tianguis/plantilla.php">';

 include ("pie.php");
 ?>