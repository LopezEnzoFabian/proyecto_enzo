<section class="container mt-3 mb-3">

    <h2>Consultas</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('consulta_contactos') ?>" class="btn boton-color btn-sm m-2">Ver no leídos</a>
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
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Mensaje</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody class="table-body">
                    <?php if ($consulta) : ?>
                        <?php foreach ($consulta as $cons) : ?>
                            <?php $leido = $cons['leido']; ?>
                            <?php if ($leido == 'SI') : ?>

                                <tr class="table-row">
                                    <td><?php echo $cons['id_consulta']; ?></td>
                                    <td><?php echo $cons['nombre']; ?></td>
                                    <td><?php echo $cons['apellido']; ?></td>
                                    <td><?php echo $cons['email']; ?></td>
                                    <td><?php echo $cons['telefono']; ?></td>
                                    <td><?php echo $cons['mensaje']; ?></td>

                                    <td style="text-align: center;">
                                        <a href="<?php echo base_url('borrarconsulta/' . $cons['id_consulta']); ?>" class="btn boton-color2 btn-sm mt-1">Borrar</a>
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