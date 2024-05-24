<section class="container mt-3 mb-3">
    <h2>Usuarios dados de baja</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('usuarios') ?>" class="btn btn-success">Activos</a>
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
                                    <td>
                                        <a href="<?php echo base_url('activar-usuario/' .$us['id_usuario']); ?>" class="btn btn-primary btn-sm mt-1" style="margin-right: 10px;">Activar</a>
                                        <a href="<?php echo base_url('bdusuario/' .$us['id_usuario']); ?>" class="btn btn-danger btn-sm mt-1">Borrar definitivo</a>
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