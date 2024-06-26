<?php
  $session = session();
  $perfil = $session->get('id_perfil');
  ?>

<footer class="container-fluid py-3 my-4">
  <!---CARUUSEL CON SPONSOR-->
  <div class="row">
    <div class="skills-container">
      <div class="flex skills">
        <div class="skills-slide">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\adata.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\amd.jpg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\deepcool.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\geforce.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\geil.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\hyperx.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\intel.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\logitech.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\reddragon.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\samsung.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\tforce.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\WhatsApp Image 2024-04-19 at 11.05.32 PM (1).jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\WhatsApp Image 2024-04-19 at 11.05.34 PM.jpeg" alt="">
        </div>
        <div class="skills-slide">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\adata.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\amd.jpg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\deepcool.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\geforce.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\geil.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\hyperx.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\intel.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\logitech.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\reddragon.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\samsung.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\tforce.jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\WhatsApp Image 2024-04-19 at 11.05.32 PM (1).jpeg" alt="">
          <img src="<?php echo base_url('/'); ?>assets\img\carrusel-sponsor\WhatsApp Image 2024-04-19 at 11.05.34 PM.jpeg" alt="">
        </div>
      </div>
    </div>

  </div>
  </div>
  <!---PIE PAG-->
  <div class="row bg-black">
    <ul class="nav justify-content-center pb-3 mb-3">
      <?php if (!session()->logged_in) { ?>
        <li class="nav-item"><a class="nav-link navtext-colores" href="<?php echo base_url('/'); ?>">Inicio</a></li>
      <?php } ?>
      <li class="nav-item"><a class="nav-link navtext-colores" href="<?php echo base_url('quienessomos'); ?>">Quienes Somos</a></li>
      <li class="nav-item"><a class="nav-link navtext-colores" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a></li>
      <?php if ($perfil !== '1') { ?>
        <li class="nav-item"><a class="nav-link navtext-colores" href="<?php echo base_url('contacto'); ?>">Contacto</a></li>
      <?php } ?>
      <li class="nav-item"><a class="nav-link navtext-colores" href="<?php echo base_url('terminosyusos'); ?>">Términos y Usos</a></li>
    </ul>
    <div class="row justify-content-center">
      <div class="col-12 col-md-auto mb-3">
        <img src="<?php echo base_url('/'); ?>assets\img\gamershoplogo.png" class="img-fluid" width="100" alt="Logo de la página web">
      </div>
    </div>
    <p class="text-center navtext-colores">&copy; 2024 Company, Inc</p>
  </div>

</footer>