<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?>		
<html lang="en">



	
		


		
		
<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
			
		<div style="height: 300px" class="well well-small">
		
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		extract($_POST);
		require("conexion.php");
		
		$sql="SELECT * FROM pedidos WHERE id='".$id."' and idusuario='".$_SESSION['id']."'";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$estado=$row['3'];
		    }

		    if($estado==0){
		    	$diestado='Pendiente';
		    	echo "<form action='admin.php' method='post'>
				Id<br><input type='text' name='id'value= '".$id."' readonly='readonly'><br>
				Estado<br> <input type='text' name='estado' value='".$diestado."'><br>
		
				<input type='submit' value='Confirmar' class='btn btn-success btn-primary'>
			</form>";

		    }else{
		    	$diestado='Entregado';

		    	echo "<h3>Tu pedido ha sido marcado como entregado</h3>";
		    }


		?>

		
				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		



		
		
		</div>

		

	</style>
  </body>
</html>


