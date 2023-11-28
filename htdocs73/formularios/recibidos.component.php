  <div class="card">
    <div class="card-header alert alert-primary">
      Formularios Recibidos
    </div>
    <div class="card-body">
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Emp/Suc/Asesor</th>
                <th>Plan</th>
                <th>Titular</th>
                <th>Accion</th>
            </tr>
        </thead>

<?php
$sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM contratos where Estado='B'");
if(mysqli_num_rows($sqlEmpleaados) > 0){
    $empleaados = mysqli_fetch_all($sqlEmpleaados,MYSQLI_ASSOC);
	?>
        <tbody>
	
	
	<?php
	foreach($empleaados as $service){
		echo "<tr>";
		echo "<td>" . $service["Codigo_Empresa"] . " " . $service["Codigo_Sucursal"] . " " .  $service["Codigo_Productor_Asesor"] . " " . "</td>";
		echo "<td>" . $service["Codigo_Plan_en_SISER"] . "</td>";
		echo "<td>" . $service["Nacionalidad_Titular"] . " " . $service["Cedula_Titular"] . " " . $service["Nombre_TItular_Beneficiario"] . " "  . $service["Apellido_TItular_Beneficiario"] . " " . "</td>";
		$url = "<a href='formularios/ver.php?id=" . $service["id"] . "' class='btn btn-info' >Ver</a>";
		echo "<td>" . $url . "</td>";
		echo "</tr>";
	}
}
?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Emp/Suc/Asesor</th>
                <th>Plan</th>
                <th>Titular</th>
                <th>Accion</th>
            </tr>
        </tfoot>
    </table>
    </div>
    </div>
