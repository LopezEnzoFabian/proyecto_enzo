<div class="container mt-3 mb-3">
    <div class="border border-2 p-3">
        <?php
        $session = session();
        $nombre = $session->get('nombre');
        $perfil = $session->get('id_perfil');
        ?>

        <h2 class="d-flex justify-content-between align-items-center border-bottom border-black pb-3">
            <span><?php echo ($perfil == '1') ? 'Factura' : 'Factura'; ?></span>
            <span>B</span>
            <img src="<?php echo base_url('/'); ?>assets/img/gamershoplogo.png" class="d-block w-20 header-logo">
            <h6>Nro de Factura: <?php echo $ventaDetalle[0]['id_vta_cabe'] ?></h6>
            <h6>Fecha: <?php echo $ventaDetalle[0]['fecha'] ?></h6>
        </h2>

        <div class="mt-3">
            <h6>Cliente: <?php echo $ventaDetalle[0]['nombre'] . " " . $ventaDetalle[0]['apellido'] ?></h6>
            <h6>Domicilio: <?php echo $ventaDetalle[0]['direccion'] ?></h6>
            <h6>Localidad: <?php echo $ventaDetalle[0]['localidad'] ?></h6>
        </div>

        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $total_venta = 0 ?>
                            <?php foreach ($ventaDetalle as $detalle) : ?>
                                <tr>
                                    <td><?= $detalle['nombre_prod']; ?></td>
                                    <td><?= $detalle['cantidad']; ?></td>
                                    <td><?= "$" . $detalle['precio_vta']; ?></td>
                                    <td><?= "$" . $detalle['cantidad'] * $detalle['precio_vta']; ?></td>
                                </tr>
                                <?php $total_venta += $detalle['cantidad'] * $detalle['precio_vta']; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h4 class="mt-5">Total: $<?= $total_venta; ?></h4>
            </div>
        </div>
    </div>
</div>