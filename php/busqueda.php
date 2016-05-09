<?php
session_start();

include ("head.php");
extract($_POST);
 				extract($_GET);
 				

  ?>


  <div class="category">

			<fieldset style="border: solid 2px #00346e; border-radius: 10px">
				<legend>Filtros</legend>
				<form name="filtrar" method="post" action="/prueba/tianguis/php/busqueda.php?search=filtro" id="srch">
				<label>Precio</label>

			<input  name="precio" type="text" id="cost"><br>
			<input  type=submit name="buscar" value="Buscar">

		</form>
			
			</fieldset>

</div>


			



<div>
			<fieldset class="resientes">

				<legend>RESIENTES</legend>
				<br>
				<?php 
				
				require("conn.php");
				switch ($search) {
					case 'buscar':
							
						$peticion = "SELECT * FROM producto WHERE nombre like'%".$busca."%' " ;
						$_SESSION['producto']=$busca;
						
						break;
					case 'animales':
						$peticion = "SELECT * FROM producto WHERE categoria ='Animales y Mascotas' " ;
						$_SESSION['categoria']='Animales y Mascotas';
						break;

					case 'autos':
						$peticion = "SELECT * FROM producto WHERE categoria ='Automoviles' " ;
						$_SESSION['categoria']='Automoviles';
						break;


					case 'belleza':
					$peticion = "SELECT * FROM producto WHERE categoria ='Belleza y Joyeria' " ;
						# code...
						$_SESSION['categoria']='Belleza y Joyeria';
						break;

						case 'hogar':

							$peticion = "SELECT * FROM producto WHERE categoria ='Electrodomesticos y Hogar' " ;
							$_SESSION['categoria']='Electrodomesticos y Hogar';
							# code...
							break;

							case 'herramientas':
							$peticion = "SELECT * FROM producto WHERE categoria ='Herramientas' " ;
							$_SESSION['categoria']='Herramientas';
								# code...
								break;

								case 'juguetes':
								$peticion = "SELECT * FROM producto WHERE categoria ='Juguetes' " ;
								$_SESSION['categoria']='Juguetes';
									# code...
									break;

									case 'musica':
									$peticion = "SELECT * FROM producto WHERE categoria ='Musica e Instrumentos' " ;
										$_SESSION['categoria']='Musica e Instrumentos';

										# code...
										break;

										case 'tegnologia':
											# code...
										$peticion = "SELECT * FROM producto WHERE categoria ='Tecnologia' " ;

											$_SESSION['categoria']='Tecnologia';										

										

											break;

											echo $_SESSION['producto'];
 			
										case 'filtro':
											
									
 												if (isset($_SESSION['producto'])) {
 													# code...
												$peticion = "SELECT * FROM producto WHERE nombre LIKE '%".$_SESSION['producto']."%' and precio <= ".$precio."" ;
												unset($_SESSION['producto']);
										
 												}
												if (isset($_SESSION['categoria'])) {
												# code...
												$peticion = "SELECT * FROM producto WHERE categoria='".$_SESSION['categoria']."' and precio<= ".$precio."" ;
												unset($_SESSION['categoria']);

											}

											break;
					default:
						# code...
						break;
				}

				$resultado = mysqli_query($conexion, $peticion);
				while($fila = mysqli_fetch_array($resultado)) {
					echo "<article>";
					echo "<a href='producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
					echo "<p>".$fila['descripcion']."</p>";
					echo "<p>Precio: ".$fila['precio']." $</p>";

					//perdir imagenes
					$peticionimg = "SELECT * FROM  imagenes WHERE idproducto=".$fila['id']." LIMIT 1";
					$resultadoimg = mysqli_query($conexion, $peticionimg);
					while($filaimg = mysqli_fetch_array($resultadoimg)) {
						echo "<img src='../images/".$filaimg['imagen']."'width=400px>";
					}
					echo "<br>";
					echo "<a href='/prueba/tiaguis/php/producto.php?id=".$fila['id']."'><button>Detalles</button></a>";
					echo "<button value='".$fila['id']."' class='botoncompra'>Comprar ahora</button>";
					echo "</article>";					
					
				} 
				mysqli_close($conexion);
				?>

			</fieldset>
		</div>  