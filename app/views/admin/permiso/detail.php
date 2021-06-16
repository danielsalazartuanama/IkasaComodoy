
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Permiso-<small>Detalle</small></h1>
            <form action="<?= URL . 'permiso/save' ?>" method="post"><br>
                <input disabled type="text" name="idcomprobante" value="<?= $data->IdPermiso ?>"><br><br>
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
                <div class="modal-footer">
                <button type="submit" class="btn btn-success">Registrar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
            </div> 
            </form>

        </div>
    </div>
