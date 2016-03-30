<?php
session_start();
if(isset($_SESSION['usuario'])){

header('Location : plantilla.php');


}else{

}
  ?>

<div class="header">
		<p>Viva La Vida</p>
	</div>

	<div id="signup">
		<form>
			<fieldset>
				<legend>Login</legend>
				<label>Nombre</label><br>
				<input type=text name="nombre"><br>
				<label>Password</label><br>
				<input type=password name="Contra"><br>
				<input type=submit name="enviar">
			</fieldset>

		</form>
	</div>