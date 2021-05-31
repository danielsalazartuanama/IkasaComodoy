<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| MARCAS']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents')?>
<div class="container">
    <h1 class="text-center">Tabla Marca</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="#" class="btn btn-primary btn-block">Nuevo</a>
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
                            <td><?= $row-> idmarca ?></td>
                            <td><?= $row->nombre ?></td>
                            <td><?= $row->descripcion ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>


<!-- <?php myEcho($data)?> -->
<?php $this->stop()?>


<!-----scripts personalizados-->
<?php $this->push('scripts')?>
<?php $this->end()?>
<!----------------------------------------------------------------------------------->









