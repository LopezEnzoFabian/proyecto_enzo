<div class="row align-items-center justify-content-center fuente-textos">
    <div class="col col-lg-6 col-md-6 mt-3 border border-4">
    <h2 class="fs-4 text-center mt-3">Iniciar sesión</h2>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" name="nombreusuario" placeholder="usuario">
                <label for="nombreusuario">Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="password">
                <label for="password">Contraseña</label>
            </div>
            <div class="container">
                <p><a class="btn boton-color" href="<?php echo base_url('registro'); ?>">Entrar</a></p>
                <p>¿No tenés cuenta?, ingresa acá <a class="btn boton-color2" href="<?php echo base_url('registro'); ?>">Crear Cuenta</a> y registrate con nosotros.</p>
            </div>
    </div>
</div>