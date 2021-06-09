<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| UNIDADES']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents')?>
<div class="container">
    <h1 class="text-center">Tabla unidades</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="<?=URL.'unidad/detail'?>" class="btn btn-primary btn-block">Nuevo</a>
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
                            <td><?= $row-> idunidad ?></td>
                            <td><?= $row->nombre ?></td>                            
                            <td>
                            <a href="<?=URL. "unidad/detail/{$row->idunidad}"?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="<?=URL. "unidad/eliminar/{$row->idunidad}"?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
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









