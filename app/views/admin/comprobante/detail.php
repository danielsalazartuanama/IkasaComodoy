<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Comprobante-<small>Detalle</small></h1>
            <form action="<?= URL . 'comprobante/save' ?>" method="post"><br>
                <input disabled type="text" name="idcomprobante" value="<?= $data->IdComprobante ?>"><br><br>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->Nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">

                        </div>
                    </div>
                </div>


                <br>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success">Registrar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
            </div> 
            </form>

        </div>
    </div>