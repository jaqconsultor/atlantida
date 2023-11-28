<?php
include('cabecera.php');
include('config.php');

    $data = json_decode(file_get_contents("php://input"));
    $nombre=$_POST['Cedula_Titular'];
if($nombre!=""){

/*
    R - Reistrada  : Planilla registrada en la pagina de formularios/
    V - Verificada : Planilla Verificada en la pagina de formularios/
    B - Recibida   : Planilla Recibida  por Siser / Contrato generado
    H - Rechazada  : Planilla Rechazada por Siser (Ver Observación)
    E - En Proceso : Contrato en Proceso de Cobranza de su primera Cuota por Siser y la Banca
    P - Procesada  : Contrato ya Procesado su primera Cuota por Siser y la Banca (Se Genera el pago de la comisión)
*/

    $Nacionalidad_Titular=$_POST['Nacionalidad_Titular'];   
    $Cedula_Titular=$_POST['Cedula_Titular'];   
    $Nombre_TItular_Beneficiario=$_POST['Nombre_TItular_Beneficiario'];   
    $Apellido_TItular_Beneficiario=$_POST['Apellido_TItular_Beneficiario'];   
    $Estado_Civil=$_POST['Estado_Civil'];   
    $Sexo_Titular_Beneficiario=$_POST['Sexo_Titular_Beneficiario'];   
    $Fecha_Nacimiento_Titular_Beneficiario=$_POST['Fecha_Nacimiento_Titular_Beneficiario'];   
    $Parentesco=$_POST['Parentesco'];   
    $Nombre_Agente_Recaudador=$_POST['Nombre_Agente_Recaudador'];   
    $Tipo_de_Cuenta=$_POST['Tipo_de_Cuenta'];   
    $Numero_de_Cuenta=$_POST['Numero_de_Cuenta'];   
    $Tipo_de_Vencimiento=$_POST['Tipo_de_Vencimiento'];   
    $Codigo_Empresa=$_POST['Codigo_Empresa'];   
    $Codigo_Sucursal=$_POST['Codigo_Sucursal'];   
    $Numero_de_Telefono=$_POST['Numero_de_Telefono'];   
    $Correo_Electronico=$_POST['Correo_Electronico'];   
    $Codigo_Cia_Seguro=$_POST['Codigo_Cia_Seguro'];   
    $Codigo_Plan_en_SISER=$_POST['Codigo_Plan_en_SISER'];   
    $Codigo_Productor_Asesor=$_POST['Codigo_Productor_Asesor'];   
//    $Estado=$_POST['Estado'];   
    $Estado="R";   
    $Estado_Observacion=$_POST['Estado_Observacion']; 

    $sql = "";
    $sql = $sql . "INSERT INTO contratos "; 
    $sql = $sql . " ( ";
        $sql = $sql . " Nacionalidad_Titular,   ";
        $sql = $sql . " Cedula_Titular,   ";
        $sql = $sql . " Nombre_TItular_Beneficiario,   ";
        $sql = $sql . " Apellido_TItular_Beneficiario,  "; 
        $sql = $sql . " Estado_Civil,   ";
        $sql = $sql . " Sexo_Titular_Beneficiario,   ";
        $sql = $sql . " Fecha_Nacimiento_Titular_Beneficiario,   ";
        $sql = $sql . " Parentesco,   ";
        $sql = $sql . " Nombre_Agente_Recaudador,   ";
        $sql = $sql . " Tipo_de_Cuenta,   ";
        $sql = $sql . " Numero_de_Cuenta,   ";
        $sql = $sql . " Tipo_de_Vencimiento,  "; 
        $sql = $sql . " Codigo_Empresa,   ";
        $sql = $sql . " Codigo_Sucursal,   ";
        $sql = $sql . " Numero_de_Telefono,  "; 
        $sql = $sql . " Correo_Electronico,   ";
        $sql = $sql . " Codigo_Cia_Seguro,   ";
        $sql = $sql . " Codigo_Plan_en_SISER,  "; 
        $sql = $sql . " Codigo_Productor_Asesor, ";  
        $sql = $sql . " Estado,   ";
        $sql = $sql . " Estado_Observacion )  ";
        $sql = $sql . " VALUES ( ";
        $sql = $sql . " '$Nacionalidad_Titular',    ";
        $sql = $sql . " '$Cedula_Titular',    ";
        $sql = $sql . " '$Nombre_TItular_Beneficiario',    ";
        $sql = $sql . " '$Apellido_TItular_Beneficiario',    ";
        $sql = $sql . " '$Estado_Civil',   "; 
        $sql = $sql . " '$Sexo_Titular_Beneficiario',    ";
        $sql = $sql . " '$Fecha_Nacimiento_Titular_Beneficiario',    ";
        $sql = $sql . " '$Parentesco',    ";
        $sql = $sql . " '$Nombre_Agente_Recaudador',    ";
        $sql = $sql . " '$Tipo_de_Cuenta',    ";
        $sql = $sql . " '$Numero_de_Cuenta',    ";
        $sql = $sql . " '$Tipo_de_Vencimiento',    ";
        $sql = $sql . " '$Codigo_Empresa',    ";
        $sql = $sql . " '$Codigo_Sucursal',    ";
        $sql = $sql . " '$Numero_de_Telefono',    ";
        $sql = $sql . " '$Correo_Electronico',    ";
        $sql = $sql . " '$Codigo_Cia_Seguro',    ";
        $sql = $sql . " '$Codigo_Plan_en_SISER',    ";
        $sql = $sql . " '$Codigo_Productor_Asesor',    ";
        $sql = $sql . " '$Estado',    ";
        $sql = $sql . " '$Estado_Observacion' ";
        $sql = $sql . " )";

if($Nombre_TItular_Beneficiario!=""){
    $sqlEmpleaados = mysqli_query($conexionBD, $sql );
		echo json_encode(["success"=>1]);
    } else {
		echo json_encode(["success"=>0]);
	}

}

header('Location: ../pagina.php');

?>
