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
					<li><a href="/prueba/tianguis/php/busqueda.php?search=animales">Animales y Mascotas</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=autos">Automoviles</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=belleza">Belleza y Joyeria</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=hogar">Electrodomesticos y Hogar</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=herramientas">Herramientas</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=juguetes">Juguetes</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=musica">Musica e Instrumentos</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=tecnologia">Tecnologia</a></li>
					<br>
				</ul>

			</fieldset>
			<fieldset style="border: solid 2px #00346e; border-radius: 10px">
				
				<legend>Cuenta</legend>
				<?php 
				if($_SESSION['tipo']=="administrador"){
				
				
				echo 	"<button class='accordion'> <li><a href='php/usuarios.php'>Usuarios</a></li></button>";
						

				}

				 ?>
				

<button class="accordion"><li><a href='#'>Mis Productos</a></li></button>
<div class="panel">
  <ul>
  	<li><a href="#">Compras</a></li>
  	<br>
  	<li><a href="/prueba/tianguis/php/ventas.php">Ventas</a></li>
  </ul>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
			
			</fieldset>
		</div>
		
		<div>
			<fieldset class="resientes">
				<legend>RESIENTES</legend>
				<br>
				<?php 

 
				require("php/conn.php");
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