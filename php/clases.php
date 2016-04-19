<?php  
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





if (mysqli_num_rows($result)>0) {

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