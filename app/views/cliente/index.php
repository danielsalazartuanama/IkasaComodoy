<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Clientes']); ?>
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
    <h1 class="text-center">Tabla Clientes</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'cliente/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 20%;">NOMBRE</th>
                        <th style="width: 20%;">APELLIDO</th>
                        <th style="width: 10%;">DIRECCION</th>
                        <th style="width: 10%;">TELEFONO</th>
                        <th style="width: 10%;">CRÉDITOLIMITE</th>
                        <th style="width: 10%;">RUC</th>
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->idcliente ?></td>
                            <td><?= $row->nombres ?></td>
                            <td><?= $row->apellidos ?></td>
                            <td><?= $row->direccion ?></td>
                            <td><?= $row->telf ?></td>
                            <td><?= $row->creditolimite ?></td>
                            <td><?= $row->ruc ?></td>

                            <td>
                                <a href="<?= URL . "cliente/detail/{$row->idcliente}" ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "cliente/eliminar/{$row->idcliente}" ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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