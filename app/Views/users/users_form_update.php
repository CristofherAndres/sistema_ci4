<div class="container mt-5">
    <h2>Formulario - Actualizar Usuario</h2>
    <form action="<?php echo base_url('usuarios/actualizar')?>" method="POST" >

    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">

        <div class="row mt-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" name="name" value=<?= esc( $user['name'] )?>>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Email" aria-label="Last name" name="email" value=<?php echo $user['email'] ?>>
            </div>
        </div>

        <div class="my-3 mx-auto">
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            <a href="<?php echo base_url('/usuarios') ?>" class="btn btn-outline-success">Volver</a>
        </div>
    </form>

</div>