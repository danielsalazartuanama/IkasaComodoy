<?php
$this->layout('../layouts/layout', ['title' => 'Sistema-Vestuarios| Cliente']); ?>


<?php $this->push('styles') ?>

<?php $this->end() ?>

<?php $this->start('contents') ?>

<div class="container">
    <h1 class="text-center">Tabla Clientes</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href="<?= URL . 'cliente/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">idcliente</th>
                        <th style="width: 20%;">nombre</th>
                        <th style="width: 20%;">apellido</th>
                        <th style="width: 10%;">direccion</th>
                        <th style="width: 10%;">telefono</th>
                        <th style="width: 10%;">ru</th>
                        <th style="width: 10%;">accion</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdCliente ?></td>
                            <td><?= $row->Nombres ?></td>
                            <td><?= $row->Apellidos ?></td>
                            <td><?= $row->Direccion ?></td>
                            <td><?= $row->Telf ?></td>
                            <td><?= $row->CreditoLimite ?></td>
                            <td><?= $row->Ruc ?></td>

                            <td>
                                <a is-modal="true" href="<?= URL . "cliente/detail/{$row->IdCliente}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "cliente/eliminar/{$row->IdCliente}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php $this->stop() ?>


<?php $this->start('myModal') ?>
<?php
$title = 'Cliente-Dealle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>
<?php $this->stop() ?>



<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?>"></script>

<?php $this->end() ?>