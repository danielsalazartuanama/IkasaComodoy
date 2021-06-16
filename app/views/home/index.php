<?php
$this->layout('../layouts/layout', ['title' => 'HTGVentas| Inicio']); ?>
<!----------------------------------------------------------------------------------->
<!--Colocar los links a los archivos css-->
<?php $this->push('styles') ?>
<?php $this->end() ?>

<!----------------------------------------------------------------------------------->

<!--contenido de la pagina-->
<?php $this->start('contents') ?>



<!-- Start Slider -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_startSlider.php' ?>
<!-- End Slider -->

<!-- Start Categories  -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_startCategories.php' ?>
<!-- End Categories -->

<!-- Start Products  -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_startProducts.php' ?>
<!-- End Products  -->

<!-- Start Blog  -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_startBlog.php' ?>
<!-- End Blog  -->




<?php $this->stop() ?>


<!-----scripts personalizados-->
<?php $this->push('scripts') ?>
<?php $this->end() ?>
<!----------------------------------------------------------------------------------->