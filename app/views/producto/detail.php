<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Producto|Detalle ']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>
<!-- <?php myEcho($data) ?> -->
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1>Producto-<small>Detalle</small></h1>
            <form action="<?= URL . 'producto/save' ?>" method="post">
                <input type="text" name="idproduct" value="<?= $data->idproduct ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_precio">Precio</label>
                            <input type="text" name="precio" id="id_precio" value="<?= $data->precio ?>" class=" form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category">Categoria</label>
                    <select class="select2" id="categoria" style="width: 100%; ">
                        <?php foreach ($categorias as $row) : ?>
                            <option value="<?= $row->idcateg ?>"><?= $row->nombre ?> </option>
                            <!-- <option value="<?php echo $row['idcateg'] ?><?php echo $row['nombre'] ?>"></option> -->
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_precioventa">PrecioVenta</label>
                            <input type="text" name="precioventa" id="id_precioventa" value="<?= $data->precioventa ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_stock">stock</label>
                            <input type="text" name="stock" id="id_stock" value="<?= $data->stock ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_stockminimo">StockMinimo</label>
                            <input type="text" name="stockminimo" id="id_stockminimo" value="<?= $data->stockminimo ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group form-check">
                            <input type="checkbox" name="estado" id="id_estado" class="form-check-input" <?= ($data->estado == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="id_estado">Estado</label>
                        </div>
                    </div>
                    <div class="col-sm-8">

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
    <?php $this->stop() ?>

    <!-----scripts personalizados-->
    <?php $this->push('scripts') ?>
    <?php $this->end() ?>