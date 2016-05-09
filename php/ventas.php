<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['usuario']) {
	
}
?>


	<?php
	include ("head.php");
	?>


  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
		
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->

</div>
<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Mis Productos</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Ventas</h4>
		<div class="row-fluid">
		


					<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Close</button>
                   
                </div>
                <div class="ct">
              
                </div>

            </div>
        </div>
    </div>
<!---fin modal -->


			<?php

				require("conexion.php");
				$sql=("SELECT usuario.nombre,apellidos,usuario,producto.id , producto.nombre,descripcion,precio,existencias,categoria,activo FROM producto INNER JOIN usuario ON producto.idvendedor = usuario.id and producto.idvendedor='".$_SESSION['id']."'");
				$query=mysql_query($sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Nombre</td>";
						echo "<td>Apellido</td>";
						echo "<td>Usuario</td>";
						echo "<td>Id Producto</td>";
						echo "<td>Producto</td>";
						echo "<td>Descripcion</td>";
						echo "<td>Precio</td>";
						echo "<td>Existencias</td>";
						echo "<td>Categoria</td>";
						echo "<td>Estado de Producto</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
				    	echo "<td>$arreglo[6]</td>";
				    	echo "<td>$arreglo[7]</td>";
				    	echo "<td>$arreglo[8]</td>";
				    	echo "<td>$arreglo[9]</td>";

				    	echo "<td><a data-toggle='modal' data-target='#exampleModal' data-whatever=".$arreglo[0]."><img src='../images/actualizar.gif' class='img-rounded'></a></td>";
						echo "<td><a href='usuarios.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					include ("clases.php");
					$opera = new elimina(@$id,@$idborrar);
					$opera->eliminar();

			?>

			    <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;
            $.ajax({
                type: "GET",
                url: "actualizar.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    })
    </script>


		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		





		
		
		</div>

		
</div>

	</div>
</div>

		<?php include('pie.php') ?>

	</body>
</html>