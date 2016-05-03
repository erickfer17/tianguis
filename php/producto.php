<?php 
session_start();
	include( "head.php");


 	$conexion = mysqli_connect("localhost","Erick","0217","tienda");
				mysqli_set_charset($conexion, "utf8");
				$peticion = "SELECT * FROM producto WHERE id=".$_GET['id']." LIMIT 1";
				$resultado = mysqli_query($conexion, $peticion);
				while($fila = mysqli_fetch_array($resultado)) {
					echo "<article>";
					echo "<a href='php/producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
					echo "<p>".$fila['descripcion']."</p>";
					echo "<p>Precio: ".$fila['precio']." $</p>";

					//perdir imagenes
					$peticionimg = "SELECT * FROM  imagenes WHERE idproducto=".$fila['id']." ";
					$resultadoimg = mysqli_query($conexion, $peticionimg);
					while($filaimg = mysqli_fetch_array($resultadoimg)) {
						echo "<img src='/prueba/tianguis/images/".$filaimg['imagen']."'width=400px>";
					}
					echo "<br>";
					echo "<a href='php/producto.php?id=".$fila['id']."'><button>Detalles</button></a>";
					echo "<button>Comprar ahora</button>";
					echo "</article>";					
					
				} 
				mysqli_close($conexion);

				include ("pie.php");
				?>