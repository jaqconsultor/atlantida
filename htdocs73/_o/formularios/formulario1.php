<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

 <img src="atlantida-logo.png" height="150px" >


		
		
		
		
        <!-- 
            <div class="navbar-nav nav-link mr-auto flex-row flex-fill no-backgrund"
             style="background-image: url(./images/bpbdv-header-bg.png);background-position-x: right;background-repeat: no-repeat; padding: 1.74rem 0.95rem;">
        </div>
         <ul class="navbar-nav flex-row align-items-center bg-white-lg-none">
            <li class="nav-item d-none d-md-block d-lg-block">
                 <a class="nav-link pointer align-self-middle p-0 text-center"
                   target="_blank"
                   href="#">
                    <img class="w-50"
                         src="./images/bpbdv-white-logo.png"
                         alt="ExCle" />
                </a> 
            </li>
            <li class="nav-item d-none d-md-block d-lg-block">
                <a class="nav-link pointer align-self-middle p-0 pr-2"
                   target="_blank"
                   href="#">
                    <img src="./images/bdv-white-isologo.png"
                         alt="BiopagoBDV" />
                </a>
            </li>
        </ul> -->
    </nav>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-9">

                <div class="card mb-3">
                    <h5 class="card-header alert alert-primary">Datos General del Contratante</h5>
                    <div class="card-body">
                        <form id="form" method="post" autocomplete="off" class="needs-validation" novalidate>
                            <div class="row">

                                <!--Es persona jurídica-->

                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" ><strong>Empresa</strong></label>
                                    
                                        <div class="col-12">
                                            <select id="Codigo_Empresa" name="Codigo_Empresa" class="form-select">
                                                <option value="01">
                                                    INSIBS, C.A.
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								


                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" <strong>Sucursal</strong></label>
                                    
                                        <div class="col-12">
                                            <select id="Codigo_Sucursal" name="Codigo_Sucursal" class="form-select">
                                                <option value="01">
                                                    Caracas
                                                </option>
                                                <option value="02">
                                                    Maracay
                                                </option>
                                                <option value="03">
                                                    Valencia
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								


                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" ><strong>Compañia de Seguros</strong></label>
                                    
                                        <div class="col-12">
                                            <select id="identificationNac" name="identificationNac" class="form-select">
                                                <option value="222">
                                                    222 - SEGUROS VENEZUELA
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								
<div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" ><strong>Productor / Asesor</strong></label>
                                    
                                        <div class="col-12">
                                            <select id="Codigo_Productor_Asesor" name="Codigo_Productor_Asesor" class="form-select">
                                                <option value="0156">
                                                    0156 - JOSE RAMIREZ
                                                </option>
                                                <option value="0048">
                                                    0048 - ROY RENGIFO
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>

                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" ><strong>Plan</strong></label>
                                    
                                        <div class="col-12">
                                            <select id="Codigo_Plan_en_SISER" name="Codigo_Plan_en_SISER" class="form-select">
                                                <option value="652">
                                                    652	PLAN FUN $600 SEGUROS VENEZUELA CONTADO
                                                </option>
                                                <option value="653">
                                                    653	PLAN FUN $600 SEGUROS VENEZUELA MENSUAL
                                                </option>
                                                <option value="654">
                                                    654	PLAN FUN  $600 SEGUROS VENEZUELA QUIN
                                                </option>
                                                <option value="655">
                                                    655	PLAN FUN $600 SEGUROS VENEZUELA SEMANAL
                                                </option>
                                                <option value="656">
                                                    656	COMBO VIDA $4000 SEGUROS VZLA
                                                </option>
                                                <option value="657">
                                                    657	COMBO VIDA  $4000 SEGUROS VZLA
                                                </option>
                                                <option value="658">
                                                    658	COMBO VIDA $4000 SEGUROS VZLA
                                                </option>
                                                <option value="659">
                                                    659	COMBO VIDA  $4000 SEGUROS VZLA
                                                </option>
                                                <option value="660">
                                                    660	COMBO VIDA $10.000 SEGUROS VZLA
                                                </option>

                                                <option value="661">
                                                    661	COMBO VIDA  $10.000 SEGUROS VZLA
                                                </option>

                                                <option value="662">
                                                    662	COMBO VIDA $10.000 SEGUROS VZLA
                                                </option>
                                                <option value="663">
                                                    663	COMBO VIDA $10.000 SEGUROS VZLA 
                                                </option>
                                                <option value="664">
                                                    664	COMBO VIDA $12.500 SEGUROS VZLA
                                                </option>
                                                <option value="665">
                                                    665	COMBO VIDA $12.500 SEGUROS VZLA
                                                </option>
                                                <option value="666">
                                                    666	COMBO VIDA $12.500 SEGUROS VZLA
                                                </option>
                                                <option value="667">
                                                    667	COMBO VIDA $12.500 SEGUROS VZ
                                                </option>
												
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								

				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" ><strong>Tipo de Vencimiento</strong></label>
                                        <div class="col-12">
                                            <select id="Tipo_de_Vencimiento" name="Tipo_de_Vencimiento" class="form-select">
                                                <option value="S">
                                                    Semanal
                                                </option>
                                                <option value="Q">
                                                    Quincenal
                                                </option>
                                                <option value="M">
                                                    Mensual
                                                </option>
                                                <option value="T">
                                                    Semestral
                                                </option>
                                                <option value="A">
                                                    Anual
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								

</div>								






                <!--Datos del Pago-->
                <div class="card mb-3">
                    <h5 class="card-header alert alert-primary">Datos Básicos del Titular</h5>
                    <div class="card-body">
                        <form id="form" method="post" autocomplete="off" class="needs-validation" novalidate>
                            <div class="row">

                                <!--Cédula-->
                                <div class="col-12">
                                    <label class="form-label" ><strong>Cédula</strong></label>
                                    
                                       
                                            <select id="TipoCe" name="Nacionalidad_Titular" class="form-select">
                                                <option value="V">
                                                    Venezolano
                                                </option>
                                                <option value="E">
                                                    Extranjero
                                                </option>
                                            </select>
                                       
                                        
                                            <input id="Cedula_Titular" name="Cedula_Titular"
                                                   class="form-control" maxlength="20" required>
                                        
                                    
                                </div>
                                </div>

                 <div class="row">
				 <div class="col-10 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" ><strong>Nombre</strong></label>
                                    
                                        <div class="col-12">
											<input type="input" id="Nombre_TItular_Beneficiario" name="Nombre_TItular_Beneficiario" class="form-control" maxlength="30" required>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								

				 <div class="col-10 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" for="Apellido_TItular_Beneficiario"><strong>Apellido</strong></label>
                                    
                                        <div class="col-12">
											<input type="input" id="Apellido_TItular_Beneficiario" name="Apellido_TItular_Beneficiario" class="form-control" maxlength="30" required>
                                        </div>
                                    
                                    </div>
                                </div>



                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" for="Sexo_Titular_Beneficiario"><strong>Sexo</strong></label>
                                    
                                        <div class="col-6">
                                            <select id="Sexo_Titular_Beneficiario" name="Sexo_Titular_Beneficiario" class="form-select">
                                                <option value="M">
                                                    MASCULINO
                                                </option>
												<option value="F">
                                                    FEMENINO
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								

                 <div class="row">
				 <div class="col-10 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" for="Estado_Civil"><strong>Estado Cívil</strong></label>
                                        <div class="col-12">
                                            <select id="Estado_Civil" name="Estado_Civil" class="form-select">
                                                <option value="S">
                                                    SOLTER@
                                                </option>
												<option value="C">
                                                    CASAD@
                                                </option>
												<option value="D">
                                                    DIVORCIAD@
                                                </option>
												<option value="V">
                                                    VIUD@
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								



                 <div class="row">
				 <div class="col-10 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" for="Parentesco"><strong>Parentesco</strong></label>
                                    
                                        <div class="col-12">
                                            <select id="Parentesco" name="Parentesco" class="form-select">
                                                <option value="Afiliado Principal">
                                                    Afiliado Principal
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								


                                <!--Teléfono-->
                                <div class="col-12 mb-3 validate-me">
                                    <label for="Numero_de_Telefono" class="form-label"><strong>Fecha de Nacimiento</strong></label>
                                    <input type="date" id="Fecha_Nacimiento_Titular_Beneficiario" name="Fecha_Nacimiento_Titular_Beneficiario" class="form-control" maxlength="30" required>
                                </div>

	
	
	


                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" for="Nombre_Agente_Recaudador"><strong>Agente Recaudador ( Banco )</strong></label>
                                        <div class="col-12">
                                            <select id="Nombre_Agente_Recaudador" name="Nombre_Agente_Recaudador" class="form-select">
                                                <option value="0005">
                                                    BANCO DE VENEZUELA
                                                </option>
												<option value="0137">
                                                    BANCO DEL TESORO
                                                </option>
												<option value="0006">
                                                    BANCO INDUSTRIAL DE VENEZUELA
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								

                 <div class="row">
				 <div class="col-12 mb-3">
                                    <div class="form-check form-switch p-0">
                                        <label class="form-check-label" for="Tipo_de_Cuenta"><strong>Tipo de Cuenta</strong></label>
                                        <div class="col-12">
                                            <select id="Tipo_de_Cuenta" name="Tipo_de_Cuenta" class="form-select">
                                                <option value="A">
                                                    AHORRO
                                                </option>
												<option value="C">
                                                    CORRIENTE
                                                </option>
												<option value="T">
                                                    TARJETA DE CRÉDITO
                                                </option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
</div>								


                                <!--Teléfono-->
                                <div class="col-12 mb-3 validate-me">
                                    <label for="Numero_de_Telefono" class="form-label"><strong>Teléfono</strong></label>
                                    <input type="number" id="Numero_de_Telefono" name="Numero_de_Telefono" class="form-control" maxlength="30" required>
                                </div>

                                <!--Mail-->
                                <div class="col-12 mb-3">
                                    <label for="Correo_Electronico" class="form-label"><strong>Correo Electrónico</strong></label>
                                    <input id="Correo_Electronico" name="Correo_Electronico" type="email" class="form-control" maxlength="50">
                                </div>


                            </div>
                            
                <!--                <img src="./images/botondepago.png" alt="App Logo" height="50px" width="100px" />
                            
                            <div class="row mb-2 mt-3">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input id="btnCreatePayment" type="submit" value="Iniciar Proceso de Pago" class="btn btn-success">
                                </div>-->
                                <div class="col-12 mb-3">
								    <button type="button" class="alert alert-success">Enviar Información</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Mensaje de error
                <div class="row mb-3" id="paymentErrorContainer">
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <p id="paymentError"></p>
                        <button id="btnCloseAlert" type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                </div>-->

                <!--Link de pago
                <div class="card mb-3" id="paymentLinkContainer">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Link de Pago</h5>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <button id="btnCopyLink" class="btn" type="button"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copiar">
                                        <img src="./images/clipboard.svg" width="20" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                <!--    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" id="paymentLink" class="form-control" readonly>
                                    <button id="btnGoPayment" class="btn btn-secondary" type="button" title="Limpiar">Ir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!--Consulta de Pago
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Consultar Pago</h5>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <button id="btnClearSearchPayment" class="btn" type="button"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Limpiar">
                                        <img src="./images/eraser.svg" width="20" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" id="txtToken" class="form-control" placeholder="Ingrese el token de pago">
                                    <button class="btn btn-secondary" type="button" id="searchPayment">Consultar</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <table id="checkPaymentTable" class="table table-striped">
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            -->
                <!--Nuevo pago
                <div class="row mb-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input id="btnNewPayment" type="submit" value="Nuevo Pago" class="btn btn-primary">
                    </div>
                </div>

                <div id="spinner">
                    <div class="spinner-border text-primary" role="status">
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
