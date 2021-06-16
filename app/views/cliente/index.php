<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Clientes']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l">
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<!-- <?php myEcho($data) ?> -->
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
                        <th style="width: 10%;">ID</th>
                        <th style="width: 20%;">NOMBRE</th>
                        <th style="width: 20%;">APELLIDO</th>
                        <th style="width: 10%;">DIRECCION</th>
                        <th style="width: 10%;">TELEFONO</th>
                        <th style="width: 10%;">CRÉDITOLIMITE</th>
                        <th style="width: 10%;">RUC</th>
                        <th style="width: 10%;">ACCION</th>
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

<!-----scripts personalizados-->
<?php $this->start('myModal') ?>
<?php
$title = 'Cliente-Dealle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>
<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?>"></script>

<?php $this->end() ?>