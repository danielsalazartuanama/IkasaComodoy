<header>

    <!-- header top start -->
    <div class="header-top-area bg-black text-center text-md-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="header-call-action">
                        <a href="#">
                            <i class="fa fa-envelope "></i>
                            info@website.com
                        </a>
                        <a href="#">
                            <i class="fa fa-phone"></i>
                            0123456789
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="header-top-right float-md-right float-none">
                        <nav>
                            <ul>
                                <li>
                                    <div class="dropdown header-top-dropdown">
                                        <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            my Cuenta
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="myaccount">
                                            <a class="dropdown-item" href="my-account.html">My cuenta</a>
                                            <a class="dropdown-item" href="login-register.html"> login</a>
                                            <a class="dropdown-item" href="login-register.html">register</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">My lista de deseos</a>
                                </li>
                                <li>
                                    <a href="#">My carrito</a>
                                </li>
                                <li>
                                    <a href="#">checkout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->

    <!-- header middle start -->
    <div class="header-middle-area pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-logo">
                        <a href="../../home/index">
                            <img src="<?= URL . 'assets/img/logo/log.png' ?>" alt="brand logo">
                        </a>
                    </div>
                </div> <!-- end logo area -->
                <div class="col-lg-9">
                    <div class="header-middle-right">
                        <div class="header-middle-shipping mb-20">
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5>Working time</h5>
                                    <span>Mon- Sun: 8.00 - 18.00</span>
                                </div>
                            </div> <!-- end single shipping -->
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5>free shipping</h5>
                                    <span>On order over $199</span>
                                </div>
                            </div> <!-- end single shipping -->
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5>money back 100%</h5>
                                    <span>Within 30 Days after delivery</span>
                                </div>
                            </div> <!-- end single shipping -->
                        </div>
                        <div class="header-middle-block">
                            <div class="header-middle-searchbox">
                                <input type="text" placeholder="Search...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="header-mini-cart">
                                <div class="mini-cart-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-notification">2</span>
                                </div>
                                <div class="cart-total-price">
                                    <span>total</span>
                                    $50.00
                                </div>
                                <ul class="cart-list">
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html"><img src="<?= URL . 'assets/img/product/product-a-1.jpg' ?>" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">simple product 09</a></h4>
                                            <span>$60.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html"><img src="<?= URL . 'assets/img/product/product-a-2.jpg' ?>" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">virtual product 10</a></h4>
                                            <span>$50.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </li>
                                    <li class="mini-cart-price">
                                        <span class="subtotal">subtotal : </span>
                                        <span class="subtotal-price">$88.66</span>
                                    </li>
                                    <li class="checkout-btn">
                                        <a href="#">checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header middle end -->

    <!-- main menu area start -->
    <div class="main-header-wrapper bdr-bottom1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-inner">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                Categoria
                                <div class="cat-icon">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                            <nav class="category-menu category-style-2">
                                <ul>
                                    <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-desktop"></i> Oficina Organizadora</a></li>
                                    <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-camera"></i> Muebles Exclusivos</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu">
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">Salas Vintage</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Sillones y Butacas Vintage</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Seccionales Vintage</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Organizadores Vintage</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sofas Vintage</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">Comedores Vintage</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Juego de comendor Vintage</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Mesa de comedor Vintage</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Silla de comedor Vintage</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">Dormitorios Vintage</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Juegos de dormitorios</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Roperos</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Veladores</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Cabecera</a></li>
                                                </ul>
                                            </li>

                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> Salas</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu">
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">Juego de Salas</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Otras salas :</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">1-2 Cuerpos</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">2-3 Cuerpos</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">1-2-3 Cuerpos</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">CENTRO DE ENTRETENIMIENTO</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Centro de entretenimiento Empotrable</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Centro de entretenimiento movible</a></li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">SOFA</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Sofá</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sofá Reclinable</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Banqueta</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Puff</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">SILLONES Y BUTACAS</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Sillones</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sillón reclinable</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sillones Combo</a></li>

                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> COMEDOR</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu">
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">JUEGO DE COMEDOR</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Comedor 4 sillas</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Comedor 6 sillas</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Comedor 8 sillas</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">MESAS DE COMEDOR</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html"></a></li>
                                                    <li><a href="shop-grid-left-sidebar.html"></a></li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">SILLAS DE COMEDOR</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">Silllas convencionales</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sillas vintage</a></li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid-left-sidebar.html">MUEBLES DE BAR</a>
                                                <ul>



                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-desktop"></i>Dormitorio</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="#"><i class="fa fa-home"></i>Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home version 01</a></li>
                                            <li><a href="index-2.html">Home version 02</a></li>
                                            <li><a href="index-3.html">Home version 03</a></li>
                                            <li><a href="index-4.html">Home version 04</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title"><a href="#">column 01</a>
                                                <ul>
                                                    <li><a href="shop-grid-left-sidebar.html">shop grid left sidebar</a></li>
                                                    <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                    <li><a href="shop-grid-full-3-col.html">shop grid full 3 column</a></li>
                                                    <li><a href="shop-grid-full-4-col.html">shop grid full 4 column</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title"><a href="#">column 02</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-details-affiliate.html">product details
                                                            affiliate</a></li>
                                                    <li><a href="product-details-variable.html">product details
                                                            variable</a></li>
                                                    <li><a href="product-details-group.html">product details group</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title"><a href="#">column 03</a>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title"><a href="#">column 04</a>
                                                <ul>
                                                    <li><a href="my-account.html">my-account</a></li>
                                                    <li><a href="login-register.html">login-register</a></li>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="contact-us.html">contact us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#">Tienda <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">

                                            <li><a href="../../web/shop_left">Tienda de productos </a></li>
                                            <li><a href="../../web/compare">Comparacion de productos</a></li>
                                            <li><a href="../../web/cart">Carrito de compras</a></li>
                                            <li><a href="../../web/checkout">Checkout</a></li>

                                            <li><a href="../../web/login">Registrarse_Logearse</a></li>
                                            <li><a href="../../web/shop_full">Catalogo de productos</a></li>
                                            <li><a href="../../web/product_details">Detaille de producos</a></li>


                                        </ul>
                                    </li>
                                    <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog-full-2-column.html">blog full 2 column</a></li>
                                            <li><a href="blog-full-3-column.html">blog full 3 column</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="blog-details-audio.html">blog details audio</a></li>
                                            <li><a href="blog-details-video.html">blog details video</a></li>
                                            <li><a href="blog-details-image.html">blog details image</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="../../web/Contact">Contactenos</a></li>
                                    <a type="button" href="../../inicio/index">ADMIN</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu area end -->

</header>