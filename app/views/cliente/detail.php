<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Cliente|Detalle ']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<!-- <?php myEcho($data) ?> -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Clientes-<small>Detalle</small></h1>
            <form action="<?= URL . 'cliente/save' ?>" method="post">
            <input type="text" name="idcliente" value="<?= $data->idcliente ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="id_apellidos" value="<?= $data->apellidos ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_direccion">Direccion</label>
                            <input type="text" name="direccion" id="id_direccion" value="<?= $data->direccion ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_telef">Telefono</label>
                            <input type="text" name="telef" id="id_telef" value="<?= $data->telef ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_creditolimite">crédito</label>
                            <input type="text" name="creditolimite" id="id_creditolimite" value="<?= $data->creditolimite ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_ruc">Ruc</label>
                            <input type="text" name="ruc" id="id_ruc" value="<?= $data->ruc ?>" class=" form-control">
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
    <?php $this->stop() ?>

    <!-----scripts personalizados-->
    <?php $this->push('scripts') ?>
    <?php $this->end() ?>