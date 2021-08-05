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
                <li class="breadcrumb-item"><a href="../venta/index">Compra</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de compra</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Compras</h4>
                    </div>
                    <form action="<?= URL . 'compra/save' ?>" method="post">
                        <input type="text" name="idcompras" value="<?= $data->IdCompras ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="idproveedor">Proveedor</label>
                                    <select class="select1" id="proveedor_id" name="idproveedor" style="width: 100%; ">
                                        <?php foreach ($proveedores as $prove) : ?>
                                            <option value="<?= $prove->IdProve ?>"><?= $prove->Nombre ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="idproduct">Producto</label>
                                    <select class="select1" id="product_id" name="idproduct" style="width: 100%; ">
                                        <?php foreach ($productos as $product) : ?>
                                            <option value="<?= $product->IdProduct ?>"><?= $product->Nombre ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_datocompra">Precio compra</label>
                                    <input type="text" name="datocompra" id="price" value="<?= $data->DatoCompra ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_impuesto">Impuesto</label>
                                    <input type="text" name="impuesto" id="tax" value="<?= $data->Impuesto ?>" class=" form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_total">Cantidad</label>
                                    <input type="text" name="total" id="quantity" value="<?= $data->Total ?>" class=" form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form group">
                                    <input type="checkbox" style="width: 50px;height: 50px;position: relative;left: 25px; " ; name="estado" id="id_estado" class="form-check-input" <?= ($data->Estado == 1) ? 'checked' : '' ?>>
                                    <label class="form-check-label" style="left: 45px;position: relative;" for="id_estado"><strong>Estado</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
                        </div>
                        <br>
                        <div class="form-group">
                            <h4 class="card-title">Detalles de compra</h4>
                            <div class="table-responsive col-md-12">
                                <table id="detalles" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Eliminar</th>
                                            <th>Producto</th>
                                            <th>Precio(PEN)</th>
                                            <th>Cantidad</th>
                                            <th>SubTotal(PEN)</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4">
                                                <p align="right">TOTAL:</p>
                                            </th>
                                            <th>
                                                <p align="right"><span id="total">PEN 0.00</span> </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="4">
                                                <p align="right">TOTAL IMPUESTO (18%):</p>
                                            </th>
                                            <th>
                                                <p align="right"><span id="total_impuesto">PEN 0.00</span></p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="4">
                                                <p align="right">TOTAL PAGAR:</p>
                                            </th>
                                            <th>
                                                <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span> <input type="hidden" name="total" id="total_pagar"></p>
                                            </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="card-footer text-muted">
                            <button type="submit" id="guardar" class="btn btn-primary float-right">Registrar</button>
                            <a href="../compra/index" class="btn btn-dark">
                                Cancelar
                            </a>
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
<script src="<?= URL . 'melody/js/alerts.js' ?>"></script>
<script src="<?= URL . 'melody/js/avgrund.js' ?>"></script>
<script>
    $(document).ready(function() {
        $("#agregar").click(function() {
            agregar();
        });
    });

    var cont = 0;
    total = 0;
    subtotal = [];

    $("#guardar").hide();


    function agregar() {

        product_id = $("#product_id").val();
        producto = $("#product_id option:selected").text();
        quantity = $("#quantity").val();
        price = $("#price").val();
        impuesto = $("#tax").val();

        if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
            subtotal[cont] = quantity * price;
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont + ');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td> <td> <input type="hidden" id="price[]" name="price[]" value="' + price + '"> <input class="form-control" type="number" id="price[]" value="' + price + '" disabled> </td>  <td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input class="form-control" type="number" value="' + quantity + '" disabled> </td> <td align="right">s/' + subtotal[cont] + ' </td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la compras',

            })
        }
    }

    function limpiar() {
        $("#quantity").val("");
        $("#price").val("");
    }

    function totales() {
        $("#total").html("PEN " + total.toFixed(2));
        total_impuesto = total * impuesto / 100;
        total_pagar = total + total_impuesto;
        $("#total_impuesto").html("PEN " + total_impuesto.toFixed(2));
        $("#total_pagar_html").html("PEN " + total_pagar.toFixed(2));
        $("#total_pagar").val(total_pagar.toFixed(2));
    }

    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        total = total - subtotal[index];
        total_impuesto = total * impuesto / 100;
        total_pagar_html = total + total_impuesto;
        $("#total").html("PEN" + total);
        $("#total_impuesto").html("PEN" + total_impuesto);
        $("#total_pagar_html").html("PEN" + total_pagar_html);
        $("#total_pagar").val(total_pagar_html.toFixed(2));
        $("#fila" + index).remove();
        evaluar();
    }
</script>
<?php $this->end() ?>