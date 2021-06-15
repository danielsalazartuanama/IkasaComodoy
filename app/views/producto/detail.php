<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1>Producto-<small>Detalle</small></h1>
            <form action="<?= URL . 'producto/save' ?>" method="post">
                <input type="text" name="idproduct" value="<?= $data->IdProduct ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_nombre">Nombre</label>
                            <input type="text" name="nombre" id="id_nombre" value="<?= $data->Nombre ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_precio">Precio</label>
                            <input type="text" name="precio" id="id_precio" value="<?= $data->Precio ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idcategoria">Categoria</label>
                    <select class="select1" id="idcategoria" name="idcategoria" style="width: 100%; ">
                        <?php foreach ($categorias as $cas) : ?>
                            <option value="<?= $cas->IdCateg ?>"><?= $cas->Nombre ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idmarca">Marca</label>
                    <select class="select1" id="idmarca" name="idmarca" style="width: 100%; ">
                        <?php foreach ($marcas as $mar) : ?>
                            <option value="<?= $mar->IdMarca ?>"><?= $mar->Nombre ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idproveedor">Proveedor</label>
                    <select class="select1" id="idproveedor" name="idproveedor" style="width: 100%; ">
                        <?php foreach ($proveedores as $pro) : ?>
                            <option value="<?= $pro->IdProve ?>"><?= $pro->Nombre ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_precioventa">PrecioVenta</label>
                            <input type="text" name="precioventa" id="id_precioventa" value="<?= $data->PrecioVenta ?>" class=" form-control">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="id_stock">stock</label>
                            <input type="text" name="stock" id="id_stock" value="<?= $data->Stock ?>" class=" form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="id_stockminimo">StockMinimo</label>
                            <input type="text" name="stockminimo" id="id_stockminimo" value="<?= $data->StockMinimo ?>" class=" form-control">
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
                            <input type="checkbox" name="estado" id="id_estado" class="form-check-input" <?= ($data->Estado == 1) ? 'checked' : '' ?>>
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