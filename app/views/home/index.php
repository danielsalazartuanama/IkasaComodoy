<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Inicio']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents')?>
<?php $this->stop()?>

<!-----scripts personalizados-->
<?php $this->push('scripts')?>
<?php $this->end()?>
<!----------------------------------------------------------------------------------->
