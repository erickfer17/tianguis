<?php 
	
 

$mysqli = new mysqli("localhost","Erick","0217","tienda");

if(mysqli_connect_errno()){
    printf("fallo la conexion: %s \n", mysqli_connect_error());
    exit();
}


$consulta="Select * from usuario";
$resultado= $mysqli ->query($consulta);
   include "php/head.php";
echo   "<table border = 1>
<tr>
<td>ID</td>
<td>Nombre</td>
<td>apellidos</td>
<td>Email</td>
<td>usuario</td>
<td>Contraseña</td>
<td>telefono</td>
<td>direccion</td>
<td>Codigo postal</td> 
<td>estado</td>
<td>ciudad</td>
<td>rfc</td> 
</tr>";
    
    while ($fila = $resultado ->fetch_row()){
     
        
        
    
        echo "<tr><td>".$fila[0]."</td><td> ".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td><td>".$fila[7]."</td><td>".$fila[8]."</td><td>".$fila[9]."</td><td>".$fila[10]."</td><td>".$fila[11]."</td></tr>";
  
    }

echo "</table>";
?>


<input type=submit name="modificar" value="modificar">

<input type=submit name="eliminar" value="eliminar">


<?php include "php/pie.php";
	
 ?>