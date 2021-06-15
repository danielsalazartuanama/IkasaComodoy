<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| VENTAS']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<div class="container">
    <h1 class="text-center">Tabla VENTAS</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?= URL . 'venta/detail' ?>" class="btn btn-primary btn-block">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 5%;">USUARIO</th>
                        <th style="width: 5%;">CLIENTE</th>
                        <th style="width: 5%;">FOMA PAGO</th>
                        <th style="width: 5%;">COMPROBANTE</th>
                        <th style="width: 15%;">SERIE</th>
                        <th style="width: 10%;">NUMERO</th>
                        <th style="width: 20%;">SUBTTOTAL</th>
                        <th style="width: 10%;">IGV</th>
                        <th style="width: 10%;">TOTAL</th>
                        <th style="width: 10%;">ACCION</th>
                    </tr>

                </thead>
                <tbody>

                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row->IdVenta ?></td>
                            <td><?= $row->IdUsuario ?></td>
                            <td><?= $row->IdCliente ?></td>
                            <td><?= $row->IdFormaPago ?></td>
                            <td><?= $row->IdComprobante ?></td>
                            <td><?= $row->Serie ?></td>
                            <td><?= $row->Numero ?></td>
                            <td><?= $row->Subtotal ?></td>
                            <td><?= $row->IGV ?></td>
                            <td><?= $row->Total ?></td>
                            <td>
                                <a href="<?= URL . "venta/detail/{$row->IdVenta}" ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= URL . "venta/eliminar/{$row->IdVenta}" ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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


<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<?php $this->end() ?>
<!----------------------------------------------------------------------------------->