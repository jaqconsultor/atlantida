<?php
include('cabecera.php');
include('config.php');

$data = json_decode(file_get_contents("php://input"));

$id=$_GET["id"];
$st=$_GET["st"];
$ob=$_GET["obs"];

/*
if( $st == "R" ) {
	$ob	= "";
}

if( $st == "B" ) {
	$ob	= "Recibida Satisfactoriamente";
}*/

$Estado=$st;   

$sqlEmpleaados = mysqli_query($conexionBD,"UPDATE contratos SET Estado='$Estado', Estado_Observacion = '$ob' WHERE id='$id'");
echo json_encode(["success"=>1]);
exit();

?>
