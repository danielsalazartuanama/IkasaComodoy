<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Categorias']); ?>
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
    <h1 class="text-center">Tabla Categorias</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href="<?= URL . 'categoria/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 30%;">NOMBRE</th>
                        <th style="width: 50%;">DESCRIPCION</th>
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdCateg ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Descripcion ?></td>
                            <td>
                                <a is-modal="true" href="<?= URL . "categoria/detail/{$row->IdCateg}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <!-- <a href="<?= URL . "categoria/eliminar/{$row->IdCateg}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> -->
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



<?php $this->start('myModal') ?>
<?php
$title = 'categoria-Dealle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>
<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'assets/js/scripts/modal_crud.js' ?>"></script>
<?php $this->end() ?>





<!----------------------------------------------------------------------------------->