<section class="container mt-3 mb-3">
    <h2>Usuarios dados de baja</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('usuarios') ?>" class="btn boton-color btn-sm">Ver activos</a>
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
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($users): ?>
                        <?php foreach ($users as $us): ?>
                            <?php $eliminado = $us['baja']; ?> 
                            <?php if ($eliminado == 'SI'): ?>

                                <tr>
                                    <td><?php echo $us['id_usuario']; ?></td>
                                    <td><?php echo $us['nombre']; ?></td>
                                    <td><?php echo $us['apellido']; ?></td>
                                    <td><?php echo $us['email']; ?></td>
                                    <td><?php echo $us['nombre_usuario']; ?></td>

                                    <?php $id = $us['id_usuario']; ?>
                                    <td style="text-align: center;">
                                        <a href="<?php echo base_url('activar-usuario/' .$us['id_usuario']); ?>" class="btn boton-color3 btn-sm">Activar</a>
                                        <a href="<?php echo base_url('bdusuario/' .$us['id_usuario']); ?>" class="btn boton-color2 btn-sm">Borrar definitivo</a>
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