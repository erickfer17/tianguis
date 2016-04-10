$(document).ready(inicio)
function inicio(){
	$(".botoncompra").click(agrega)
	$("#carrito").load("/prueba/tianguis/php/poncarrito.php");
}
function agrega(){
	$("#carrito").load("/prueba/tianguis/php/poncarrito.php?p="+$(this).val());


}