<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Categorias']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>

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
                            <td><?= $row->IdCategoria ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Descripcion ?></td>
                            <td>
                                <a is-modal="true" href="<?= URL . "categoria/detail/{$row->IdCategoria}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "categoria/eliminar/{$row->IdCategoria}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<?php $this->stop() ?>



<?php $this->start('myModal') ?>
<?php
$title = 'categoria-Dealle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>
<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?>"></script>

<?php $this->end() ?>





<!----------------------------------------------------------------------------------->