<section class="container mt-3 mb-3">
    <h2>Productos</h2>
    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('product-form') ?>" class="btn boton-color btn-sm" style="margin-right: 5px;">Agregar</a>
        <a href="<?php echo base_url('eliminados') ?>" class="btn boton-color2 btn-sm">Eliminados</a>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <div class="table-responsive table-light">
            <table class="table table-bordered table-hover table-striped ml-3">
                <!-- <table class="table table-striped row-border" id="users-list" style="width:100%"> -->
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
                            <?php if ($eliminado == 'NO') : ?>
    
                                <tr class="table-row">
                                    <td><?php echo $prod['id_producto']; ?></td>
                                    <td><?php echo $prod['nombre_prod']; ?></td>
                                    <td><?php echo "$" . $prod['precio']; ?></td>
                                    <td><?php echo "$" . $prod['precio_vta']; ?></td>
                                    <td><?php echo $prod['stock']; ?></td>
    
                                    <?php $imagen = $prod['imagen']; ?>
                                    <?php $id = $prod['id_producto']; ?>
    
                                    <td><img height="70px" width="85px" src="<?= base_url() ?>/assets/descargas/<?= $imagen ?>" alt="imagen-producto" style="object-fit: contain;"></td>
    
                                    <td style="text-align: center;">
                                        <a href="<?php print base_url('editar/' . $prod['id_producto']); ?>" class="btn boton-color3 btn-sm mt-3">Editar</a>
                                        <a href="<?php echo base_url('borrar/' . $prod['id_producto']); ?>" class="btn boton-color2 btn-sm mt-3">Borrar</a>
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