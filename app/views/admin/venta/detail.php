<?php
$this->layout('../../layouts/admin', ['title' => 'IkasaComodoy| Venta']); ?>
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
            Registro de ventas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../inicio/index">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="../venta/index">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de ventas</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Ventas</h4>
                    </div>
                    <form action="<?= URL . 'venta/save' ?>" method="post">
                        <input type="text" name="idventa" value="<?= $data->IdVenta ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="idusuario">Usuario</label>
                                    <select class="select1" id="idusuario" name="idusuario" style="width: 100%; ">
                                        <?php foreach ($usuarios as $usu) : ?>
                                            <option value="<?= $usu->IdUsuario ?>"><?= $usu->Nombres ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="idcliente">cliente</label>
                                    <select class="select2" id="idcliente" name="idcliente" style="width: 100%; ">
                                        <?php foreach ($clientes as $cli) : ?>
                                            <option value="<?= $cli->IdCliente ?>"><?= $cli->Nombres ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="idforma">Forma Pago</label>
                                    <select class="select3" id="idforma" name="idforma" style="width: 100%; ">
                                        <?php foreach ($formapagos as $forma) : ?>
                                            <option value="<?= $forma->IdFormaPago ?>"><?= $forma->Nombre ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="idcomprobante">Comprobante</label>
                                    <select class="select4" id="idcomprobante" name="idcomprobante" style="width: 100%; ">
                                        <?php foreach ($comprobantes as $compro) : ?>
                                            <option value="<?= $compro->IdComprobante ?>"><?= $compro->Nombre ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_id">producto</label>
                            <select class="select3" id="product_id" name="product_id" style="width: 100%; ">
                                <?php foreach ($productos as $prod) : ?>
                                    <option value="<?= $prod->IdProduct ?>"><?= $prod->Nombre ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="precio">Precio</label>

                                    <input type="text" name="precio" id="precio" value="" class=" form-control">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="stock">Stock </label>

                                    <input type="text" name="stock" id="stock" value="" class=" form-control">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="id_serie">Serie</label>
                                    <input type="text" name="serie" id="id_serie" value="<?= $data->Serie ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_numero">Numero</label>
                                    <input type="text" name="numero" id="id_numero" value="<?= $data->Numero ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_subtotal">Subtotal</label>
                                    <input type="text" name="subtotal" id="id_subtotal" value="<?= $data->Subtotal ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_igv">Igb</label>
                                    <input type="text" name="IGV" id="id_igv" value="<?= $data->IGV ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_total">Total</label>
                                    <input type="text" name="total" id="id_total" value="<?= $data->Total ?>" class=" form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="id_cancelado">Cancelado</label>
                                    <input type="text" name="cancelado" id="id_cancelado" value="<?= $data->Cancelado ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="id_porcentajeigv">porcentaje IGV</label>
                                    <input type="text" name="porcentajeigv" id="id_porcentajeigv" value="<?= $data->PorcentajeIGV ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="id_pago">Pago</label>
                                    <input type="text" name="pago" id="id_pago" value="<?= $data->Pago ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="id_cambio">Cambio</label>
                                    <input type="text" name="cambio" id="id_cambio" value="<?= $data->Cambio ?>" class=" form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form group">
                                    <button type="submit" class="btn btn-primary btn-block"> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>

<!-----scripts personalizados-->

<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<script src="<?= URL . 'assets/js/scripts/alert.js' ?>"></script>
<script src="<?= URL . 'assets/js/scripts/modal_crud.js' ?>"></script>
<script src="<?= URL . 'melody/js/data-table.js' ?>"></script>
<?php $this->end() ?>