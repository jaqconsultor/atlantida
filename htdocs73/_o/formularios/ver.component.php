<?php
$id = $_GET['id'];

$sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM contratos where id=" .$id ."");
if(mysqli_num_rows($sqlEmpleaados) > 0){
    $empleaados = mysqli_fetch_all($sqlEmpleaados,MYSQLI_ASSOC);
	foreach($empleaados as $service){
    ?>

<form action="" method="post">
  <div class="card">
    <div class="card-header alert alert-primary">
      VER - Datos General del Contratante ( <?php echo $_GET['id'] ?> )
    </div>
    <div class="card-body">
      <div class="form-group">
        <label class="form-check-label"> <strong>Empresa</strong></label>

        <div class="col-12">
          <select id="Codigo_Empresa" name="Codigo_Empresa" class="form-select">
            <option value="01">INSIBS, C.A.</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label"><strong>Sucursal</strong></label>

        <div class="col-12">
          <select
            id="Codigo_Sucursal"
            name="Codigo_Sucursal"
            class="form-select"
          >
          <?php if(   $service["Codigo_Sucursal"] == '01' ) { ?>
            <option value="01">Caracas</option>
          <?php } ?>            

          <?php if(   $service["Codigo_Sucursal"] == '02' ) { ?>
            <option value="02">Maracay</option>
            <?php } ?>            
            <?php if(   $service["Codigo_Sucursal"] == '03' ) { ?>
            <option value="03">Valencia</option>
            <?php } ?>            
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label"
          ><strong>Compañia de Seguros</strong></label
        >

        <div class="col-12">
          <select
            id="identificationNac"
            name="identificationNac"
            class="form-select"
          >
            <option value="0222">0222 - SEGUROS VENEZUELA</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label"
          ><strong>Productor / Asesor</strong></label
        >

        <div class="col-12">
          <select
            id="Codigo_Productor_Asesor"
            name="Codigo_Productor_Asesor"
            class="form-select"
          >
          <?php if(   $service["Codigo_Productor_Asesor"] == '0156' ) { ?>
            <option value="0156">0156 - JOSE RAMIREZ</option>
            <?php } ?>
            <?php if(   $service["Codigo_Productor_Asesor"] == '0048' ) { ?>
            <option value="0048">0048 - ROY RENGIFO</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label"><strong>Plan</strong></label>

        <div class="col-12">
          <select
            id="Codigo_Plan_en_SISER"
            name="Codigo_Plan_en_SISER"
            class="form-select"
          >
          <?php if(   $service["Codigo_Plan_en_SISER"] == '652' ) { ?>
            <option value="652">652 PLAN FUN $600 SEGUROS VENEZUELA CONTADO</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '653' ) { ?>
            <option value="653">653 PLAN FUN $600 SEGUROS VENEZUELA MENSUAL</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '654' ) { ?>
            <option value="654">654 PLAN FUN $600 SEGUROS VENEZUELA QUIN</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '655' ) { ?>
            <option value="655">655 PLAN FUN $600 SEGUROS VENEZUELA SEMANAL</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '656' ) { ?>
            <option value="656">656 COMBO VIDA $4000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '657' ) { ?>
            <option value="657">657 COMBO VIDA $4000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '658' ) { ?>
            <option value="658">658 COMBO VIDA $4000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '659' ) { ?>
            <option value="659">659 COMBO VIDA $4000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '660' ) { ?>
            <option value="660">660 COMBO VIDA $10.000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '661' ) { ?>
            <option value="661">661 COMBO VIDA $10.000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '662' ) { ?>
            <option value="662">662 COMBO VIDA $10.000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '663' ) { ?>
            <option value="663">663 COMBO VIDA $10.000 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '664' ) { ?>
            <option value="664">664 COMBO VIDA $12.500 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '665' ) { ?>
            <option value="665">665 COMBO VIDA $12.500 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '666' ) { ?>
            <option value="666">666 COMBO VIDA $12.500 SEGUROS VZLA</option>
            <?php } ?>
            <?php if(   $service["Codigo_Plan_en_SISER"] == '667' ) { ?>
            <option value="667">667 COMBO VIDA $12.500 SEGUROS VZ</option>
            <?php } ?>
          </select>
        </div>
      </div>


      <div class="form-group">
        <label class="form-check-label"
          ><strong>Tipo de Vencimiento</strong></label
        >
        <div class="col-12">
          <select
            id="Tipo_de_Vencimiento"
            name="Tipo_de_Vencimiento"
            class="form-select"
          >
          <?php if(   $service["Tipo_de_Vencimiento"] == 'S' ) { ?>
            <option value="S">Semanal</option>
            <?php } ?>
            <?php if(   $service["Tipo_de_Vencimiento"] == 'Q' ) { ?>
            <option value="Q">Quincenal</option>
            <?php } ?>
            <?php if(   $service["Tipo_de_Vencimiento"] == 'M' ) { ?>
            <option value="M">Mensual</option>
            <?php } ?>
            <?php if(   $service["Tipo_de_Vencimiento"] == 'T' ) { ?>
            <option value="T">Semestral</option>
            <?php } ?>
            <?php if(   $service["Tipo_de_Vencimiento"] == 'A' ) { ?>
            <option value="A">Anual</option>
            <?php } ?>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header alert alert-primary">Datos Básicos del Titular</div>
    <div class="card-body">
      <!--Cédula-->
      <div class="form-group">
        <label class="form-label"><strong>Cédula</strong></label>

        <select id="TipoCe" name="Nacionalidad_Titular" class="form-select">
        <?php if(   $service["Nacionalidad_Titular"] == 'V' ) { ?>
          <option value="V">Venezolano</option>
          <?php } ?>
          <?php if(   $service["Nacionalidad_Titular"] == 'E' ) { ?>
          <option value="E">Extranjero</option>
          <?php } ?>
        </select>

        <input
          id="Cedula_Titular"
          name="Cedula_Titular"
          class="form-control"
          maxlength="20" readonly
          required value="<?php echo $service["Cedula_Titular"] ?>"
        />
      </div>

      <div class="form-group">
        <label class="form-check-label"><strong>Nombre</strong></label>

        <div class="col-12">
          <input
            type="input"
            id="Nombre_TItular_Beneficiario"
            name="Nombre_TItular_Beneficiario"
            class="form-control"
            maxlength="30" readonly
            required value="<?php echo $service["Nombre_TItular_Beneficiario"] ?>"
          />
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Apellido_TItular_Beneficiario"
          ><strong>Apellido</strong></label
        >

        <div class="col-12">
          <input
            type="input"
            id="Apellido_TItular_Beneficiario"
            name="Apellido_TItular_Beneficiario"
            class="form-control"
            maxlength="30" readonly
            required value="<?php echo $service["Apellido_TItular_Beneficiario"] ?>"
          />
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Sexo_Titular_Beneficiario"
          ><strong>Sexo</strong></label
        >

        <div class="col-12">
          <select
            id="Sexo_Titular_Beneficiario"
            name="Sexo_Titular_Beneficiario"
            class="form-select"
          >
          <?php if(   $service["Sexo_Titular_Beneficiario"] == 'M' ) { ?>
            <option value="M">MASCULINO</option>
            <?php } ?>
            <?php if(   $service["Sexo_Titular_Beneficiario"] == 'F' ) { ?>
            <option value="F">FEMENINO</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Estado_Civil"
          ><strong>Estado Cívil</strong></label
        >
        <div class="col-12">
          <select id="Estado_Civil" name="Estado_Civil" class="form-select">
          <?php if(   $service["Estado_Civil"] == 'S' ) { ?>
            <option value="S">SOLTER@</option>
            <?php } ?>
            <?php if(   $service["Estado_Civil"] == 'C' ) { ?>
            <option value="C">CASAD@</option>
            <?php } ?>
            <?php if(   $service["Estado_Civil"] == 'D' ) { ?>
            <option value="D">DIVORCIAD@</option>
            <?php } ?>
            <?php if(   $service["Estado_Civil"] == 'V' ) { ?>
            <option value="V">VIUD@</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Parentesco"
          ><strong>Parentesco</strong></label
        >

        <div class="col-12">
          <select id="Parentesco" name="Parentesco" class="form-select">
            <option value="Afiliado Principal">Afiliado Principal</option>
          </select>
        </div>
      </div>

      <!--Teléfono-->
      <div class="form-group">
        <label for="Numero_de_Telefono" class="form-label"
          ><strong>Fecha de Nacimiento</strong></label
        >
        <input
          type="date"
          id="Fecha_Nacimiento_Titular_Beneficiario"
          name="Fecha_Nacimiento_Titular_Beneficiario"
          class="form-control"
          maxlength="30" readonly
          required value="<?php echo $service["Fecha_Nacimiento_Titular_Beneficiario"] ?>"
        />
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Nombre_Agente_Recaudador"
          ><strong>Agente Recaudador ( Banco )</strong></label
        >
        <div class="col-12">
          <select
            id="Nombre_Agente_Recaudador"
            name="Nombre_Agente_Recaudador"
            class="form-select"
          >
          <?php if(   $service["Nombre_Agente_Recaudador"] == '0005' ) { ?>
            <option value="0005">BANCO DE VENEZUELA</option>
            <?php } ?>
            <?php if(   $service["Nombre_Agente_Recaudador"] == '0137' ) { ?>
            <option value="0137">BANCO DEL TESORO</option>
            <?php } ?>
            <?php if(   $service["Nombre_Agente_Recaudador"] == '0006' ) { ?>
            <option value="0006">BANCO INDUSTRIAL DE VENEZUELA</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Tipo_de_Cuenta"
          ><strong>Tipo de Cuenta</strong></label
        >
        <div class="col-12">
          <select id="Tipo_de_Cuenta" name="Tipo_de_Cuenta" class="form-select">
          <?php if(   $service["Tipo_de_Cuenta"] == 'A' ) { ?>
            <option value="A">AHORRO</option>
            <?php } ?>
            <?php if(   $service["Tipo_de_Cuenta"] == 'C' ) { ?>
            <option value="C">CORRIENTE</option>
            <?php } ?>
            <?php if(   $service["Tipo_de_Cuenta"] == 'T' ) { ?>
            <option value="T">TARJETA DE CRÉDITO</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="Numero_de_Cuenta" class="form-label"
          ><strong>Número de Cuenta</strong></label
        >
        <input
          type="number"
          id="Numero_de_Cuenta"
          name="Numero_de_Cuenta"
          class="form-control"
          maxlength="30" readonly
          required value="<?php echo $service["Numero_de_Cuenta"] ?>"
        />
      </div>

      <div class="form-group">
        <label for="Numero_de_Cuenta" class="form-label"
          ><strong>Código de Compañia de Seguro</strong></label
        >
        <input
          type="number"
          id="Codigo_Cia_Seguro"
          name="Codigo_Cia_Seguro"
          class="form-control"
          maxlength="30" readonly
          required value="<?php echo $service["Codigo_Cia_Seguro"] ?>"
        />
      </div>


      <!--Teléfono-->
      <div class="form-group">
        <label for="Numero_de_Telefono" class="form-label"
          ><strong>Teléfono</strong></label
        >
        <input
          type="number"
          id="Numero_de_Telefono"
          name="Numero_de_Telefono"
          class="form-control"
          maxlength="30" readonly
          required value="<?php echo $service["Numero_de_Telefono"] ?>"
        />
      </div>

      <!--Mail-->
      <div class="form-group">
        <label for="Correo_Electronico" class="form-label"
          ><strong>Correo Electrónico</strong></label
        >
        <input
          id="Correo_Electronico"
          name="Correo_Electronico"
          type="email"
          class="form-control" readonly
          maxlength="50" value="<?php echo $service["Correo_Electronico"] ?>"
        />
      </div>

      <div class="form-group">
        <label for="Estado_Observacion" class="form-label"
          ><strong>Observación</strong></label
        >
        <input
          id="Estado_Observacion"
          name="Estado_Observacion"
          type="email"
          class="form-control"
          maxlength="50"
          readonly
          value="<?php echo $service["Estado_Observacion"] ?>"
        />
      </div>

      

      <div class="card-footer text-muted"></div>
    </div>
  </div>

  <div class="card">
    <div class="card-footer text-muted">
      <div class="row">
        <div class="col-4">
          
        </div>
        <div class="col-4">
          <a class="btn btn-danger" routerLink="/listar" href="pagina.php">Cancelar</a>
        </div>
        <div class="col-4">
          
        </div>
      </div>
    </div>
  </div>
</form>

<?php

	}
}

?>
