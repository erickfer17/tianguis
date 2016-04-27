<?php 
session_start();

$_SESSION['contador']=0;
if (isset($_SESSION["usuario"])){

						header("Location: /prueba/tianguis/plantilla.php");
						}
/*session_destroy();
session_start();

$_SESSION['usuario']=0;
*/

 ?> 