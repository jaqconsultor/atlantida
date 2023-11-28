<?php
include('contratos/config.php');

$id=$_GET["id"];

$sqlEmpleaados = mysqli_query($conexionBD,"UPDATE contratos SET Estado='V' WHERE id='$id'");
echo json_encode(["success"=>1]);


header('Location: https://atlantidascs.com/formularios/modificar.php');

?>
