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
            <a href="<?= URL . 'producto/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
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
                        <th style="width: 10%;">IDUNIDAD</th>
                        <th style="width: 10%;">NOMBRE</th>
                        <th style="width: 10%;">PRECIO</th>
                        <th style="width: 10%;">PRECIOVENTA</th>
                        <th style="width: 10%;">STOCK</th>
                        <th style="width: 10%;">STOCKMINIMO</th>
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->idproduct ?></td>
                            <td><?= $row->idmarca ?></td>
                            <td><?= $row->idcateg ?></td>
                            <td><?= $row->idunidad ?></td>
                            <td><?= $row->nombre ?></td>
                            <td><?= $row->precio ?></td>
                            <td><?= $row->precioventa ?></td>
                            <td><?= $row->stock ?></td>
                            <td><?= $row->stockminimo ?></td>



                            <td>
                                <a href="<?= URL . "producto/detail/{$row->idproduct}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "producto/eliminar/{$row->idproduct}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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
<?php $this->push('scripts') ?>
<?php $this->end() ?>












<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Categoria-Detalle']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>

<?php $this->end() ?>

<!----------------------------------------------------------------------------------->