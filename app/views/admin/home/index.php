<?php
$this->layout('../../layouts/layout', ['title' => 'HTGVentas| Inicio']); ?>
<!----------------------------------------------------------------------------------->

<!--estylos --->
<?php $this->push('styles') ?>

<?php $this->end() ?>

<!---------------------CONTENTS-->
<?php $this->start('contents') ?>
<!-- header area end -->


<!-- hero slider start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_heroSliderStart.php' ?>
<!-- hero slider end -->


<!-- home banner area start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_homeBannerArea.php' ?>
<!-- home banner area end -->

<!-- product wrapper area strat -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_productWrapperArea.php' ?>
<!-- product wrapper area end -->

<!-- page wrapper start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_pageWrapperStart.php' ?>
<!-- page wrapper end -->

<!-- home banner area start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_homeBannerAreaStart.php' ?>
<!-- home banner area end -->

<!-- blog-testimonial-product area start -->

<!-- blog-testimonial-product area end -->

<!-- latest product start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_latestProductStart.php' ?>

<!-- latest product end -->

<!-- brand area start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_brandAreaStart.php' ?>

<!-- brand area end -->

<!-- Quick view modal start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_viewModalStart.php' ?>
<!-- Quick view modal end -->

<!-- Scroll to top start -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_scrollTopStart.php' ?>
<!-- Scroll to Top End -->


<?php $this->stop() ?>

<!-----------JAVASCRIPT-->
<?php $this->push('scripts') ?>

<?php $this->end() ?>