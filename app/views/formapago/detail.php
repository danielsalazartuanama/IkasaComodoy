<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Formapago|Detalle ']);?>
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
            <h1>Forma Pago-<small>Detalle</small></h1>
            <form action="<?= URL . 'usuario_tipo/save' ?>" method="post">
            <input type="text" name="idtipo" value="<?= $data->idtipo ?>">
               
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->nombre ?>" class=" form-control">
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