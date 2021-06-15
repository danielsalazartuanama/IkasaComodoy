
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Permiso-<small>Detalle</small></h1>
            <form action="<?= URL . 'permiso/save' ?>" method="post">
                <input type="text" name="idcomprobante" value="<?= $data->IdPermiso ?>">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_tablas">Tablas</label>
                            <input type="text" name="tablas" id="id_tablas" value="<?= $data->Tablas ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idtipo">Tipo usuario</label>
                    <select class="select1" id="idtipo" name="idtipo" style="width: 100%; ">
                        <?php foreach ($usuarios_tipo as $tipo) : ?>
                            <option value="<?= $tipo->IdTipo ?>"><?= $tipo->Nombre ?> </option>
                        <?php endforeach; ?>
                    </select>
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
