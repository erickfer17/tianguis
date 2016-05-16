<!DOCTYPE html>
<?php
session_start();

	

	
	include ("/../php/head.php");
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
		<h2> Administrador</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Pedidos</h4>
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



	<div class="category">
			<fieldset>
			<legend>Filtros</legend>
					<form name='filtrar' method='post' action='pedidos.php?filtro=0' id='srch'>
					<label>Nombre Usuario</label>
					<input type="text" name="us" id="usu"></input>
					<select  id="text" name="estado" placeholder="Estado" value="<?php echo $estado?>">
           				<option value="" style="background-color:#036; font-weight:bold; color:#FFF; text-align:center;" >Estado del Pedido</option>
           				<option value="" style="background-color:red; font-weight:bold; color:#FFF; text-align:center;" >Pendiente</option>
           				<option value="" style="background-color:green; font-weight:bold; color:#FFF; text-align:center;" >Entregado</option>
					</select><br>
					<input type="submit" name="submt" value="Buscar"></input>

				</form>

			</fieldset>
			
				</div>


<div style="display: inline-block; position: relative; margin-left: 60%">
		
			<?php
				extract($_POST);
				extract($_GET);
				
				require("/../php/conexion.php");
				$sql=("SELECT pedidos.id,usuario, pedidos.fecha,pedidos.estado from usuario, pedidos where pedidos.idusuario=usuario.id ORDER BY estado DESC, pedidos.fecha ASC");
				
				if(isset($filtro)){
					
				if($estado=='Pendiente'){
						$stado=0;

				}elseif ($estado='Entregado') {
					$stado=1;
				}else{
					$stado='';
				}
				
				switch ($filtro) {
					case 0:
					$sql=("SELECT pedidos.id,usuario, pedidos.fecha,pedidos.estado from usuario, pedidos where pedidos.idusuario=usuario.id and(usuario='".$us."' or pedidos.estado=".$stado.") ORDER BY estado DESC, pedidos.fecha ASC");
						break;
					
					default:
						# code...
						break;
				}
					}
				$query=mysql_query($sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id Pedido</td>";
						echo "<td>Usuario</td>";
						echo "<td>Fecha</td>";
						echo "<td>Estado</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				 	$estado=$arreglo['estado'];
				 	if($estado == 0){
				 		$diestado='Pendiente';

				 	}else{
				 		$diestado='Entregado';
				 	}
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>".date('M d Y H:i:s',$arreglo[2])."</td>";
				    	echo "<td>$diestado</td>";

				    	echo "<td><a data-toggle='modal' data-target='#exampleModal' data-whatever=".$arreglo[0]."><img src='../images/actualizar.gif' class='img-rounded'></a></td>";
						echo "<td><a href='usuarios.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					include ("/../php/clases.php");
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

</div>
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		





		
		
		</div>

		
</div>

	</div>
</div>







		<?php include('/../php/pie.php'); ?>
