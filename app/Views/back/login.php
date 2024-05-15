<div class="row align-items-center justify-content-center fuente-textos">
    <div style="position: absolute; top: 5%; z-index: 1;">
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
        <?php if (session()->getFlashdata('success')) {
            echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('success') . "
               </div>";
        }
        ?>
        <?php if (session()->getFlashdata('msg')) {
            echo " <div class='h4 text-center alert alert-danger alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('warning') . "
               </div>";
        }
        ?>
    </div>

    <div class="col col-lg-6 col-md-6 mt-3 border border-4">
        <h2 class="fs-4 text-center mt-3">Iniciar sesión</h2>
        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?php echo base_url('enviarlogin') ?>"><!-- INICIO DEL FORMULARIO -->
            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" name="email" placeholder="">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="pass" placeholder="">
                <label for="pass">Contraseña</label>
            </div>
            <div class="container">
                <button type="submit" class="btn boton-color">Entrar</button>
                <p>¿No tenés cuenta?, ingresa acá <a class="btn boton-color2" href="<?php echo base_url('registro'); ?>">Crear Cuenta</a> y registrate con nosotros.</p>
            </div>
        </form>

    </div>
</div>