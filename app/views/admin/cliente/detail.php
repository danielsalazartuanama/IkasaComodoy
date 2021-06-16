<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Clientes-<small>Detalle</small></h1>
            <form id="myForm" action="<?= URL . 'cliente/save' ?>" method="post">
                <input type="text" name="idcliente" value="<?= $data->IdCliente ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_direccion">Direccion</label>
                            <input type="text" name="direccion" id="id_direccion" value="<?= $data->Direccion ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_telef">Telefono</label>
                            <input type="text" name="telf" id="id_telf" value="<?= $data->Telf ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_creditolimite">crédito</label>
                            <input type="number" step="0.01" name="creditolimite" id="id_creditolimite" value="<?= $data->CreditoLimite ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_ruc">Ruc</label>
                            <input type="text" name="ruc" id="id_ruc" value="<?= $data->Ruc ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">

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