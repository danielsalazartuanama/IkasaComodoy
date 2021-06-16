<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Marca-<small>Detalle</small></h1>
            <form id="myForm" action="<?= URL . 'marca/save' ?>" method="post">
                <input type="text" name="idmarca" value="<?= $data->IdMarca ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->Nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="id_descripcion" value="<?= $data->Descripcion ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form group">
                            <input type="checkbox" style="width: 50px;height: 50px;position: relative;left: 25px; " ; name="estado" id="id_estado" class="form-check-input" <?= ($data->Estado == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" style="left: 45px;position: relative;" for="id_estado"><strong>Estado</strong></label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div id="mis_errores"></div>
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