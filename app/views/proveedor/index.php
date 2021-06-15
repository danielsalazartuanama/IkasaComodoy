<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| proveedores']); ?>
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
    <h1 class="text-center">Tabla preveedor</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'proveedor/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 15%;">NOMBRE</th>
                        <th style="width: 20%;">DIRECCION</th>
                        <th style="width: 15%;">EMAIL</th>
                        <th style="width: 10%;">TELEFONO</th>
                        <th style="width: 10%;">RUC</th>
                        <th style="width: 10%;">DNI</th>
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdProve ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Email ?></td>
                            <td><?= $row->Direccion ?></td>
                            <td><?= $row->Telefono ?></td>
                            <td><?= $row->Ruc ?></td>
                            <td><?= $row->Dni ?></td>
                            <td>
                                <a href="<?= URL . "proveedor/detail/{$row->IdProve}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <!-- <a href="<?= URL . "proveedor/eliminar/{$row->IdProve}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> -->
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <b class="modal-title" id="exampleModalLabel">eliminar</b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Esta seguro de eliminar Categoria</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                <a href="<?= URL . "categoria/eliminar/{$row->IdCateg}" ?>" class=" btn btn-primay">Aceptar</a>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>



<!-----scripts personalizados-->
<?php $this->push('scripts') ?>

<?php $this->end() ?>





<!----------------------------------------------------------------------------------->