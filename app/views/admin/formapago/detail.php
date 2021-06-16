
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Forma Pago-<small>Detalle</small></h1>
            <form action="<?= URL . 'formapago/save' ?>" method="post">
                <input  disabled type="text" name="idtipo" value="<?= $data->IdFormaPago ?>">

               
                    <div class="form-group">
                        <label for="id_nombre">Nombre</label>
                        <input type="text" name="nombre" id="id_nombre" value="<?= $data->Nombre ?>" class=" form-control">
                    </div>
               

                <br>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success">Registrar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
            </div> 
            </form>

        </div>
    </div>
