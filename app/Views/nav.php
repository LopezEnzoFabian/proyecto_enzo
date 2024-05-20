  <!--Encabezado-->
  <?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('id_perfil');
  ?>

  <header class="container-fluid bg-dark">
    <?php if ($perfil == '1') echo 'class="-"'; ?> >
    <nav class="container navbar navbar-expand-lg bg-dark">
      <div class="container bg-dark">
        <a href="<?php echo base_url('/'); ?>">
          <img src="assets/img/gamershoplogo.png" class="d-block w-20 header-logo" alt="Logo del header">
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- VIEW ADMIN -->
        <?php if ($perfil == '1') { ?>
          <!--<div class="btn btn-info active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre'); ?></a>
          </div> -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-sm-0">
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/'); ?>">Inicio</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('#'); ?>">Crud Usuarios</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/crear'); ?>">Crud Productos</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('#'); ?>">Consultas</a>
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('#'); ?>">Ventas</a>
            </ul>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <a> <?php echo "¡Bienvenido " . $nombre . "!" ?></a>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
              </ul>
            </div>
          </div>
      </div>
    <?php } else if ($perfil == '2') { ?>
      <!-- VIEW CLIENTES -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-sm-0">
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/'); ?>">Catálogo</a>
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('quienessomos'); ?>">Quienes Somos</a>
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('contacto'); ?>">Contacto</a>
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('terminosyusos'); ?>">Términos y Usos</a>
        </ul>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <a> <?php echo "¡Bienvenido " . $nombre . "!" ?></a>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mis compras</a></li>
            <li><a class="dropdown-item" href="#">Carrito</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Cerra sesión</a></li>
          </ul>
        </div>

      <?php } else { ?>
        <!-- VISTA NO LOGUADOS -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-sm-0">
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/'); ?>">Inicio</a>
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('quienessomos'); ?>">Quienes Somos</a>
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('contacto'); ?>">Contacto</a>
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('terminosyusos'); ?>">Términos y Usos</a>
          </ul>
          <div class="d-flex" role="search">
            <a href="<?php echo base_url('login'); ?>" class="btn boton-color fuente-textos">Iniciar Sesión</a>
          </div>
        <?php } ?>
        </div>
      </div>
    </nav>
  </header>