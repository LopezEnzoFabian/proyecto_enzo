  <!--Encabezado-->
  <?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('id_perfil');
  ?>

  <header class="container-fluid bg-dark">
    <nav class="container navbar navbar-expand-lg bg-dark">
      <div class="container bg-dark">
        <a href="<?php echo base_url('/'); ?>">
          <img src="<?php echo base_url('/'); ?>assets/img/gamershoplogo.png" class="d-block w-20 header-logo" alt="Logo del header">
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- VIEW ADMIN -->
        <?php if ($perfil == '1') { ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-sm-0">
              <img src="<?php echo base_url('/'); ?>assets/img/iconos/usuario.png" class="d-block w-10 iconos-nav">
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('usuarios'); ?>">Crud Usuarios</a>
              <img src="<?php echo base_url('/'); ?>assets/img/iconos/caja.png" class="d-block w-10 iconos-nav">
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/crear'); ?>">Crud Productos</a>
              <img src="<?php echo base_url('/'); ?>assets/img/iconos/chat.png" class="d-block w-10 iconos-nav">
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/consulta_contactos'); ?>">Consultas</a>
              <img src="<?php echo base_url('/'); ?>assets/img/iconos/monedas.png" class="d-block w-10 iconos-nav">
              <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('ventas'); ?>">Ventas</a>
            </ul>
            <div class="dropdown">
              <button class="boton-color dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <a>
                  <img src="<?php echo base_url('/'); ?>assets/img/iconos/sonrisa.png">
                  <?php echo "¡Bienvenido " . $nombre . "!" ?>
                </a>
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
          <img src="<?php echo base_url('/'); ?>assets/img/iconos/tienda.png" class="d-block w-10 iconos-nav">
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/'); ?>">Catálogo</a>
          <img src="<?php echo base_url('/'); ?>assets/img/iconos/carrito.png" class="d-block w-10 iconos-nav">
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('muestro'); ?>">Carrito</a>
          <img src="<?php echo base_url('/'); ?>assets/img/iconos/chat.png" class="d-block w-10 iconos-nav">
          <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('contacto'); ?>">Contacto</a>
        </ul>
        <div class="dropdown">
          <button class="boton-color dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <a>
              <img src="<?php echo base_url('/'); ?>assets/img/iconos/sonrisa.png">
              <?php echo "¡Bienvenido " . $nombre . "!" ?>
            </a>
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="<?php echo base_url('ventas'); ?>">
                <img src="<?php echo base_url('/'); ?>assets/img/iconos/factura.png" class="iconos-nav">Mis compras
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                <img src="<?php echo base_url('/'); ?>assets/img/iconos/salir.png" class="iconos-nav">Cerra sesión
              </a>
            </li>
          </ul>
        </div>

      <?php } else { ?>
        <!-- VISTA NO LOGUADOS -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-sm-0">
            <img src="<?php echo base_url('/'); ?>assets/img/iconos/home.png" class="d-block w-10 iconos-nav">
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('/'); ?>">Inicio</a>
            <img src="<?php echo base_url('/'); ?>assets/img/iconos/quiensomos.png" class="d-block w-10 iconos-nav">
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('quienessomos'); ?>">Quienes Somos</a>
            <img src="<?php echo base_url('/'); ?>assets/img/iconos/monedas.png" class="d-block w-10 iconos-nav">
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
            <img src="<?php echo base_url('/'); ?>assets/img/iconos/chat.png" class="d-block w-10 iconos-nav">
            <a class="navbar-brand navtext-encabezado" href="<?php echo base_url('contacto'); ?>">Contacto</a>
            <img src="<?php echo base_url('/'); ?>assets/img/iconos/terminos.png" class="d-block w-10 iconos-nav">
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