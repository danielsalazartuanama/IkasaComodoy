<?php
$this->layout('../../layouts/layout', ['title' => 'Ikasa Muebles|Comprar todo']); ?>

<?php $this->push('styles') ?>

<?php $this->end() ?>

<?php $this->start('contents') ?>
<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shop left sidebar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page wrapper start -->
<div class="page-main-wrapper">
    <div class="container">
        <div class="row">
            <!-- product main wrap start -->
            <div class="col-12">
                <!-- <div class="shop-banner img-full">
                    <img src="<?= URL . 'assets/img/shop/cama1.jpg' ?>" alt="">
                </div> -->
                <!-- product view wrapper area start -->
                <div class="shop-product-wrapper pt-34">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row">
                            <div class="col-lg-7 col-md-6">
                                <div class="top-bar-left">
                                    <div class="product-view-mode mr-70 mr-sm-0">
                                        <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>Showing 1–16 of 21 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item start -->
                    <div class="shop-product-wrap grid row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor9.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant9.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor1.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor2.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor3.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor4.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor3.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor4.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">simple product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor5.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor6.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">group product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">

                                        <img src="<?= URL . 'assets/img/shop/comedor5.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor6.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">group product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor7.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor8.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">external product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/comedor7.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/comedor8.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">external product</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant1.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant2.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant1.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant2.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">simple product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">

                                        <img src="<?= URL . 'assets/img/shop/restaurant3.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant4.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">smart product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant3.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant4.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">smart product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant5.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant6.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant5.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant6.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant7.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant8.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">external product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/restaurant7.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/restaurant8.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">external product</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama2.jpeg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama3.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama2.jpeg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama3.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama4.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama5.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">group product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama4.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama5.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">group product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama6.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama7.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama8.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama9.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">simple product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/cama1.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/cama2.jpeg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$100.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla2.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$90.00</span>
                                        <span class="old-price"><del>$100.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla2.png' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla.png' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla2.png' ?>" class="img-sec" alt="">

                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_escritorio1.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_escritorio2.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">smart product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$90.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_escritorio1.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_escritorio2.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla3.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla5.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla3.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_silla5.jpg' ?>" class="img-sec" alt="">

                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">simple product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_mesa.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_mesa2.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= URL . 'assets/img/shop/oficina_mesa.jpg' ?>" class="img-pri" alt="">
                                        <img src="<?= URL . 'assets/img/shop/oficina_mesa2.jpg' ?>" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3><a href="product-details.html">virtual product 02</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                    </div>
                    <!-- product item end -->
                </div>
                <!-- product view wrapper area end -->

                <!-- start pagination area -->
                <div class="paginatoin-area text-center pt-28">
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"> Next </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end pagination area -->

            </div>
            <!-- product main wrap end -->
        </div>
    </div>
</div>
<!-- page wrapper end -->

<!-- brand area start -->
<div class="brand-area pt-26 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-30">
                    <div class="title-icon">
                        <i class="fa fa-crop"></i>
                    </div>
                    <h3>Popular Brand</h3>
                </div> <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="brand-active slick-padding slick-arrow-style">
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br1.png' ?>" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br2.png' ?>" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br3.png' ?>" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br4.png' ?>" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br5.png' ?>" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br6.png' ?>" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="<?= URL . 'assets/img/brand/br4.png' ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->

<?php $this->stop() ?>

<?php $this->push('scripts') ?>