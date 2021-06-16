
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Clientes-<small>Detalle</small></h1>
            <form action="<?= URL . 'cliente/save' ?>" method="post"><br>
                <input disabled type="text" name="idcliente" value="<?= $data->IdCliente ?>"><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombres" id="id_nombres" value="<?= $data->Nombres ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="id_apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="id_apellidos" value="<?= $data->Apellidos ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                
                    
                        <div class="form-group">
                            <label for="id_direccion">Direccion</label>
                            <input type="text" name="direccion" id="id_direccion" value="<?= $data->Direccion ?>" class=" form-control">
                        </div>
                 
                   
                        <div class="form-group">
                            <label for="id_telef">Telefono</label>
                            <input type="text" name="telf" id="id_telf" value="<?= $data->Telf ?>" class=" form-control">
                        </div>
                   
              
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="id_creditolimite">crédito</label>
                            <input type="number" step="0.01" name="creditolimite" id="id_creditolimite" value="<?= $data->CreditoLimite ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="id_ruc">Ruc</label>
                            <input type="text" name="ruc" id="id_ruc" value="<?= $data->Ruc ?>" class=" form-control">
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
    