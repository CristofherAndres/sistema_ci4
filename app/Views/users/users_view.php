<div class="container mt-5">

    <div>
        <a href="<?php echo base_url() ?>/usuarios/formulario" class="btn btn-primary right">Agregar Usuario</a>
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>

            <tbody>
                <!-- Existen datos -->
                <?php if ($users) : ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td>
                                <a href="<?php echo base_url('/usuarios/eliminar/' . $user['id']) ?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                <a href="<?php echo base_url('/usuarios/actualizar/' . $user['id']) ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- No hay datos en la tabla -->
                <?php else : ?>
                    <tr>
                        <td>No hay datos</td>
                    </tr>
                <?php endif; ?>

            </tbody>

        </table>

    </div>


</div>