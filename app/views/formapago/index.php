<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| FORMAPAGO']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<div class="container">
    <h1 class="text-center">Tabla de pagos</h1>
    <div class="row">
        <div class="col-sm-4">
            <a is-modal="true" href=" <?= URL . 'formapago/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 30%;">NOMBRE</th>
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>

                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdFormaPago ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td>
                                <a is-modal="true" href="<?= URL . "formapago/detail/{$row->IdFormaPago}" ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "formapago/eliminar/{$row->IdFormaPago}" ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
$title = 'categoria-Dealle Insertar';
$size = NORMAL;
include_once MAINPATH . 'app/views/layouts/partials/_modalGenerico.php'; ?>

<?php $this->stop() ?>
<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'assets/js/scripts/modal_crud.js' ?>"></script>
<?php $this->end() ?>
<!----------------------------------------------------------------------------------->