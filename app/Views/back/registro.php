<div class="row align-items-center justify-content-center fuente-textos">
    <div class="col col-6 col-lg-6 mt-3 border border-4">
        <div class="row mt-2"><!-- TITULO REGISTRO -->
            <div class="container mb-3 text-center">
                <h2 class="fs-4 text-center mt-3">Registro</h2>
            </div>
        </div>
        <form class="p-3">
            <div class="row mb-3"><!-- NOMBRE Y APELLIDO-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="">
                        <label for="nombre">Nombre</label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellido" placeholder="">
                        <label for="apellido">Apellido</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!-- CUIDAD Y LOCALIDAD -->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cuidad" placeholder="">
                        <label for="cuidad">Cuidad</label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="localidad" placeholder="+54">
                        <label for="localidad">Localidad</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!-- DIRECCION Y CODIGO POSTAL-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="direccion" placeholder="">
                        <label for="direccion">Dirección</label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="codigopostal" placeholder="">
                        <label for="codigopostal">Código postal</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!-- EMAIL Y TELEFONO-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" placeholder="">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="telefono" placeholder="">
                        <label for="telefono">Teléfono</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!-- NOMBRE DE USUARIO Y PASSWORD-->
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nameusuario" placeholder="">
                        <label for="nameusuario">Nombre de usuario</label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" placeholder="">
                        <label for="password">Password</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3"><!-- BOTONES Y LINK A LOGIN -->
                <div class="col">
                    <button type="submit" class="btn btn-dark mb-3">Crear</button>
                    <button type="reset" class="btn btn-danger mb-3">Limpiar</button>
                </div>
            </div>
            <div class="row mb-3"><!-- LINK AL LOGIN -->
                <p>¿Ya tenés cuenta?, hace clik <a href="<?php echo base_url('login'); ?>" data-bs-toggle="tooltip" title="Tooltip">acá</a> y inicia tu sesión.</p>
            </div>  
        </form>
    </div>
</div>