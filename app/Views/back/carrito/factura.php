<section class="container container-table-productos mt-3 mb-3">

    <?php $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
    ?>

    <h2 <?php if ($perfil == '2') echo 'style="border-color: #023e8a; margin-bottom: 65px;"'; ?> style="margin-bottom: 65px;"><?php echo ($perfil == 1) ? 'Factura de venta' : 'Factura de compra'; ?></h2>

    <div class="mt-3">
        <div class="table">
            <h4 class="" style="margin-bottom: 65px;">Detalles de la Venta</h4>

            <table class="stripe">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
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

    <div>
        <h4 class="vc-encabezados" style="margin-top: 65px;">Total de la Venta: $<?= $total_venta; ?></h4>
    </div>

</section>