<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Producto']); ?>
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
    <h1 class="text-center">Tabla Producto</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href="<?= URL . 'producto/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 5%;">IDMARCA</th>
                        <th style="width: 5%;">IDCATEGORIA</th>
                        <th style="width: 5%;">IDUNIDAD</th>
                        <th style="width: 40%;">NOMBRE</th>
                        <th style="width: 20%;">PRECIO</th>
                        <!-- <th style="width: 10%;">PRECIOVENTA</th>
                        <th style="width: 10%;">STOCK</th>
                        <th style="width: 10%;">STOCKMINIMO</th> -->
                        <th style="width: 20%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdProduct ?></td>
                            <td><?= $row->IdMarca ?></td>
                            <td><?= $row->IdCateg ?></td>
                            <td><?= $row->IdUnidad ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Precio ?></td>
                            <!-- <td><?= $row->PrecioVenta ?></td>
                            <td><?= $row->Stock ?></td>
                            <td><?= $row->StockMinimo ?></td> -->



                            <td>
                                <a is-modal=" true" href="<?= URL . "producto/detail/{$row->IdProduct}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "producto/eliminar/{$row->IdProduct}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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
$title = 'Producto-Detalle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>
<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?>"></script>
<?php $this->end() ?>














<!----------------------------------------------------------------------------------->