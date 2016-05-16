<?php
	session_start();
	 include ("head.php");
  
  ?>

	<div id="produc">
		<form method="POST" action="../registroproducto.php" enctype="multipart/form-data"/>
			<fieldset>
				<legend><h3>Subir Producto</h3></legend>
				<h4> Los campos con (*) son requeridos</h4>
				<label>*Nombre</label>
				<input type=text name="nombre"><br>
				<label>*Descripcion</label>
				<textarea cols="20" rows="10" name="descripcion"></textarea><br>
				<label>*Precio</label>
				<input type=text name="precio"><br>
				<label>*Existencias</label>
				<input type=text name="existencias"><br>
				<label>*Categoria</label>
				<select  id="text" name="categoria" placeholder="Categoria">
           				<option>Animales y Mascotas</option>
           				<option>Automoviles</option>
           				<option>Belleza y Joyeria</option>
           				<option>Electrodomesticos y Hogar</option>
           				<option>Herramientas</option>
           				<option>Juguetes</option>
           				<option>Musica e Instrumentos</option>
           				<option>Tecnologia</option>
					</select><br>
				<label>*Imagen</label>
				<input type="file" name="imagen"/>
				<br><input type=submit name="vender" value="Vender">
			</fieldset>
		</form>
		<?php 
		
		//if(isset($_POST['vender'])){

		//	require("registroproducto.php");
		//		echo	'<meta http-equiv="refresh" content="3; url=/../plantilla.php">';
		//}


		?>
	</div>

<?php include "pie.php" ?>