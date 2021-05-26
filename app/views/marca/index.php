<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| MARCAS']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents')?>

<h1>HTGVENTAS-BIENVENIDOS</h1>
<?php myEcho($data)?>
<?php $this->stop()?>


<!-----scripts personalizados-->
<?php $this->push('scripts')?>
<?php $this->end()?>
<!----------------------------------------------------------------------------------->