

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Proveedor-<small>Detalle</small></h1>
            <form action="<?= URL . 'proveedor/save' ?>" method="post">
                <input type="text" name="idprove" value="<?= $data->IdProve ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->Nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_email">Email</label>
                            <input type="text" name="email" id="id_email" value="<?= $data->Email ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="id_direccion">Direccion</label>
                            <input type="text" name="direccion" id="id_direccion" value="<?= $data->Direccion ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_telefono">telefono</label>
                            <input type="text" name="telefono" id="id_telefono" value="<?= $data->Telefono ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_ruc">Ruc</label>
                            <input type="text" name="ruc" id="id_ruc" value="<?= $data->Ruc ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_dni">DNI</label>
                            <input type="text" name="dni" id="id_dni" value="<?= $data->Dni ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group form-check">
                            <input type="checkbox" name="estado" id="id_estado" class="form-check-input" <?= ($data->Estado == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="id_estado">Estado</label>
                        </div>
                    </div>
                    <div class="col-sm-8">

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form group">
                            <button type="submit" class="btn btn-primary btn-block"> Guardar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>