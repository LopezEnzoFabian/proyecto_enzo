<section class="container mt-3 mb-3">

    <h2>Usuarios activos</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('dadosbaja') ?>" class="btn boton-color btn-sm">Ver bajas</a>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <div class="table-responsive table-light">
            <table class="table table-bordered table-hover table-striped ml-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Banear</th>
                    </tr>
                </thead>

                <tbody class="table-body">
                    <?php if ($users) : ?>
                        <?php foreach ($users as $us) : ?>
                            <?php $eliminado = $us['baja']; ?>
                            <?php if ($eliminado == 'NO') : ?>

                                <tr class="table-row">
                                    <td><?php echo $us['id_usuario']; ?></td>
                                    <td><?php echo $us['nombre']; ?></td>
                                    <td><?php echo $us['apellido']; ?></td>
                                    <td><?php echo $us['email']; ?></td>
                                    <td><?php echo $us['nombre_usuario']; ?></td>

                                    <?php $id = $us['id_usuario']; ?>

                                    <td style="text-align: center;">
                                        <a href="<?php echo base_url('borrar-usuario/' . $us['id_usuario']); ?>" class="btn boton-color3 btn-sm">Dar de baja</a>
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