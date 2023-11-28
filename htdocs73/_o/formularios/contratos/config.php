<?php
// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost:8189"; 
//$servidor = "localhost"; 
$usuario = "pagoinsi_contratos"; 
$contrasenia = "pagoinsi_contratos"; 
$nombreBaseDatos = "pagoinsi_contratos";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);
?>
