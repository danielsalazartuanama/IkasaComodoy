<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Marcas|Detalle ']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents')?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Marca-<small>Detalle</small></h1>
            <form action="<?= URL .'marca/save' ?>" method="post">
            <input type="text" name="idmarca" value="<?= $data->idmarca ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="id_descripcion" value="<?= $data->descripcion ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group form-check">
                            <input type="checkbox" name="estado" id="id_estado" class="form-check-input" <?= ($data->estado == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="id_estado">Estado</label>
                        </div>
                    </div>
                    <div class="col-sm-8">

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

<!-- <?php myEcho($data)?> -->
<?php $this->stop()?>


<!-----scripts personalizados-->
<?php $this->push('scripts')?>
<?php $this->end()?>
<!----------------------------------------------------------------------------------->












