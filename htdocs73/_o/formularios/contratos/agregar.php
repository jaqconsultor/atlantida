<?php
include('cabecera.php');
include('config.php');

    $data = json_decode(file_get_contents("php://input"));
    $nombre=$data->Nombre_TItular_Beneficiario;
if($nombre!=""){

/*
    R - Reistrada  : Planilla registrada en la pagina de https://atlantidascs.com/formularios/
    V - Verificada : Planilla Verificada en la pagina de https://atlantidascs.com/formularios/
    B - Recibida   : Planilla Recibida  por Siser / Contrato generado
    H - Rechazada  : Planilla Rechazada por Siser (Ver Observación)
    E - En Proceso : Contrato en Proceso de Cobranza de su primera Cuota por Siser y la Banca
    P - Procesada  : Contrato ya Procesado su primera Cuota por Siser y la Banca (Se Genera el pago de la comisión)
*/
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
//    $Estado=$data->Estado;   
    $Estado="R";   
    $Estado_Observacion=$data->Estado_Observacion; 

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
    exit();
}
?>
