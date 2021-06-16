<?php

$this->layout('../layouts/layout', ['title' => 'Sistema-Vestuarios| Comprobante']); ?>


<?php $this->push('styles') ?>
<?php $this->end() ?>


<?php $this->start('contents') ?>
<div class="container">
    <h1 class="text-center">Tabla Comprobantes</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'comprobante/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 40%;">idcomprobante</th>
                        <th style="width: 40%;">nombre</th>
                        <th style="width: 20%;">acciion</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdComprobante ?></td>
                            <td><?= $row->Nombre ?></td>


                            <td>
                                <a href="<?= URL . "comprobante/detail/{$row->IdComprobante}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "comprobante/eliminar/{$row->IdComprobante}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>
    </div>
</div>
<?php $this->stop() ?>

<?php $this->push('scripts') ?>
<?php $this->end() ?>