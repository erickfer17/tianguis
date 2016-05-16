<?php 

 class Conexion{
         function con(){
              global $mysqli;	
 $mysqli = new mysqli("localhost", "Erick", "0217", "tienda");
         
     /* comprobar la conexión */
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
return $mysqli;

     } 
             
         }

 ?>


