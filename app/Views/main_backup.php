<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
}
?>
<!-- MAIN/HOME carrusel,novedades,cards mas vendidos y pagina de inicio-->
<body>
  <div style="position: absolute; top: 20%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('success')) {
      echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;  background-color: #1a1a1a; color:#f0f0f0;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('success') . "
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
        <img src="assets\img\gamer1.png" class="img-fluid d-img" alt="...">
      </div>
      <div class="col-md-3">
        <div class="card h-100 fuente-textos">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title h-100">
              <img src="assets\img\monitor.png" class="img-fluid" alt="...">
            </h5>
            <p class="card-text" style="margin-bottom: 1;">Monitor Curvo Samsung 24'' F390 Full HD FreeSync</p>
            <a href="login" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 fuente-textos">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title h-100">
              <img src="assets\img\auriculares.png" class="img-fluid" alt="...">
            </h5>
            <p class="card-text" style="margin-bottom: 1;">Auriculares Gamer Wesdar GH31 Black RGB RCA Y-Adapter</p>
            <a href="login" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 fuente-textos">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title h-100">
              <img src="assets\img\sillagamer.png" class="img-fluid" alt="...">
            </h5>
            <p class="card-text" style="margin-bottom: 1;">Silla Gamer AK-Racing Gaming Chair OCTANE Blue (Peso MAX. 150kg) </p>
            <a href="login" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
          </div>
        </div>
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
            <a href="login" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
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
            <a href="login" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
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
            <a href="login" class="btn boton-color" style="margin-top: auto;">Sumar al carrito</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>