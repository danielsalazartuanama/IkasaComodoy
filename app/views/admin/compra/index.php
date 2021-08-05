<?php
$this->layout('../../layouts/admin', ['title' => 'HTGVentas| Compras']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l">
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Compras
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../inicio/index">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Compras</h4>

                        <div class="btn-group">
                            <a href="<?= URL . 'compra/detail' ?>" type="button" class="btn btn-primary btn-icon-text mb-4">Agregar<i class="btn-icon-append fas fa-plus"></i></a>
                        </div>
                        <!-- <div class="btn-group">
                            <input type="checkbox" style="width: 50px;height: 50px;position: relative;left: 25px; " ; name="estado" id="id_estado" class="form-check-input" <?php if ($estado  == "1") echo "checked"; ?> checked>
                            <label class="form-check-label" style="left: 45px;position: relative;" for="id_estado"><strong>Estado</strong></label>
                        </div> -->
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Estado
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="../compra/index">True</a>
                                <a class="dropdown-item" href="../compra/indexd">False</a>
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive">

                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IdProvedor</th>                                    
                                    <th>Dato compra</th>
                                    <th>Impuesto</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row) : ?>
                                    <tr>
                                        <td><?= $row->IdCompras ?></td>
                                        <td><?= $row->IdProve ?></td>                                        
                                        <td><?= $row->DatoCompra ?></td>
                                        <td><?= $row->Impuesto ?></td>
                                        <td><?= $row->Total ?></td>
                                        <td>


                                            <form action="<?= URL . "compra/eliminar/{$row->IdCompras}" ?>" class="formulario-eliminar" method="POST">
                                                <a is-modal="true" href="<?= URL . "compra/detail/{$row->IdCompras}" ?>" class="btn btn-primary"> <i style="height: 25px;" class="far fa-edit"></i></a>

                                                <button type="submit" class="btn btn-warning" style="margin-left: 4px;"><i style="height: 25px;" class="fa fa-trash"></i></button>
                                            </form>

                                            <!-- <a style="height: 30px;" href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-trash"></i>
                                    </a> -->
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
<?php $this->push('scripts') ?>

<script src="<?= URL . 'assets/js/scripts/modal_crud.js' ?>"></script>
<script src="<?= URL . 'assets/js/scripts/alert.js' ?>"></script>

<script src="<?= URL . 'melody/js/data-table.js' ?>"></script>
<?php $this->end() ?>


<!----------------------------------------------------------------------------------->