
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Forma Pago-<small>Detalle</small></h1>
            <form action="<?= URL . 'formapago/save' ?>" method="post">
                <input type="text" name="idtipo" value="<?= $data->IdFormaPago ?>">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="id_nombre">Nombre</label>
                        <input type="text" name="nombre" id="id_nombre" value="<?= $data->Nombre ?>" class=" form-control">
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
