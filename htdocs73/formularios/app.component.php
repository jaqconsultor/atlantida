<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">
    <img src="assets/atlantida-logo.png" height="150px" />
    <a class="navbar-brand" href="formularios/pagina.php">Inicio</a>
    <button
      class="navbar-toggler d-lg-none"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapsibleNavId"
      aria-controls="collapsibleNavId"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item"></li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >Carga</a
          >
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item"  href="formularios/pagina_agregar.php"
              >De Formularios</a
            >
          </div>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >Revision</a
          >
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="formularios/modificar.php"
              >Modificar & Verificar Formulario</a
            >
          </div>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >Ver Formularios</a
          >
          <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" routerLink="listarcursos" href="formularios/verificados.php"
              >Verificados</a
            >
            <a class="dropdown-item" routerLink="listarcursos" href="formularios/recibidos.php"
              >Recibidos</a
            >
            <a class="dropdown-item" routerLink="listarcursos" href="formularios/rechazados.php"
              >Rechazados</a
            >
            <a class="dropdown-item" routerLink="listarcursos" href="formularios/enproceso.php"
              >En Proceso</a
            >
            <a class="dropdown-item" routerLink="listarcursos" href="formularios/procesadas.php"
              >Procesadas</a
            >
          </div>

        </li>
      </ul>
    </div>
  </div>
</nav>

