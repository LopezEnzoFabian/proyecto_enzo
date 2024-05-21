<div style="position: absolute; top: 12%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('warning')) {
        echo " <div class='h6 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
              <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:.8rem; color: red;'></button>" . session()->getFlashdata('warning') . "
           </div>";
    }
    ?>
</div>

<div style="position: absolute; top: 12%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('damger')) {
        echo " <div class='h6 text-center alert alert-damger alert-dismissible' style='border-radius: 40px;'>
              <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:.8rem; color: red;'></button>" . session()->getFlashdata('damger') . "
           </div>";
    }
    ?>
</div>

<div style="position: absolute; top: 12%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('warning-2')) {
        echo " <div class='h6 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:.8rem; color: red;'></button>" . session()->getFlashdata('warning-2') . "
               </div>";
    }
    ?>
</div>
<div class="row align-items-center justify-content-center fuente-textos">
    <div class="col col-6 col-lg-6 mt-3 border border-4">
        <div class="row mt-2"><!-- TITULO REGISTRO -->
            <div class="container mb-3 text-center">
                <h2 class="fs-4 text-center mt-3">Alta de productos</h2>
            </div>
        </div>
        <?php $validation = \Config\Services::validation(); ?>
        <form action="<?php echo base_url('/enviar-prod') ?>" method="post" class="p-3" enctype="multipart/form-data">
            <div class="row mb-3"><!-- Producto Y Categoria-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nombre_prod" placeholder="">
                        <label for="nombre_prod">Producto</label>
                        <!-- ERROR -->
                        <?php if ($validation->getError('nombre_prod')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nombre_prod'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_categoria">
                            <option selected disabled>Selecciona una categoría</option>
                            <option value="1">1-Monitores</option>
                            <option value="2">2-Periféricos</option>
                            <option value="3">3-Silla Gamer</option>                      
                        </select>
                        <label for="floatingSelect">Categoría</label>
                        <!-- ERROR -->
                        <?php if ($validation->getError('id_categoria')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('id_categoria'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!-- Precio y Precio Venta-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" class="form-control" name="precio" placeholder="">
                        <label for="precio">Precio</label>
                        <!-- ERROR -->
                        <?php if ($validation->getError('precio')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('precio'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" class="form-control" name="precio_vta" placeholder="">
                        <label for="precio_vta">Precio Venta</label>
                        <!-- ERROR -->
                        <?php if ($validation->getError('precio_vta')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('precio_vta'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!--Stock y Stock minimo-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="stock" placeholder="">
                        <label for="stock">Stock</label>
                        <!-- ERROR -->
                        <?php if ($validation->getError('stock')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('stock'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="stock_min" placeholder="">
                        <label for="stock_min">Stock minimo</label>
                        <!-- ERROR -->
                        <?php if ($validation->getError('stock_min')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('stock_min'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3 justify-content-center"><!-- IMAGEN -->
                <div class="col-6 col-lg-4 border border">
                    <label for="file-input" class="file-input-label">
                        Seleccionar archivo
                    </label>
                    <input type="file" id="file-input" name="imagen" accept="image/*" required style="display: none;">
                </div>
            </div>
            <div class="row mb-3"><!--GUARDAR CANCELAR-->
                <div class="col">
                    <button type="submit" class="btn btn-dark mb-2">Guardar</button>
                    <button type="reset" class="btn btn-danger mb-2">Cancelar</button>
                </div>
            </div>
        </form>
    </div>