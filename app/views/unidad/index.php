<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| UNIDADES']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<div class="container">
    <h1 class="text-center">Tabla unidades</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'unidad/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
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
                            <td><?= $row->IdUnidad ?></td>
                            <td><?= $row->Nombre ?></td>
                            <td>
                                <a href="<?= URL . "unidad/detail/{$row->IdUnidad}" ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                <!-- <a href="<?= URL . "unidad/eliminar/{$row->IdUnidad}" ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                <a href="<?= URL . "categoria/eliminar/{$row->IdUnidad}" ?>" class=" btn btn-primay">Aceptar</a>
            </div>
        </div>
    </div>
</div>

<!-- <?php myEcho($data) ?> -->
<?php $this->stop() ?>


<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<?php $this->end() ?>
<!----------------------------------------------------------------------------------->