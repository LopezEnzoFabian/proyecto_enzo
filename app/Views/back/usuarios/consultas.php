<section class="container mt-3 mb-3">

    <h2>Consultas</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('consulta_ya_leidos') ?>" class="btn btn-dark btn-sm m-2">Leidos</a>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <table class="table table-success table-striped" id="users-list" style="margin: 18px 0;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Mensaje</th>
                    <th>Marcar como leido</th>
                </tr>
            </thead>

            <tbody class="table-body">
                <?php if ($consulta) : ?>
                    <?php foreach ($consulta as $cons) : ?>
                        <?php $leido = $cons['leido']; ?>
                        <?php if ($leido == 'NO') : ?>

                            <tr class="table-row">
                                <td><?php echo $cons['id_consulta']; ?></td>
                                <td><?php echo $cons['nombre']; ?></td>
                                <td><?php echo $cons['apellido']; ?></td>
                                <td><?php echo $cons['email']; ?></td>
                                <td><?php echo $cons['telefono']; ?></td>
                                <td><?php echo $cons['mensaje']; ?></td>

                                <td>
                                    <a href="<?php echo base_url('consulta_leido/' . $cons['id_consulta']); ?>" class="btn btn-outline-dark rounded-circle btn-sm mt-1 fa-solid fa-check" style="aspect-ratio: 1/1; margin-left: 50%; transform: translateX(-50%);"></a>
                                </td>
                            </tr>

                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>

            </tbody>
        </table>
    </div>

</section>