<?php
$this->layout('../../layouts/admin', ['title' => 'IkasaComodoy| Producto']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l">
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<!-- <?php myEcho($data) ?> -->

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">productos</li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">productos</h4>

                        <div class="btn-group">
                            <a is-modal="true" href="<?= URL . 'producto/detail' ?>" type="button" class="btn btn-primary btn-icon-text mb-4">Agregar<i class="btn-icon-append fas fa-plus"></i></a>
                        </div>

                    </div>

                    <div class="table-responsive">

                        <table id="order-listing" class="table">
                            <thead>

                                <th style="width: 5%;">ID</th>

                                <th style="width: 15%;">NOMBRE</th>
                                <th style="width: 10%;">PRECIOVENTA</th>
                                <th style="width: 10%;">STOCK</th>
                                <th style="width: 30%;">Imagen</th>
                                <th style="width: 20%;">ACCION</th>

                            </thead>
                            <tbody>
                                <?php foreach ($data as $row) : ?>
                                    <tr>

                                        <td><?= $row->IdProduct ?></td>

                                        <td><?= $row->Nombre ?></td>
                                        <td> <?= $row->PrecioVenta ?></td>
                                        <td><?= $row->Stock ?></td>
                                        <td> <img src="<?= URL . 'img/ ' . $row->Imagen ?>" class="img-sec" alt="hello"></td>

                                        <td>

                                            <form action="<?= URL . "producto/eliminar/{$row->IdProduct}" ?>" class="formulario-eliminar" method="POST">
                                                <a is-modal="true" href="<?= URL . "producto/detail/{$row->IdProduct}" ?>" class="btn btn-primary"> <i style="height: 25px;" class="far fa-edit"></i></a>
                                                <button type="submit" class="btn btn-warning" style="margin-left: 4px;"><i style="height: 25px;" class="fa fa-trash"></i></button>
                                            </form>





                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php $this->stop() ?>

<!-----scripts personalizados-->
<?php $this->start('myModal') ?>
<?php
$title = 'Producto-detalle';
$size = PEQUEÑO;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>
<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'assets/js/scripts/alert.js' ?>"></script>
<script src="<?= URL . 'assets/js/scripts/modal_crud.js' ?>"></script>
<script src="<?= URL . 'melody/js/data-table.js' ?>"></script>
<?php $this->end() ?>