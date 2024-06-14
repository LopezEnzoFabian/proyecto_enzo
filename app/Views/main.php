<!-- MAIN/HOME carrusel,novedades,cards mas vendidos y pagina de inicio-->
<?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
}
?>

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('id_perfil');
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
      <div class="col-md-3">
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
                        <p class="card-text" style="margin-bottom: 1;">
                          $<?= number_format($prod['precio'], $prod['precio'] >= 1000 ? 0 : 2, '.', ',') ?>
                        </p>
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
  </div>
  <!--TITULO MAS VENDIDOS-->
  <div class="container" style="border-bottom: 2px solid gray; margin-bottom: 15px;">
    <h4 class="fuente-texto mt-3">Ultimas unidades</h4>
  </div>

  <!--ITEM OFERTAS-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <img src="assets/img/gamer2.png" class="img-fluid d-img" alt="...">
      </div>

      <div class="col-md-9">
        <div class="row">
        <?php if ($producto) : ?>
              <?php foreach ($producto as $prod) : ?>
                <?php if ($prod['stock'] == '1') : ?>

                  <div class="col-md-4">
                    <div class="card h-100 fuente-textos" style="margin-bottom: 20px;">
                      <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title h-100" style="overflow: hidden;">
                          <img src="<?= base_url() ?>/assets/descargas/<?= $prod['imagen'] ?>" alt="imagen-producto" style="width: 100%; object-fit: contain;">
                        </h5>
                        <p class="card-text" style="margin-bottom: 1;">
                          <?= $prod['nombre_prod'] ?>
                        </p>
                        <p class="card-text" style="margin-bottom: 1;">$
                          <?= number_format($prod['precio'], $prod['precio'] >= 1000 ? 0 : 2, '.', ',') ?>
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

                      </div>
                    </div>

                  </div>

                <?php endif; ?>
              <?php endforeach; ?>    
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <?php if ($perfil == '2') : ?>
    <!--TODOS LOS PRODUCTOS-->
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php if ($producto and $categorias) : ?>
            <?php foreach ($categorias as $cate) : ?>
              <div class="container">
                <h4 class="fuente-texto  text-center mt-3">
                  <?= $cate['descripcion'] ?>
                </h4>
              </div>
              <?php foreach ($producto as $prod) : ?>
                <?php if ($prod['id_categoria'] == $cate['id_categoria']) : ?>

                  <div class="col-md-3">
                    <div class="card h-100 fuente-textos" style="margin-bottom: 20px;">
                      <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title h-100" style="overflow: hidden;">
                          <img src="<?= base_url() ?>/assets/descargas/<?= $prod['imagen'] ?>" alt="imagen-producto" style="width: 100%; object-fit: contain;">
                        </h5>
                        <p class="card-text" style="margin-bottom: 1;">
                          <?= $prod['nombre_prod'] ?>
                        </p>
                        <p class="card-text" style="margin-bottom: 1;">
                          $<?= number_format($prod['precio'], $prod['precio'] >= 1000 ? 0 : 2, '.', ',') ?>
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

                      </div>
                    </div>

                  </div>

                <?php endif; ?>
              <?php endforeach; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</body>