  <!--Encabezado-->
    <header class="container-fluid bg-dark">
      <nav class="container navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a href="<?php echo base_url('/'); ?>">
            <img src="assets/img/gamershoplogo.png" class="d-block w-20 header-logo" alt="Logo del header">
          </a>
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-sm-0">
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/'); ?>">Inicio</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('quienessomos'); ?>">Quienes Somos</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('contacto'); ?>">Contacto</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('terminosyusos'); ?>">Términos y Usos</a>
            </ul>
            <form class="d-flex" role="search">
              <button type="button" class="btn boton-color2 fuente-textos">Iniciar Sesión</button>
              <button type="button" class="btn boton-color fuente-textos">Registrarse</button>
            </form>
          </div>
        </div>
      </nav>
    </header>