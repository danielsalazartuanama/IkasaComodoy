<?php
$this->layout('../layouts/layout', ['title' => 'Sistema-Vestuarios| Forma-Pago']); ?>


<?php $this->push('styles') ?>
<?php $this->end() ?>


<?php $this->start('contents') ?>
<div class="container">
    <h1 class="text-center">Tabla forma pago</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'formapago/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">idformapago</th>
                        <th style="width: 30%;">nombre</th>
                        <th style="width: 10%;">accion</th>
                    </tr>

                </thead>
                <tbody>

                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdFormaPago ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td>
                                <a href="<?= URL . "formapago/detail/{$row->IdFormaPago}" ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "formapago/eliminar/{$row->IdFormaPago}" ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>


<!-- <?php myEcho($data) ?> -->
<?php $this->stop() ?>


<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<?php $this->end() ?>
<!----------------------------------------------------------------------------------->