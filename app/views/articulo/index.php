<?php
$this->layout('../layouts/layout', ['title' => 'Sistema-Vestuarios| Articulos']); ?>


<?php $this->push('styles') ?>

<?php $this->end() ?>

<?php $this->start('contents') ?>

<div class="container">
    <h1 class="text-center">Tabla Articulos</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href="<?= URL . 'articulo/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%;">idarticulo</th>
                        <th style="width: 5%;">idcategoria</th>
                        <th style="width: 40%;">nombre</th>
                        <th style="width: 20%;">precio</th>
                        <th style="width: 15%;">precioventa</th>
                        <th style="width: 15%;">stock</th>
                        <th style="width: 10%;">stockminimo</th>
                        <th style="width: 20%;">accion</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdArticulo ?></td>
                            <td><?= $row->IdCategoria ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Precio ?></td>
                            <td><?= $row->PrecioVenta ?></td>
                            <td><?= $row->Stock ?></td>
                            <td><?= $row->StockMinimo ?></td>
                            <td>
                                <a is-modal=" true" href="<?= URL . "articulo/detail/{$row->IdArticulo}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "articulo/eliminar/{$row->IdArticulo}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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
$title = 'Articulo-Detalle';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>
<?php $this->stop() ?>


<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?>"></script>
<?php $this->end() ?>














<!----------------------------------------------------------------------------------->