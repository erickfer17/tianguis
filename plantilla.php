<?php

session_start();
echo "Inicia Sesion";
if(!isset($_SESSION['contador'])){
		$_SESSION['contador']=0;
	}
if(isset($_SESSION['usuario'])){

 include ("php/head.php"); 
?>




<div class="category">
			<fieldset style="border: solid 2px #00346e; border-radius: 10px">
				<legend>Categorias</legend>
				<ul>
				<br>
					<li><a href="">Animales y Mascotas</a></li>
					<br>
					<li><a href="">Automoviles</a></li>
					<br>
					<li><a href="">Belleza y Joyeria</a></li>
					<br>
					<li><a href="">Electrodomesticos y Hogar</a></li>
					<br>
					<li><a href="">Herramientas</a></li>
					<br>
					<li><a href="">Juguetes</a></li>
					<br>
					<li><a href="">Musica e Instrumentos</a></li>
					<br>
					<li><a href="">Tecnologia</a></li>
					<br>
				</ul>

			</fieldset>
		</div>

		<div>
			<fieldset class="resientes">
				<legend>RESIENTES</legend>
				<br>
				<?php 

 
				$conexion = mysqli_connect("localhost","Erick","0217","tienda");
				mysqli_set_charset($conexion, "utf8");
				$peticion = "SELECT * FROM producto";
				$resultado = mysqli_query($conexion, $peticion);
				while($fila = mysqli_fetch_array($resultado)) {
					echo "<article>";
					echo "<a href='php/producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
					echo "<p>".$fila['descripcion']."</p>";
					echo "<p>Precio: ".$fila['precio']." $</p>";

					//perdir imagenes
					$peticionimg = "SELECT * FROM  imagenes WHERE idproducto=".$fila['id']." LIMIT 1";
					$resultadoimg = mysqli_query($conexion, $peticionimg);
					while($filaimg = mysqli_fetch_array($resultadoimg)) {
						echo "<img src='images/".$filaimg['imagen']."'width=400px>";
					}
					echo "<br>";
					echo "<a href='php/producto.php?id=".$fila['id']."'><button>Detalles</button></a>";
					echo "<button value='".$fila['id']."' class='botoncompra'>Comprar ahora</button>";
					echo "</article>";					
					
				} 
				mysqli_close($conexion);
				?>

			

			</fieldset>
		</div>  

<?php include ("php/pie.php");
	}
	else{
		header('Location : php/login.php');
	}
 ?>