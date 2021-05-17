<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title><?=$this->e($title);?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=URL . 'assets/img/favicon.ico'?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?=URL . 'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="<?=URL . 'assets/css/font-awesome.min.css'?>" rel="stylesheet">
    <!-- helper class css -->
    <link href="<?=URL . 'assets/css/helper.min.css'?>" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="<?=URL . 'assets/css/plugins.css'?>" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<?=URL . 'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?=URL . 'assets/css/skin-default.css'?>" rel="stylesheet" id="galio-skin">
</head>

<?=$this->section('styles')?>

<body>


    <div class="wrapper box-layout">

        <!-- header cabecera -->
        <?php include_once MAINPATH . 'app/views/layouts/partials/_header.php' ?>
        <!-- header area end -->




        <!-- hero slider start -->
        <!-- hero slider end -->




        <!-- home banner area start -->
        <!-- home banner area end -->



        <!-- product wrapper area strat -->
        <!-- product wrapper area end -->



        <!-- page wrapper start -->
        <!-- page wrapper end -->



        <!-- home banner area start -->
        <!-- home banner area end -->



        <!-- blog-testimonial-product area start -->

        <!-- blog-testimonial-product area end -->



        <!-- latest product start -->

        <!-- latest product end -->




        <!-- brand area start -->

        <!-- brand area end -->


        <main role="main"><?=$this->section('contents')?></main>

        <!-- footer area start -->
        <?php include_once MAINPATH . 'app/views/layouts/partials/_footer.php' ?>
        <!-- footer area end -->

    </div>



    <!-- Quick view modal start -->
    <!-- Quick view modal end -->


    <!-- Scroll to top start -->
    <!-- Scroll to Top End -->




    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="<?=URL .'assets/js/vendor/modernizr-3.6.0.min.js'?>"></script>
    <!-- Jquery Min Js -->
    <script src="<?=URL .'assets/js/vendor/jquery-3.3.1.min.js'?>"></script>
    <!-- Popper Min Js -->
    <script src="<?=URL .'assets/js/vendor/popper.min.js'?>"></script>
    <!-- Bootstrap Min Js -->
    <script src="<?=URL .'assets/js/vendor/bootstrap.min.js'?>"></script>
    <!-- Plugins Js-->
    <script src="<?=URL .'assets/js/plugins.js'?>"></script>
    <!-- Ajax Mail Js -->
    <script src="<?=URL .'assets/js/ajax-mail.js'?>"></script>
    <!-- Active Js -->
    <script src="<?=URL .'assets/js/main.js'?>"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="<?=URL .'assets/js/switcher.js'?>"></script>

    <?=$this->section('scripts')?>

</body>


</html>