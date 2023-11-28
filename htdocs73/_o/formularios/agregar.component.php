<?php
?>
<?php 
require("app.component.php");
?>
<form action="contratos/agregarp.php" method="post">
<form ngNativeValidate [formGroup]="formularioGrupo" (ngSubmit)="enviardatos()">
  <div class="card">
    <div class="card-header alert alert-primary">
      Datos General del Contratante ( Nuevo )
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
            <option value="01">Caracas</option>
            <option value="02">Maracay</option>
            <option value="03">Valencia</option>
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
            <option value="0156">0156 - JOSE RAMIREZ</option>
            <option value="0048">0048 - ROY RENGIFO</option>
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
            <option value="652">
              652 PLAN FUN $600 SEGUROS VENEZUELA CONTADO
            </option>
            <option value="653">
              653 PLAN FUN $600 SEGUROS VENEZUELA MENSUAL
            </option>
            <option value="654">
              654 PLAN FUN $600 SEGUROS VENEZUELA QUIN
            </option>
            <option value="655">
              655 PLAN FUN $600 SEGUROS VENEZUELA SEMANAL
            </option>
            <option value="656">656 COMBO VIDA $4000 SEGUROS VZLA</option>
            <option value="657">657 COMBO VIDA $4000 SEGUROS VZLA</option>
            <option value="658">658 COMBO VIDA $4000 SEGUROS VZLA</option>
            <option value="659">659 COMBO VIDA $4000 SEGUROS VZLA</option>
            <option value="660">660 COMBO VIDA $10.000 SEGUROS VZLA</option>

            <option value="661">661 COMBO VIDA $10.000 SEGUROS VZLA</option>

            <option value="662">662 COMBO VIDA $10.000 SEGUROS VZLA</option>
            <option value="663">663 COMBO VIDA $10.000 SEGUROS VZLA</option>
            <option value="664">664 COMBO VIDA $12.500 SEGUROS VZLA</option>
            <option value="665">665 COMBO VIDA $12.500 SEGUROS VZLA</option>
            <option value="666">666 COMBO VIDA $12.500 SEGUROS VZLA</option>
            <option value="667">667 COMBO VIDA $12.500 SEGUROS VZ</option>
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
            <option value="S">Semanal</option>
            <option value="Q">Quincenal</option>
            <option value="M">Mensual</option>
            <option value="T">Semestral</option>
            <option value="A">Anual</option>
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
          <option value="V">Venezolano</option>
          <option value="E">Extranjero</option>
        </select>

        <input
          id="Cedula_Titular"
          name="Cedula_Titular"
          class="form-control"
          maxlength="20"
          required
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
            maxlength="30"
            required
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
            maxlength="30"
            required
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
            <option value="M">MASCULINO</option>
            <option value="F">FEMENINO</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Estado_Civil"
          ><strong>Estado Cívil</strong></label
        >
        <div class="col-12">
          <select id="Estado_Civil" name="Estado_Civil" class="form-select">
            <option value="S">SOLTER@</option>
            <option value="C">CASAD@</option>
            <option value="D">DIVORCIAD@</option>
            <option value="V">VIUD@</option>
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
          maxlength="30"
          required
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
            <option value="0005">BANCO DE VENEZUELA</option>
            <option value="0137">BANCO DEL TESORO</option>
            <option value="0006">BANCO INDUSTRIAL DE VENEZUELA</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-check-label" for="Tipo_de_Cuenta"
          ><strong>Tipo de Cuenta</strong></label
        >
        <div class="col-12">
          <select id="Tipo_de_Cuenta" name="Tipo_de_Cuenta" class="form-select">
            <option value="A">AHORRO</option>
            <option value="C">CORRIENTE</option>
            <option value="T">TARJETA DE CRÉDITO</option>
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
          maxlength="30"
          required
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
          maxlength="30"
          required
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
          maxlength="30"
          required
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
          class="form-control"
          maxlength="50"
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
          value="n/a"
        />
      </div>

      

      <div class="card-footer text-muted"></div>
    </div>
  </div>

  <div class="card">
    <div class="card-footer text-muted">
      <div class="row">
        <div class="col-6">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        <div class="col-6">
          <a class="btn btn-danger" routerLink="/listar" href="pagina.php">Cancelar</a>
        </div>
      </div>
    </div>
  </div>
</form>
