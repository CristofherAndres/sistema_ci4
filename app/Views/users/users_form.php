<div class="container mt-5">
    <h2>Formulario - Agregar Usuario</h2>
    <form action="<?php echo base_url('usuarios/enviar-form')?>" method="POST" >
        <div class="row mt-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" name="name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Email" aria-label="Last name" name="email">
            </div>
        </div>

        <div class="my-3 mx-auto">
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </div>
    </form>

</div>