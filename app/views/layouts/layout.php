<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-431:41-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $this->e($title) ?></title>
    <!--llamamos a la funcion e y lo asignamos una variable-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= URL . 'images/favicon.png' ?>">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="<?= URL . 'css/material-design-iconic-font.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= URL . 'css/font-awesome.min.css' ?>">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="<?= URL . 'css/fontawesome-stars.css' ?>">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/meanmenu.css' ?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/owl.carousel.min.css' ?>">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/slick.css' ?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/animate.css' ?>">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/jquery-ui.min.css' ?>">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/venobox.css' ?>">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/nice-select.css' ?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/magnific-popup.css' ?>">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/bootstrap.min.css' ?>">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/helper.css' ?>">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= URL . 'style.css' ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= URL . 'css/responsive.css' ?>">
    <!-- Modernizr js -->
    <script src="<?= URL . 'js/vendor/modernizr-2.8.3.min.js' ?>"></script>

    <?= $this->section('styles') ?>
</head>

<body>

    <div class="body-wrapper">

        <!-- TRAEMOS DEL PARTIAL EL HEADER CON INCLUDE_ONE Y LA RUTA -->
        <?php include_once MAINPATH . 'app/views/layouts/partials/_header.php' ?>


        <!-- Static Top Area End Here -->

        <!-- Content -->
        <?= $this->section('contents') ?>



        <!-- product-area start -->

        <!-- product-area end -->


        <!-- Begin Li's Static Banner Area -->

        <!-- Li's Static Banner Area End Here -->


        <!-- Begin Li's Laptop Product Area -->

        <!-- Li's Laptop Product Area End Here -->



        <!-- Begin Li's TV & Audio Product Area -->

        <!-- Li's TV & Audio Product Area End Here -->


        <!-- Begin Li's Static Home Area -->

        <!-- Li's Static Home Area End Here -->


        <!-- Begin Group Featured Product Area -->

        <!-- Group Featured Product Area End Here -->


        <!-- Begin Footer Area -->
        <?php include_once MAINPATH . 'app/views/layouts/partials/_footer.php' ?>

        <!-- Footer Area End Here -->


        <!-- Begin Quick View | Modal Area -->

        <!-- Quick View | Modal Area End Here -->

    </div>
    <?= $this->section('myModal'); ?>
    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script src="<?= URL . 'js/vendor/jquery-1.12.4.min.js' ?>"></script>
    <!-- Popper js -->
    <script src="<?= URL . 'js/vendor/popper.min.js' ?>"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="<?= URL . 'js/bootstrap.min.js' ?>"></script>
    <!-- Ajax Mail js -->
    <script src="<?= URL . 'js/ajax-mail.js' ?>"></script>
    <!-- Meanmenu js -->
    <script src="<?= URL . 'js/jquery.meanmenu.min.js' ?>"></script>
    <!-- Wow.min js -->
    <script src="<?= URL . 'js/wow.min.js' ?>"></script>
    <!-- Slick Carousel js -->
    <script src="<?= URL . 'js/slick.min.js' ?>"></script>
    <!-- Owl Carousel-2 js -->
    <script src="<?= URL . 'js/owl.carousel.min.js' ?>"></script>
    <!-- Magnific popup js -->
    <script src="<?= URL . 'js/jquery.magnific-popup.min.js' ?>"></script>
    <!-- Isotope js -->
    <script src="<?= URL . 'js/isotope.pkgd.min.js' ?>"></script>
    <!-- Imagesloaded js -->
    <script src="<?= URL . 'js/imagesloaded.pkgd.min.js' ?>"></script>
    <!-- Mixitup js -->
    <script src="<?= URL . 'js/jquery.mixitup.min.js' ?>"></script>
    <!-- Countdown -->
    <script src="<?= URL . 'js/jquery.countdown.min.js' ?>"></script>
    <!-- Counterup -->
    <script src="<?= URL . 'js/jquery.counterup.min.js' ?>"></script>
    <!-- Waypoints -->
    <script src="<?= URL . 'js/waypoints.min.js' ?>"></script>
    <!-- Barrating -->
    <script src="<?= URL . 'js/jquery.barrating.min.js' ?>"></script>
    <!-- Jquery-ui -->
    <script src="<?= URL . 'js/jquery-ui.min.js' ?>"></script>
    <!-- Venobox -->
    <script src="<?= URL . 'js/venobox.min.js' ?>"></script>
    <!-- Nice Select js -->
    <script src="<?= URL . 'js/jquery.nice-select.min.js' ?>"></script>
    <!-- ScrollUp js -->
    <script src="<?= URL . 'js/scrollUp.min.js' ?>"></script>
    <!-- Main/Activator js -->
    <script src="<?= URL . 'js/main.js' ?>"></script>

    <?= $this->section('scripts') ?>
</body>

<!-- index-431:47-->

</html>