<?php
$this->layout('../../layouts/layout', ['title' => 'Ikasa Muebles|Contactos']); ?>

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
                            <li class="breadcrumb-item active" aria-current="page">contact us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- contact area start -->
<div class="contact-area pb-34 pb-md-18 pb-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-message">
                    <h2>tell us your project</h2>
                    <form id="contact-form" action="http://demo.hasthemes.com/galio-v6/galio/assets/php/mail.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="first_name" placeholder="Name *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="phone" placeholder="Phone *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="email_address" placeholder="Email *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="contact_subject" placeholder="Subject *" type="text">
                            </div>
                            <div class="col-12">
                                <div class="contact2-textarea text-center">
                                    <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button class="sqr-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info mt-md-28 mt-sm-28">
                    <h2>contact us</h2>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                    <ul>
                        <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                        <li><i class="fa fa-phone"></i> info@yourdomain.com</li>
                        <li><i class="fa fa-envelope-o"></i> +88013245657</li>
                    </ul>
                    <div class="working-time">
                        <h3>Working hours</h3>
                        <p><span>Monday – Saturday:</span>08AM – 22PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<!-- map area start -->
<div class="map-area-wrapper">
    <div class="container">
        <div id="map_content" data-lat="23.763491" data-lng="90.431167" data-zoom="8" data-maptitle="HasTech" data-mapaddress="Floor# 4, House# 5, Block# C     </br> Banasree Main Rd, Dhaka">
        </div>
    </div>
</div>
<!-- map area end -->

<!-- brand area start -->
<div class="brand-area pt-34 pb-30">
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
                        <a href="#"><img src="assets/img/brand/br1.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/img/brand/br2.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/img/brand/br3.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/img/brand/br5.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/img/brand/br6.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->

<?php $this->stop() ?>

<?php $this->push('scripts') ?>