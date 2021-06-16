<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Usuario-<small>Detalle</small></h1>
            <form action="<?= URL . 'usuario/save' ?>" method="post">
                <input type="text" name="idusuario" value="<?= $data->IdUsuario ?>">
                <div class="form-group">
                    <label for="idtipo">Tipo de usuario</label>
                    <select class="select1" id="idtipo" name="idtipo" style="width: 100%; ">
                        <?php foreach ($tipos as $tipo) : ?>
                            <option value="<?= $tipo->IdTipo ?>"><?= $tipo->Nombre ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombres">Nombre</label>
                            <input type="text" name="nombres" id="id_nombres" value="<?= $data->Nombres ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="id_apellidos" value="<?= $data->Apellidos ?>" class=" form-control">
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
                            <label for="id_telf">Telefono</label>
                            <input type="text" name="telf" id="id_telf" value="<?= $data->Telf ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_usuario">Usuario</label>
                            <input type="text" name="usuario" id="id_usuario" value="<?= $data->Usuario ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_clave">Clave</label>
                            <input type="text" name="clave" id="id_clave" value="<?= $data->Clave ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_correo">Correo</label>
                            <input type="text" name="correo" id="id_correo" value="<?= $data->Correo ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form group">
                            <input type="checkbox" style="width: 50px;height: 50px;position: relative;left: 25px; " ; name="estado" id="id_estado" class="form-check-input" <?= ($data->Estado == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" style="left: 45px;position: relative;" for="id_estado"><strong>Estado</strong></label>
                        </div>
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