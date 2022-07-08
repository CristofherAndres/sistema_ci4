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
                                <a href="#">Eliminar</a>
                                <a href="#">Editar</a>
                                <a href="#">Ver</a>
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