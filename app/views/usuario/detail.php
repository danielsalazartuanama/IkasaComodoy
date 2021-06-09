<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Usario|Detalle ']);?>
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
            <h1>Usuario-<small>Detalle</small></h1>
            <form action="<?= URL . 'usuario/save' ?>" method="post">
            <input type="text" name="idusuario" value="<?= $data->idusuario ?>">
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
                            <label for="id_telef">Telefono</label>
                            <input type="text" name="telef" id="id_telef" value="<?= $data->telef ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_usuario">Usuario</label>
                            <input type="text" name="usuario" id="id_usuario" value="<?= $data->usuario ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_clave">Clave</label>
                            <input type="text" name="clave" id="id_clave" value="<?= $data->clave ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_correo">Correo</label>
                            <input type="text" name="correo" id="id_correo" value="<?= $data->correo ?>" class=" form-control">
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