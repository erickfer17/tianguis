<?php include "php/head.php" ?>




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
					echo "<h3>".$fila['nombre']."</h3>";
					echo "<p>".$fila['descripcion']."</p>";
					echo "<p>".$fila['precio']." $</p>";

					//perdir imagenes
					$peticionimg = "SELECT * FROM ";
					echo "</article>";					
					
				} 
				mysqli_close($conexion);
				?>

			

			</fieldset>
		</div>  

<?php include "php/pie.php" ?>