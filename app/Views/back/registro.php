<div class="row align-items-center justify-content-center fuente-textos">
    <div style="position: absolute; top: 5%; z-index: 1;">
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
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
    </div>

    <div class="col col-6 col-lg-6 mt-3 border border-4">
        <div class="row mt-2"><!-- TITULO REGISTRO -->
            <div class="container mb-3 text-center">
                <h2 class="fs-4 text-center mt-3">Registro</h2>
            </div>
        </div>
        <?php $validation = \Config\Services::validation(); ?>
        <div class="container">
            <form action="<?php echo base_url('enviar-form') ?>" method="post" class="p-3">
                <div class="row mb-3"><!-- NOMBRE Y APELLIDO-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nombre" placeholder="">
                            <label for="nombre">Nombre</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('nombre')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="apellido" placeholder="">
                            <label for="apellido">Apellido</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('apellido')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3"><!-- CUIDAD Y LOCALIDAD -->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="ciudad" placeholder="">
                            <label for="ciudad">Ciudad</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('ciudad')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('ciudad'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="localidad" placeholder="">
                            <label for="localidad">Localidad</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('localidad')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('localidad'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3"><!-- DIRECCION Y CODIGO POSTAL-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="direccion" placeholder="">
                            <label for="direccion">Dirección</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('direccion')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('direccion'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="codigo_postal" placeholder="">
                            <label for="codigo_postal">Código postal</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('codigo_postal')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('codigo_postal'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3"><!-- EMAIL Y TELEFONO-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" placeholder="">
                            <label for="email">Email</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('email')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="telefono" placeholder="">
                            <label for="telefono">Teléfono</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('telefono')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('telefono'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3"><!-- NOMBRE DE USUARIO Y PASSWORD-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nombre_usuario" placeholder="">
                            <label for="nombre_usuario">Nombre de usuario</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('nombre_usuario')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('nombre_usuario'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="pass" placeholder="***********">
                            <label for="pass">Password</label>
                            <!-- ERROR -->
                            <?php if ($validation->getError('pass')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3"><!-- BOTONES Y LINK A LOGIN -->
                    <div class="col">
                        <button type="submit" class="btn btn-dark mb-3">Crear</button>
                        <a href="<?php echo base_url('registro'); ?>"></a>
                        <button type="reset" class="btn btn-danger mb-3">Limpiar</button>
                    </div>
                </div>
                <div class="row mb-3"><!-- LINK AL LOGIN -->
                    <p>¿Ya tenés cuenta?, hace clik <a href="<?php echo base_url('login'); ?>" data-bs-toggle="tooltip" title="Tooltip">acá</a> y inicia tu sesión.</p>
                </div>
            </form>
        </div>

    </div>
</div>