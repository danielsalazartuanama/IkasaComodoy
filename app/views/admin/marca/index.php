<?php
$this->layout('../../layouts/layout', ['title' => 'HTGVentas| MARCAS']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<div class="container">
    <h1 class="text-center">Tabla Marca</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href="<?= URL . 'marca/detail' ?> " class="btn btn-primary btn-block">Nuevo</a>
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
                            <td><?= $row->IdMarca ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td><?= $row->Descripcion ?></td>
                            <td>
                                <a is-modal="true" href="<?= URL . "marca/detail/{$row->IdMarca}" ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "marca/eliminar/{$row->IdMarca}" ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>



<!-- <?php myEcho($data) ?> -->
<?php $this->stop() ?>




<?php $this->start('myModal') ?>
<?php
$title = 'Marca-Dealle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>


<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'assets/js/scripts/modal_crud.js' ?>"></script>
<?php $this->end() ?>

<!-----scripts personalizados-->

<!----------------------------------------------------------------------------------->