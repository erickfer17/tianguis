<!DOCTYPE html>
<html>

<?php include "php/head.php"
	
 ?>

	<div id="signup">
		<form method="POST" action="" />
			<fieldset>
				<legend><h3>Login</h3></legend>
				<h4> Los campos con (*) son requeridos</h4>
				<label>*Nombre</label><br>
				<input type=text name="nombre"><br>
				<label>*Apellidos</label><br>
				<input type=text name="apellidos"><br>
				<label>*Nick</label><br>
				<input type=text name="nick"><br>
				<label>*Correo Electronico</label><br>
				<input type=text name="mail"><br>
				<label>*Contraseña</label><br>
				<input type=password name="pass"><br>
				<label>*Repite Contraseña</label><br>
				<input type=password name="pass2"><br>
				<label>*Telefono</label><br>
				<input type=text name="tel"><br>
				<label>*Direccion</label><br>
				<input type=text name="direccion"><br>
				<label>*Codigo Postal</label><br>
				<input type=text name="cp"><br>
				<label>*Estado</label><br>
				<input type=text name="estado"><br>
				<label>*Ciudad</label><br>
				<input type=text name="ciudad"><br>
				<label>RFC</label><br>
				<input type=text name="rfc"><br>
				<br><input type=submit name="registrar" value="Registrate">
			</fieldset>
		</form>
		<?php 
		if(isset($_POST['submit'])){
			require("php/registro.php");
		}


		?>
	</div>

<?php include "php/pie.php" ?>