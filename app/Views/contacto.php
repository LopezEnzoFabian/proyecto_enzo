<?php if (session()->getFlashdata('success')) {
    echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('success') . "
               </div>";
}
?>

<?php if (session()->getFlashdata('warning')) {
    echo " <div class='h4 text-center alert alert-danger alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('warning') . "
               </div>";
}
?>

<div class="container-fluid">
    <div>
        <?php if (session()->getFlashdata('msgc')) {
            echo " <div class='h4 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('msgc') . "
               </div>";
        }
        ?>
    </div>

    <?php
    if (!session()->logged_in) {
    ?>
        <div class="container">
            <div class="row custom-row">
                <img src="<?php echo base_url('/'); ?>assets\img\contactofondo.png" class="img-fluid">
            </div>
        </div>
    <?php }
    ?>



    <div class="col-12 container titulo-contacto text-center mt-2">
        <div class="row">
            <div class="col-12 col-md-5 text-center text-md-end">
                <img src="<?php echo base_url('/'); ?>assets\img\gamershoplogo.png" width="100" alt="Logo de la página web">
            </div>
            <div class="col-12 col-md-7 text-md-start text-center">
                <p class="display-3">
                    <span class="gamer fuente-textos titulo-rojo">Gamer</span><span class="shop">Shop</span><!-- display de bootstraP -->
                </p>
            </div>
        </div>
    </div>

    <!--DATOS DE CONTACTO -->
    <div class="row align-items-center m-2 justify-content-center">
        <!-- DUEÑO Y MAPA -->
        <?php
        if (!session()->logged_in) {
        ?>
            <div class="col-12 col-lg-6 container mb-5">
                <div class="row">
                    <!-- CARD DUEÑO -->
                    <div class="card mb-3" style="max-width: 540px; background-color: #f2f2f2;">
                        <div class="row">
                            <div class="col-md-4 mt-2 ">
                                <img src="<?php echo base_url('/'); ?>assets\img\dueño.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body fuente-textos">
                                    <h5 class="card-title">Rodolfo Correa</h5>
                                    <p class="card-text">Hola soy el dueño de <span class="gamer titulo-rojo">Gamer</span><span class="shop">Shop</span> deseo que encuentres lo que buscas, o simplemente, create un usuario en nuestra web y suma al carrito de compras lo que vos quieras adquirir.</p>
                                    <p class="card-text"><small class="text-body-secondary">Creatividad, experiencia y elegancia</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAPA -->
                <div class="row ratio ratio-4x3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.130209415391!2d-58.8492372264757!3d-27.465205364163896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cba732018df%3A0x6bd1c7906478f9a3!2sParque%20Camba%20Cua!5e0!3m2!1ses-419!2sar!4v1682105672808!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        <?php }
        ?>
        <!-- FORMULARIO -->
        <div class="col-12 col-lg-6 mb-5 fuente-textos border" style="background-color: #f2f2f2;">
            <div class="row mt-2">
                <div class="container mb-3 d-flex aling-items-center">
                    <img src="<?php echo base_url('/'); ?>assets/img/iconos/correo.png" class="d-block w-10 iconos-comer">
                    <p class="fs-3">Contáctenos via correo</p>
                </div>
            </div>
            <form action="<?php echo base_url('/consulta') ?>" method="post" class="p-3">
                <?php
                /* SI NO ESTA LOGUEADO ENTONCES MOSTRAMOS EL FORMULARIO ENTERO */
                if (!session()->logged_in) {
                ?>
                    <!-- Nombre y Apellido -->
                    <div class="row mb-3">
                        <div class="col-12 col-lg-6">
                            <div class="row mb-3">
                                <div class="col-12 col-md-4">
                                    <label for="nombre" class="col-form-label">Nombre</label>
                                </div>
                                <div class="col-12 col-md-8">
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                                </div>
                                <small id="helpId" class="form-text text-danger"><?php echo validation_show_error('nombre'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row mb-3">
                                <div class="col-12 col-md-4">
                                    <label for="apellido" class="col-form-label">Apellido</label>
                                </div>
                                <div class="col-12 col-md-8">
                                    <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                                </div>
                                <small id="helpId" class="form-text text-danger"><?php echo validation_show_error('apellido'); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- MAIL -->
                    <div class="row mb-3">
                        <div class="col-12 col-md-2">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="email" class="form-control" name="email" placeholder="nombre@email.com">
                        </div>
                        <small id="helpId" class="form-text text-danger"><?php echo validation_show_error('email'); ?></small>
                    </div>
                    <!-- telefono -->
                    <div class="row mb-3">
                        <div class="col-12 col-lg-6">
                            <div class="row mb-3">
                                <div class="col-12 col-md-4">
                                    <label for="telefono" class="col-form-label">Teléfono</label>
                                </div>
                                <div class="col-12 col-md-8">
                                    <input type="text" class="form-control" placeholder="+(54)" name="telefono">
                                </div>
                                <small id="helpId" class="form-text text-danger"><?php echo validation_show_error('telefono'); ?></small>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
                <!-- SE MUESTRA SOLAMENTE SI ESTA LOGUEADO -->
                <!-- AREA DE MENSAJE -->
                <div class="row mb-3">
                    <div class="col-12">
                        <textarea class="form-control mensaje-area" name="mensaje" rows="4"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="mensaje" class="form-label">Dejanos tu consulta</label>
                    </div>
                    <small id="helpId" class="form-text text-danger"><?php echo validation_show_error('mensaje');?></small>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-dark mb-3">Enviar</button>
                        <button type="reset" class="btn btn-danger mb-3">Borrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>