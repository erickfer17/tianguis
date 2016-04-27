<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?>		
<html lang="en">

	<?php
	include("cabecera.php");
	?>


  <!-- Navbar
    ================================================== -->


<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("conexion.php");

		$sql="SELECT * FROM usuario WHERE id='".$id."'";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
		    	$apellido=$row[2];
		    	$correo=$row[3];
		    	$usuario=$row[4];
		    	$contrasena=$row[5];
		    	$telefono=$row[6];
		    	$direccion=$row[7];
		    	$cp=$row[8];
		    	$estado=$row[9];
		    	$ciudad=$row[10];
		    	$rfc=$row[11];
		    	$tipo=$row[12];

		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id?>" readonly="readonly"><br>
				Nombre<br> <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
				Apellido<br> <input type="text" name="apellido" value="<?php echo $apellido?>"><br>
				Correo<br> <input type="text" name="correo" value="<?php echo $correo?>"><br>
				Usuario<br> <input type="text" name="usuario" value="<?php echo $usuario?>"><br>
				Contraseña<br> <input type="text" name="contrasena" value="<?php echo $contrasena?>"><br>
				Telefono<br> <input type="text" name="telefono" value="<?php echo $telefono?>"><br>
				Direccion<br> <input type="text" name="direccion" value="<?php echo $direccion?>"><br>
				Codigo Postal<br> <input type="text" name="cp" value="<?php echo $cp?>"><br>
				Estado<br> <input type="text" name="estado" value="<?php echo $estado?>"><br>
				Ciudad<br> <input type="text" name="ciudad" value="<?php echo $ciudad?>"><br>
				RFC<br> <input type="text" name="rfc" value="<?php echo $rfc?>"><br>
				Tipo<br> <input type="text" name="tipo" value="<?php echo $tipo?>"><br>


				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>

 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


