<?php
include('cabecera.php');
include('config.php');


$data = json_decode(file_get_contents("php://input"));

$id=$_GET["id"];
$nombre=$data->nombre;

$Nacionalidad_Titular=$data->Nacionalidad_Titular;   
$Cedula_Titular=$data->Cedula_Titular;   
$Nombre_TItular_Beneficiario=$data->Nombre_TItular_Beneficiario;   
$Apellido_TItular_Beneficiario=$data->Apellido_TItular_Beneficiario;   
$Estado_Civil=$data->Estado_Civil;   
$Sexo_Titular_Beneficiario=$data->Sexo_Titular_Beneficiario;   
$Fecha_Nacimiento_Titular_Beneficiario=$data->Fecha_Nacimiento_Titular_Beneficiario;   
$Parentesco=$data->Parentesco;   
$Nombre_Agente_Recaudador=$data->Nombre_Agente_Recaudador;   
$Tipo_de_Cuenta=$data->Tipo_de_Cuenta;   
$Numero_de_Cuenta=$data->Numero_de_Cuenta;   
$Tipo_de_Vencimiento=$data->Tipo_de_Vencimiento;   
$Codigo_Empresa=$data->Codigo_Empresa;   
$Codigo_Sucursal=$data->Codigo_Sucursal;   
$Numero_de_Telefono=$data->Numero_de_Telefono;   
$Correo_Electronico=$data->Correo_Electronico;   
$Codigo_Cia_Seguro=$data->Codigo_Cia_Seguro;   
$Codigo_Plan_en_SISER=$data->Codigo_Plan_en_SISER;   
$Codigo_Productor_Asesor=$data->Codigo_Productor_Asesor;   
$Estado=$data->Estado;   
$Estado_Observacion=$data->Estado_Observacion; 


$sqlEmpleaados = mysqli_query($conexionBD,"UPDATE contratos SET nombre='$nombre' WHERE id='$id'");
echo json_encode(["success"=>1]);
exit();

?>
