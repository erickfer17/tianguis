
<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>TIANGUIS ONLINE</title>
		<link rel="stylesheet" type="text/css" href="/prueba/tianguis/plantilla.css">
		<script type="text/javascript" src="/prueba/tianguis/js/jquery1.12.3.js"></script>
		<script type="text/javascript" src="/prueba/tianguis/js/carrito.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	
   
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
 	<div id="car">
 		<div id="carrito" style="background: white; color: black">
 		carrito
 		</div> 
 		<a href="/prueba/tianguis/php/vaciar.php"><button>Vaciar carrito</button></a> 
 			<a href="/prueba/tianguis/php/confirmar.php"><button>Confirmar Compra</button></a>
 
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