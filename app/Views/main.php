<!-- MAIN/HOME carrusel,novedades,cards mas vendidos y pagina de inicio-->
<?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
}
?>

<body>
  <div style="position: absolute; top: 20%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('success')) {
      echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;  background-color: #1a1a1a; color:#f0f0f0;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('success') . "
               </div>";
    }
    ?>
    <?php if (session()->getFlashdata('addsuccess')) {
      echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;  background-color: #1a1a1a; color:#f0f0f0;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('addsuccess') . "
               </div>";
    }
    ?>
  </div>
  <!--Carrusel deslizante-->
  <div class="container-fluid mt-1">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active d-item">
          <img src="assets/img/carruselgamer.png" class="d-block w-100 d-img" alt="...">
        </div>
        <div class="carousel-item d-item">
          <img src="assets/img/fondo2.png" class="d-block w-100 d-img" alt="...">
        </div>
        <div class="carousel-item d-item">
          <img src="assets/img/setup1.png" class="d-block w-100 d-img" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>




  <!--TITULO NOVEDADES-->
  <div class="container" style="border-bottom: 2px solid gray; margin-bottom: 15px;">
    <h4 class="fuente-texto mt-3">Novedades</h4>
  </div>

  <!--ITEM NOVEDADES-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 portada">
        <img src="assets/img/gamer1.png" class="img-fluid d-img" alt="...">
      </div>

      <div class="col-md-9">
        <div class="row">
          <?php if ($producto) : ?>
            <?php $contador = 0; ?>

            <?php foreach ($producto as $prod) : ?>
              <?php if ($contador < 3) : ?>

                <div class="col-md-4">

                  <div class="card h-100 fuente-textos" style="margin-bottom: 20px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <h5 class="card-title h-100" style="overflow: hidden;">
                        <img src="<?= base_url() ?>/assets/descargas/<?= $prod['imagen'] ?>" alt="imagen-producto" style="width: 100%; object-fit: contain;">
                      </h5>
                      <p class="card-text" style="margin-bottom: 1;">
                        <?= $prod['nombre_prod'] ?>
                      </p>

                      <?php
                      helper('form');
                      if (($prod['stock'] > 0)) {
                        // Envia los datos en forma de formulario para agregar al carrito
                        echo form_open('carrito_agrega');
                        echo form_hidden('carrito_agrega');
                        echo form_hidden('id_producto', $prod['id_producto']);

                        echo form_hidden('precio_vta', $prod['precio_vta']);
                        echo form_hidden('nombre_prod', $prod['nombre_prod']);
                      ?>
                        <div>
                          <?php
                          $btnClass = 'btn boton-color';
                          $btnValue = 'Sumar al carrito';
                          $btnName = 'action';

                          echo '<button type="submit" class="' . $btnClass . '" name="' . $btnName . '">' . $btnValue . '</button>';
                          echo form_close();
                          ?>
                        </div>
                      <?php } else {
                        echo '<span> Sin stock </span>';
                      }

                      ?>

                      <!-- <a href="#" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a> -->
                    </div>
                  </div>

                </div>

                <?php $contador++; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!--TITULO MAS VENDIDOS-->
    <div class="container" style="border-bottom: 2px solid gray; margin-bottom: 15px;">
      <h4 class="fuente-texto mt-3">Más Vendidos</h4>
    </div>

    <!--ITEM MAS VENDIDOS-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <img src="assets\img\gamer2.png" class="d-img" alt="...">
        </div>
        <div class="col-md-3">
          <div class="card h-100 fuente-textos">
            <div class="card-body  d-flex flex-column justify-content-between">
              <h5 class="card-title h-100">
                <img src="assets\img\jostick.png" class="card-img-top" alt="...">
              </h5>
              <p class="card-text" style="margin-bottom: 1;">Joystick Xbox Inalambrico Robot White Bluetooth PC/XBOX</p>
              <a href="#" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 fuente-textos">
            <div class="card-body  d-flex flex-column justify-content-between">
              <h5 class="card-title h-100">
                <img src="assets\img\teclado.png" class="card-img-top" alt="...">
              </h5>
              <p class="card-text" style="margin-bottom: 1;">Teclado Gaming Retroiluminado Wesdar MK4 BR</p>
              <a href="#" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 fuente-textos">
            <div class="card-body  d-flex flex-column justify-content-between">
              <h5 class="card-title h-100">
                <img src="assets\img\mouse.png" class="card-img-top" alt="...">
              </h5>
              <p class="card-text" style="margin-bottom: 1;">Mouse Redragon Centrophorus M601 RGB</p>
              <a href="#" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>