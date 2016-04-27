<?php

 
/**
* 
*/
class elimina
{
	private $idborrar;
	private $id;
	function __construct($id,$idborrar)
	{	$this->idborrar=$idborrar;
		$this->id=$id;
	}
	public function eliminar(){

		if($this->idborrar==2){
		
						$sqlborrar="DELETE FROM usuario WHERE id='".$this->id."'";
						$resborrar=mysql_query($sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						
						echo "<script>location.href='usuarios.php'</script>";
					}

	}
}




class actualiza
{
	private $id;
	private $nombre;
	private $apellido;
	private $correo;
	private $usuario;
	private $contrasena;
	private $telefono;
	private $direccion;
	private $cp;
	private $estado;
	private $ciudad;
	private $rfc;
	private $tipo;

	function __construct($id, $nombre, $apellido, $correo, $usuario, $contrasena, $telefono, $direccion, $cp, $estado, $ciudad, $rfc, $tipo)
	{
		$this->id=$id;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->correo=$correo;
		$this->usuario=$usuario;
		$this->contrasena=$contrasena;
		$this->telefono= $telefono;
		$this->direccion=$direccion;
		$this->cp=$cp;
		$this->estado=$estado;
		$this->ciudad=$ciudad;
		$this->rfc=$rfc;
		$this->tipo=$tipo;
		
	}
		public function actualizar(){

			require("conexion.php");
	$sentencia="update usuario set nombre='".$this->nombre."', apellidos='".$this->apellido."', email='".$this->correo."', usuario='".$this->usuario."',contrasena='".$this->contrasena."',telefono='".$this->telefono."', direccion='".$this->direccion."',cp='".$this->cp."',estado='".$this->estado."',ciudad='".$this->ciudad."',rfc='".$this->rfc."',tipo='".$this->tipo."' where id='".$this->id."'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='usuarios.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='usuarios.php'</script>";

		
	}


		}
	

}


class validar
{
	private $mysqli;
	private $usu;
	private $contra;
	function __construct($usu,$contra,$mysqli)
	{
		$this->usu=$usu;
		$this->contra=$contra;
		$this->con=$mysqli;
	}
	public function validacion(){
		if (isset($this->usu) && isset($this->contra)) {


	# code...
	//echo $consulta=mysqli_query($con,'Select usuario, contrasena from usuario WHERE usuario="$user" AND contrasena="$pass"');



$query = "Select usuario, contrasena from usuario WHERE usuario='".$this->usu."' AND contrasena='".md5($this->contra)."'";
$result = $this->con->query($query) or die ($this->con->error);
$row = mysqli_fetch_array($result);
$query2="Select tipo from usuario WHERE usuario='".$this->usu."'";
$result2 = $this->con->query($query2) or die ($this->con->error);
$row2 = mysqli_fetch_array($result2);




if (mysqli_num_rows($result)>0) {
	$_SESSION['tipo']=$row2['tipo'];

	$_SESSION['usuario'] = $this->usu;
echo "1";	
//header('Location: /prueba/tianguis/plantilla.php');
}else{

	echo "2";

}

	
}else

{


}
	}

}

?>