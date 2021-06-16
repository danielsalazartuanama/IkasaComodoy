<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Usuario']); ?>
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
    <h1 class="text-center">Tabla Usuarios</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'usuario/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 5%;">IDTIPO</th>
                        <th style="width: 5%;">AAPELLIDOS</th>
                        <th style="width: 10%;">NOMBRES</th>
                        <th style="width: 10%;">TELEFONO</th>
                        <th style="width: 5%;">USUARIO</th>
                        <!-- <th style="width: 10%;">CLAVE</th>
                        <th style="width: 10%;">CORREO</th>
                        <th style="width: 10%;">FCREACION</th>
                        <th style="width: 20%;">FELIMINACION</th> -->
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdUsuario ?></td>
                            <td><?= $row->IdTipo ?></td>
                            <td><?= $row->Apellidos ?></td>
                            <td><?= $row->Nombres ?></td>
                            <td><?= $row->Telf ?></td>
                            <td><?= $row->Usuario ?></td>
                            <!-- <td><?= $row->Clave ?></td>
                            <td><?= $row->Correo ?></td>
                            <td><?= $row->created_at ?></td>
                            <td><?= $row->updated_at ?></td> -->

                            <td>
                                <a href="<?= URL . "usuario/detail/{$row->IdUsuario}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "usuario/eliminar/{$row->IdUsuario}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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










