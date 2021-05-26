<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| suma']);?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles')?>
<?php $this->end()?>

<?php $this->start('contents')?>

<?php include_once MAINPATH . 'app/views/layouts/partials/_heroSliderStart.php' ?>


  <?php $this->stop()?>




<!-----scripts personalizados-->
<?php $this->push('scripts')?>
<?php $this->end()?>