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
	
 	<div id="car">
 		<div id="carrito">
 		carrito
 		</div> 
 		<a href="/prueba/tianguis/php/vaciar.php"><button>Vaciar carrito</button></a> 
 			<a href="/prueba/tianguis/php/confirmar.php"><button>Confirmar Compra</button></a>
 		</div>
 		</div>


<div class="category" style="margin-top: 160px">

			<fieldset style="border: solid 2px #00346e; border-radius: 10px">
				<legend>Categorias</legend>
				<ul>
				<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=animales&fil=0">Animales y Mascotas</a></li>

					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=autos&fil=0">Automoviles</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=belleza&fil=0">Belleza y Joyeria</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=hogar&fil=0">Electrodomesticos y Hogar</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=herramientas&fil=0">Herramientas</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=juguetes&fil=0">Juguetes</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=musica&fil=0">Musica e Instrumentos</a></li>
					<br>
					<li><a href="/prueba/tianguis/php/busqueda.php?search=tecnologia&fil=0">Tecnologia</a></li>
					<br>
				</ul>

			</fieldset>
			<fieldset style="border: solid 2px #00346e; border-radius: 10px">
				
				<legend>Cuenta</legend>
				<?php 
				if($_SESSION['tipo']=="administrador"){
				
				
				echo 	"<button class='accordion'> <li><a href='php/usuarios.php'>Usuarios</a></li></button>";
				echo 	"<button class='accordion'> <li><a href='php/grafica.php'>Relacion Usuarios-Productos</a></li></button>";
				echo "<button class='accordion'><li><a href='#''>Reportes</a></li></button>
					<div class='panel'>
  					<ul>
  					<li><a href='/prueba/tianguis/admin/pedidos.php'>Pedidos</a></li>
  					<br>
  					<li><a href='/prueba/tianguis/php/rventas.php'>Productos</a></li>
  					</ul>
					</div>";

				}

				 ?>
				

<button class="accordion"><li><a href='#'>Mis Productos</a></li></button>
<div class="panel">
  <ul>
  	<li><a href="/prueba/tianguis/php/mcompras.php">Compras</a></li>
  	<br>
  	<li><a href="/prueba/tianguis/php/ventas.php">Ventas</a></li><br>
  	<li><a href="/prueba/tianguis/php/subir.php">Vende Algo</a></li>
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
				$peticion = "SELECT * FROM producto WHERE existencias > 0";
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