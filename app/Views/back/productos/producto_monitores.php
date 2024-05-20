<section class="container container-table-productos mt-3 mb-3">
    <h2>Productos</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('secciones') ?>" class="btn-dark btn-sm m-2 btn-opciones">Secciones</a>
        <a href="<?php echo base_url('product-form') ?>" class="btn-success btn-sm m-2 btn-opciones">Agregar</a>
        <a href="<?php echo base_url('eliminados') ?>" class="btn-danger btn-sm m-2 btn-opciones">Eliminados</a>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <div class="table-responsive">
            <table class="stripe" id="users-list">
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

                <tbody class="table-body">
                    <?php if ($producto) : ?>
                        <?php foreach ($producto as $prod) : ?>
                            <?php $eliminado = $prod['eliminado']; ?>
                            <?php if ($eliminado == 'NO' && ($prod['categoria_id'] == 2)) : ?>

                                <tr class="table-row">
                                    <td><?php echo $prod['id']; ?></td>
                                    <td><?php echo $prod['nombre_prod']; ?></td>
                                    <td><?php echo $prod['precio']; ?></td>
                                    <td><?php echo $prod['precio_vta']; ?></td>
                                    <td><?php echo $prod['stock']; ?></td>

                                    <?php $imagen = $prod['imagen']; ?>
                                    <?php $id = $prod['id']; ?>

                                    <td><img height="70px" width="85px" src="<?= base_url() ?>/assets/descargas/<?= $imagen ?>" alt="imagen-producto" style="object-fit: contain;"></td>

                                    <td>
                                        <a href="<?php print base_url('editar/' . $prod['id']); ?>" class="btn btn-primary btn-sm mt-1 btn-opciones" style="margin-right: 10px;">Editar</a>
                                        <a href="<?php echo base_url('borrar/' . $prod['id']); ?>" class="btn btn-primary btn-sm mt-1 btn-opciones">Borrar</a>
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