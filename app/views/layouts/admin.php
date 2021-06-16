<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->e($title); ?></title>
    <!-- plugins:css -->

    <link href="<?= URL . 'melody/vendors/iconfonts/font-awesome/css/all.min.css' ?>" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="<?= URL . 'melody/vendors/css/vendor.bundle.base.css' ?>" rel="stylesheet">
    <!-- helper class css -->
    <link href="<?= URL . 'melody/vendors/css/vendor.bundle.addons.css' ?>" rel="stylesheet">
    <link href="<?= URL . 'melody/css/style.css' ?>" rel="stylesheet">


    <link rel="shortcut icon" href="#" />
</head>


<?= $this->section('styles') ?>

<body>
    <div class="container-scroller">

        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="#"><img src="<?= URL . 'melody/images/log.png' ?>" alt="brand logo" />
                </a>

            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item nav-search d-none d-md-flex">
                        <div class="nav-link">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </li>
                </ul>


                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?= URL . 'melody/images/faces/face16.jpg' ?>" alt="brand logo" />

                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="fas fa-cog text-primary"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off text-primary"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>


                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>





        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">Cambiar colorS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-success-theme">
                        <div class="img-ss rounded-circle bg-success border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include_once MAINPATH . 'app/views/layouts/_nav.php' ?>
            <!-- partial -->
            <div class="main-panel">


                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <main role="main"><?= $this->section('contents') ?></main>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>








        <!-- partial -->

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    <!-- plugins:js -->

    <script src=<?= URL . 'melody/vendors/js/vendor.bundle.base.js' ?>></script>
    <script src=<?= URL . 'melody/vendors/js/vendor.bundle.addons.js' ?>></script>

    <script src=<?= URL . 'melody/js/off-canvas.js' ?>></script>
    <script src=<?= URL . 'melody/js/hoverable-collapse.js' ?>></script>
    <script src=<?= URL . 'melody/js/misc.js' ?>></script>
    <script src=<?= URL . 'melody/js/settings.js' ?>></script>
    <script src=<?= URL . 'melody/js/todolist.js' ?>></script>
    <script src=<?= URL . 'melody/js/dashboard.j' ?>></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?= $this->section('myModal') ?>
    <?= $this->section('scripts') ?>
    <?= $this->section('modal') ?>
    <?= $this->section('alert') ?>

    <!-- End custom js for this page-->
</body>


</html>