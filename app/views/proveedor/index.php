<?php
$this->layout('../layouts/layout', ['title' => 'Sistema-Vestuarios| Proveedores']); ?>



<?php $this->push('styles') ?>

<?php $this->end() ?>


<?php $this->start('contents') ?>

<div class="container">
    <h1 class="text-center">Tabla Proveedores</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href="<?= URL . 'proveedor/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table id="order-listing" class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">idprovedor</th>
                        <th style="width: 15%;">nombbre</th>
                        <th style="width: 15%;">email</th>
                        <th style="width: 20%;">direccion</th>
                        <th style="width: 5%;">telefono</th>
                        <th style="width: 10%;">ruc</th>
                        <!-- <th style="width: 10%;">dni</th> -->
                        <th style="width: 30%;">accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdProveedor ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Email ?></td>
                            <td><?= $row->Direccion ?></td>
                            <td><?= $row->Telefono ?></td>
                            <td><?= $row->Ruc ?></td>
                            <!-- <td><?= $row->Dni ?></td> -->

                            <td>
                                <a is-modal="true" href="<?= URL . "proveedor/detail/{$row->IdProveedor}" ?>" class="btn btn-primary"> modificar</a>
                                <a href="<?= URL . "ptoveedor/eliminar/{$row->IdProveedor}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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
$title = 'categoria-Dealle';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php';
?>
<?php $this->stop() ?>



<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?>"></script>

<?php $this->end() ?>