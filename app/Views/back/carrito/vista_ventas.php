<section class="container mt-3 mb-3">

    <?php $session = session();
        $nombre = $session->get('nombre');
        $perfil = $session->get('id_perfil');
    ?>

    <h2 <?php if ($perfil == '2') echo 'style="border-color: #023e8a; margin-bottom: 65px;"'; ?> style="margin-bottom: 65px;"><?php echo ($perfil == 1) ? 'Ventas' : 'Mis compras'; ?></h2>
    
    <?php if (!empty($ventaDetalle)): ?>
        <div class="mt-3">
            <div class="table-responsive table-light">
                <table class="table table-bordered table-hover table-striped ml-3" >
                    <thead>
                        <tr>
                            <th>ID Venta</th>
                            <th>Total Venta</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php foreach ($ventaDetalle as $venta): ?>
                            <tr>
                                <td><?= $venta['id_vta_cabe'] ?></td>
                                <td><?= "$" . $venta['total_venta'] ?></td>
                                <td><?= $venta['fecha'] ?></td>
                                <td style="text-align: center;">
                                    <a <?php if ($perfil == '1') echo 'class="btn boton-color btn-sm"'; ?> href="<?= base_url('factura/' . $venta['id_vta_cabe']) ?>" class="btn boton-color3">Ver Factura</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <p>No se encontraron ventas.</p>
    <?php endif; ?>
</section>