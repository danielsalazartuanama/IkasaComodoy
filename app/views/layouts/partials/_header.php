 <header class="main-header">
     <!-- Start Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
         <div class="container">
             <!-- Start Header Navigation -->
             <div class="navbar-header">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fa fa-bars"></i>
                 </button>
                 <a class="navbar-brand" href="index.html"><img src="<?= URL . 'images/logo.png' ?>" class="logo" alt=""></a>
             </div>
             <!-- End Header Navigation -->

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="navbar-menu">
                 <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                     <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>

                     <li class="dropdown">
                         <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Paginas </a>
                         <ul class="dropdown-menu">
                             <li><a href="../../home/cart">Cart</a></li>
                             <li><a href="../home/contact">contact</a></li>
                             <li><a href="../home/service">service </a></li>
                             <li><a href="../home/checkout">Checkout</a></li>
                             <li><a href="../home/myaccount">My Account</a></li>
                             <li><a href="../home/wichlist">Wishlist</a></li>
                             <li><a href="../home/shop">Shop </a></li>
                             <li><a href="../home/shopdetails">Shop Detail</a></li>
                         </ul>
                     </li>
                     <li class="dropdown">
                         <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Tablas </a>
                         <ul class="dropdown-menu">
                             <li><a href="../categoria/index">Categoria</a></li>
                             <li><a href="../proveedor/index">Proveedor</a></li>
                             <li><a href="../articulo/index">Articulo</a></li>
                             <li><a href="../formapago/index">Foma de pago</a></li>
                             <li><a href="../comprobante/index">Comprobante</a></li>
                             <li><a href="../cliente/index">Cliente</a></li>
                         </ul>
                     </li>
                     <li><a style="color: white;" href="shop-detail.html">_________________________</a></li>
                     <li><a style="color: white;" href="shop-detail.html">_______________________</a></li>

                 </ul>
             </div>
             <!-- /.navbar-collapse -->

             <!-- Start Atribute Navigation -->
             <div class="attr-nav">
                 <ul>
                     <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                     <li class="side-menu"><a href="#">
                             <i class="fa fa-shopping-bag"></i>
                             <span class="badge">3</span>
                         </a></li>
                 </ul>
             </div>
             <!-- End Atribute Navigation -->
         </div>
         <!-- Start Side Menu -->
         <div class="side">
             <a href="#" class="close-side"><i class="fa fa-times"></i></a>
             <li class="cart-box">
                 <ul class="cart-list">
                     <li>
                         <a href="#" class="photo"><img src="<?= URL . 'images/img-pro-01.jpg' ?>" class="cart-thumb" alt="" /></a>
                         <h6><a href="#">Delica omtantur </a></h6>
                         <p>1x - <span class="price">$80.00</span></p>
                     </li>
                     <li>
                         <a href="#" class="photo"><img src="<?= URL . 'images/img-pro-02.jpg' ?>" class="cart-thumb" alt="" /></a>
                         <h6><a href="#">Omnes ocurreret</a></h6>
                         <p>1x - <span class="price">$60.00</span></p>
                     </li>
                     <li>
                         <a href="#" class="photo"><img src="<?= URL . 'images/img-pro-03.jpg' ?>" class="cart-thumb" alt="" /></a>
                         <h6><a href="#">Agam facilisis</a></h6>
                         <p>1x - <span class="price">$40.00</span></p>
                     </li>
                     <li class="total">
                         <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                         <span class="float-right"><strong>Total</strong>: $180.00</span>
                     </li>
                 </ul>
             </li>
         </div>
         <!-- End Side Menu -->
     </nav>
     <!-- End Navigation -->
 </header>