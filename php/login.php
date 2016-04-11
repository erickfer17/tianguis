<?php
 
session_start();
if(isset($_SESSION['usuario'])){

header('Location : ../plantilla.php');


}else{

}

  ?>
<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>TIANGUIS ONLINE</title>
		<link rel="stylesheet" type="text/css" href="../plantilla.css">
		<!-- Core JavaScript/jQuery Plugins -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
	<script src="/prueba/tianguis/js/bootstrap-notify.min.js"></script>

	</head>
	<body>
		<div id="resultado"></div>
		<div class="header">
		
		<img style="width: 15%; height: 80%; margin-top: 40px; margin-left: 20px" src="../logo/2.png">
		</div>



	<div id="signup">

		<form >
			<fieldset>
				<legend>Login</legend>
				<label>Nombre</label><br>
				<input type=text  id='user' name="user" placeholder="USUARIO" required><br>
				<label>Password</label><br>
				<input type=password id='pass' name="pass" placeholder="*******" required><br>
				<button name="validar" onclick="Validar()">ENTRAR </BUTTON>
			</fieldset> 


			<script>



				function Validar(){
				var user = document.getElementById('user').value;
				var pass = document.getElementById('pass').value;
           
			if(pass == "" || user == ""){

				alert("ERROR: Campos vacios");
			}else{
							$.ajax({
								url: "validar.php",
								type: "POST",
								data: 'user='+user+'&pass='+pass,
								success: function(resp){
									if(resp== 1){

										<?php 
									if (isset($_SESSION["usuario"])){

									header("Location: ../plantilla.php");
									}

										?>
									}

									if(resp!=1){


									alert("error");

									}
									//$('#resultado').html(resp);

								}

							});
			} //finaliza else
							}

						</script>
					</form>
				</div>
