<?php 
session_start();
session_destroy();
session_start();

$_SESSION['usuario']=0;
if (isset($_SESSION["usuario"])){

						header("Location: /prueba/tianguis/plantilla.php");
						}

 ?> 