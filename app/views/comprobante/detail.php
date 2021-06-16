<?php
$this->layout('../layouts/layout', ['title' => 'Sistema-Vestuarios| Comprobante']); ?>

<?php $this->push('styles') ?>
<?php $this->end() ?>

<?php $this->start('contents') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Detalle Comprobante</h1>
            <form action="<?= URL . 'comprobante/save' ?>" method="post">
                <input type="text" name="idcomprobante" value="<?= $data->IdComprobante ?>">
                <div class="row">
                    <div class="col-sm-4">
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

    <?php $this->push('scripts') ?>
    <?php $this->end() ?>