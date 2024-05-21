<section class="container mt-3 mb-3">
    <h2>Productos eliminados</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('crear') ?>" class="btn btn-dark btn-sm m-2">Agregados</a>
        <!-- <a href="<?php echo base_url('eliminados') ?>" class="btn-danger btn-sm m-2 btn-opciones">Eliminados</a> -->
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <div class="">
            <table class="table table-success table-striped" id="users-list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Precio_vta</th>
                        <th>Stock</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($producto) : ?>
                        <?php foreach ($producto as $prod) : ?>

                            <?php if ($prod['eliminado'] == 'SI') : ?>

                                <tr>
                                    <td><?php echo $prod['id_producto']; ?></td>
                                    <td><?php echo $prod['nombre_prod']; ?></td>
                                    <td><?php echo "$" . $prod['precio']; ?></td>
                                    <td><?php echo "$" . $prod['precio_vta']; ?></td>
                                    <td><?php echo $prod['stock']; ?></td>

                                    <?php $imagen = $prod['imagen']; ?>
                                    <?php $id = $prod['id_producto']; ?>

                                    <td><img height="70px" width="85px" src="<?= base_url() ?>/assets/descargas/<?= $imagen ?>" alt="imagen-producto" style="object-fit: contain;"></td>

                                    <td>
                                        <a href="<?php echo base_url('activar/' . $prod['id_producto']); ?>" class="btn btn-primary btn-sm mt-1" style="margin-right: 10px;">Activar</a>
                                        <a href="<?php echo base_url('borrar-definitivo/' . $prod['id_producto']); ?>" class="btn btn-primary btn-sm mt-1">Borrar definitivo</a>
                                    </td>
                                </tr>

                            <?php endif ?>

                        <?php endforeach ?>
                    <?php endif ?>

                </tbody>
            </table>
        </div>
    </div>

</section>