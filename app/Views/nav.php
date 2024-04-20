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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="navbar-brand text-white" href="<?php echo base_url('/'); ?>">Inicio</a>
            <a class="navbar-brand text-white" href="<?php echo base_url('quienessomos'); ?>">Quienes Somos</a>
            <a class="navbar-brand text-white" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
            <a class="navbar-brand text-white" href="<?php echo base_url('contacto'); ?>">Contacto</a>
            <a class="navbar-brand text-white" href="<?php echo base_url('terminosyusos'); ?>">Tèrminos y Usos</a>
          </ul>

          <form class="d-flex" role="search">
            <button type="button" class="btn btn-outline-light me-2">Iniciar</button>
            <button type="button" class="btn btn-danger">Registrarse</button>
          </form>
        </div>
      </div>
    </nav>
  </header>