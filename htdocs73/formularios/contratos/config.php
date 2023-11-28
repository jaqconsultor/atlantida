<?php
// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost:8189"; 
//$servidor = "localhost"; 
$usuario = "aulascur_atla"; 
$contrasenia = "aulascur_atla"; 
$nombreBaseDatos = "aulascur_atla";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);
?>
