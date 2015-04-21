<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use frontend\assets\AppAsset;
use frontend\assets\PhantasosAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

PhantasosAsset::register($this);
?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Phantasos">
        <meta name="author" content="Your Name or Company">
        <link rel="shortcut icon" href="img/favicon.png">

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>  <!-- ตรงนี้คืดคำสั่ง register script ทั้งหมดของ css/js -->


    </head>
    <?php $this->beginBody() ?>
    <body data-spy="scroll">
        <div class="loader-bg">
            <div class="loader"></div>
        </div>
        <!-- ========== Navigation ========== -->
        <a class="btn nav-btn animated slideInLeft"><i class="fa fa-bars"></i></a>
        <div class="navbar navbar-fixed-top closed" role="navigation" id="top-header">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active"><a class="scroll" href="#home">หน้าแรก</a>
                    </li>
                    <li><a class="scroll" href="#services">บริการของเรา</a>
                    </li>
                    <li><a class="scroll" href="#works">งาน</a>
                    </li>
                    <li><a class="scroll" href="#about">เกี่ยวกับเรา</a>
                    </li>
                    <li><a class="scroll" href="#timeline">ระยะเวลา</a>
                    </li>
                    <li><a class="scroll" href="#clients">ลูกค้า</a>
                    </li>
                    <li><a class="scroll" href="#pricing">ตารางราคา</a>
                    </li>
                    <li><a class="scroll" href="#blog">บล๊อค</a>
                    </li>
                    <li><a class="scroll" href="#contact">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== /Navigation ========== -->
        <!-- ========== Slider ========== -->
        <section id="home">
            <div class="text-center">
                <div class="logo">
                    <img src="\theme\themes\Phantasos\img\logo.png" class="img-responsive" alt="logo" />
                </div>
                <p class="text">เว็บพร้อมแล้วจะขายอะไรดี</p>
                <a href="#services" class="btn btn-slides btn-lg scroll">Go Product</a>
                <div id="mouse-icon">
                    <div id="scroll-wheel"></div>
                </div>
            </div>
        </section>
        <!-- ========== /Slider ========== -->
        <!-- ========== Section Entry ========== -->
        <section class="section-entry text-center wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 mb40">
                        <p class="entry-icon"><i class="fa fa-thumbs-o-up"></i>
                        </p>
                        <h2>Bootstrap</h2>
                        <p>Coded with the latest version of Bootstrap v3.</p>
                    </div>
                    <div class="col-sm-4 mb40">
                        <p class="entry-icon"><i class="fa fa-eye"></i>
                        </p>
                        <h2>Clean</h2>
                        <p>Easy to read and edit code for everyone.</p>
                    </div>
                    <div class="col-sm-4 mb40">
                        <p class="entry-icon"><i class="fa fa-mobile"></i>
                        </p>
                        <h2>Responsive</h2>
                        <p>From desktop to mobile and anything in between.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== /Section Entry ========== -->

        <!-- ========== Section Services ========== -->
        <section class="section-services" id="services" data-type="background" data-speed="10">
            <div class="container">
                <h2 class="title">Services</h2>
                <hr class="underline">
                <p class="description">Some things we do. This is not a complete list, we have a lot more to offer!</p>
                <div class="row">
                    <div class="col-xs-12 col-md-8 wow fadeInLeft">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <i class="fa fa-tint fa-fw"></i>
                                    </div>
                                    <div class="services-text">
                                        <h4>Design</h4>
                                        <p>We will make your design look amazing. From Logo to Website.</p>
                                    </div>
                                </div>
                                <div class="services-item">
                                    <div class="services-icon">
                                        <i class="fa fa-play fa-fw"></i>
                                    </div>
                                    <div class="services-text">
                                        <h4>Animation</h4>
                                        <p>Our animations and videos will amaze your customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <i class="fa fa-microphone fa-fw"></i>
                                    </div>
                                    <div class="services-text">
                                        <h4>Audio</h4>
                                        <p>What would a great video be without the effects. We got you!</p>
                                    </div>
                                </div>
                                <div class="services-item">
                                    <div class="services-icon">
                                        <i class="fa fa-thumbs-up fa-fw"></i>
                                    </div>
                                    <div class="services-text">
                                        <h4>Social Media</h4>
                                        <p>Need your Design or Site pushed to Social Media? No problem!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 wow fadeInRight">
                        <div class="progress">
                            <div class="progress-bar color1" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                <span>Web Design</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span>Development</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span>Marketing</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span>Communication</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="device">
                <!-- morphing devices -->
                <span></span>
            </div>
        </section>
        <!-- ========== /Section Services ========== -->

        <!-- ========== Section Works ========== -->
        <section class="section-works text-center wow fadeInUp" id="works">
            <div class="container">
                <h2 class="title">Works</h2>
                <hr class="underline">
                <p class="description">A few examples on what we have achieved so far. Let us know what you think!</p>
                <div class="row works-hover">
                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <figure>
                            <img class="img-responsive" src="\theme\themes\Phantasos\img\works1.png" alt="Description">
                            <figcaption>
                                <h3>Clock</h3>
                                <p>Design</p>
                                <a href="single.html" class="ajax-popup-link">View</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <figure>
                            <img class="img-responsive" src="\theme\themes\Phantasos\img\works2.png" alt="Description">
                            <figcaption>
                                <h3>Flame</h3>
                                <p>Video</p>
                                <a href="single_video.html" class="ajax-popup-link">View</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <figure>
                            <img class="img-responsive" src="\theme\themes\Phantasos\img\works3.png" alt="Description">
                            <figcaption>
                                <h3>Gameboy</h3>
                                <p>Animation</p>
                                <a href="single.html" class="ajax-popup-link">View</a>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <figure>
                            <img class="img-responsive" src="\theme\themes\Phantasos\img\works4.png" alt="Description">
                            <figcaption>
                                <h3>Compass</h3>
                                <p>Web</p>
                                <a href="single.html" class="ajax-popup-link">View</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <figure>
                            <img class="img-responsive" src="\theme\themes\Phantasos\img\works5.png" alt="Description">
                            <figcaption>
                                <h3>Fireworks</h3>
                                <p>Animation</p>
                                <a href="single.html" class="ajax-popup-link">View</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <figure>
                            <img class="img-responsive" src="\theme\themes\Phantasos\img\works6.png" alt="Description">
                            <figcaption>
                                <h3>Lab</h3>
                                <p>Design</p>
                                <a href="single.html" class="ajax-popup-link">View</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <button type="button" class="btn btn-blue btn-lg po-more" data-show="#more-work" data-load-from="more.html">More?</button>
                <div class="hidden" id="more-work">more!</div>
            </div>
        </section>
        <!-- ========== /Section Works ========== -->

        <!-- ========== Section CTA ========== -->
        <section class="call-to-action wow fadeInUp" data-type="background" data-speed="10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 text-center">
                        <h3>Interested? We would love to work with you!</h3>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a href="#contact" class="btn btn-white btn-lg scroll">Contact us</a> 
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== /Section CTA ========== -->

        <!-- ========== Section About ========== -->
        <section class="section-about text-center wow fadeInUp" id="about">
            <div class="container">
                <h2 class="title">About</h2>
                <hr class="underline">
                <p class="description">These are the masterminds behind Phantasos. We would love to meet you, so contact us soon!</p>
                <div class="row about-hover">
                    <div id="about-slides" class="owl-carousel">
                        <div>
                            <!-- Row 1 -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team1.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>John Doe</h4>
                                <p>Manager</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team2.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Mike Lee</h4>
                                <p>Technical Lead</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team3.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Steve Johns</h4>
                                <p>Creative Lead</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team4.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Anna Svensson</h4>
                                <p>Support Lead</p>
                            </div>
                        </div>
                        <!-- / Row 1 -->
                        <div>
                            <!-- Row 2 -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team5.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Mia Simmons</h4>
                                <p>Motion Designer</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team6.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Brandy Davidson</h4>
                                <p>Mobile Developer</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team7.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Michelle Reyes</h4>
                                <p>Marketing Lead</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <figure>
                                    <img class="img-responsive" src="\theme\themes\Phantasos\img\team8.png" alt="Description">
                                    <figcaption>
                                        <a class="fb" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a class="tw" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                    </figcaption>
                                </figure>
                                <h4>Jessie Wagner</h4>
                                <p>Java Developer</p>
                            </div>
                        </div>
                        <!-- / Row 2 -->
                    </div>
                    <!-- /#about-slides -->
                </div>
            </div>
        </section>
        <!-- ========== /Section About ========== -->

        <!-- ========== Section Timeline ========== -->
        <section class="section-timeline" id="timeline" data-type="background" data-speed="10">
            <div class="container">
                <h2 class="title">Timeline</h2>
                <hr class="underline">
                <p class="description">Check out the latest things we did recently</p>
                <ul class="timeline text-center">
                    <li>
                        <div class="timeline-badge one"><i class="fa fa-circle"></i>
                        </div>
                        <div class="timeline-panel wow slideInLeft">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">New Office</h4>
                                <p><small class="text-muted">Monday, 13.01.2014 </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Sesame snaps macaroon dessert biscuit marshmallow cookie lollipop liquorice dragée. Sugar plum apple pie toffee wafer macaroon. Chocolate bar danish danish. Dragée gingerbread dragée dragée lollipop candy ice cream cake. Tart
                                    donut gingerbread pastry cupcake candy canes. Sweet roll candy canes cookie oat cake gummies.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge two"><i class="fa fa-circle"></i>
                        </div>
                        <div class="timeline-panel wow slideInRight">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">New Years Eve Event</h4>
                                <p><small class="text-muted">Tuesday, 31.12.2013 </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Tiramisu dragée oat cake. Oat cake jelly muffin macaroon oat cake dessert. Macaroon candy macaroon candy canes halvah. Biscuit donut dessert halvah. Lollipop marshmallow gingerbread gummi bears sweet roll ice cream.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge three"><i class="fa fa-circle"></i>
                        </div>
                        <div class="timeline-panel wow slideInLeft">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">New Team Member</h4>
                                <p><small class="text-muted">Friday, 13.12.2013 </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Sesame snaps macaroon dessert biscuit marshmallow cookie lollipop liquorice dragée. Sugar plum apple pie toffee wafer macaroon. Chocolate bar danish danish. Dragée gingerbread dragée dragée lollipop candy ice cream cake. Tart
                                    donut gingerbread pastry cupcake candy canes. Sweet roll candy canes cookie oat cake gummies.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge four"><i class="fa fa-circle"></i>
                        </div>
                        <div class="timeline-panel wow slideInRight">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">1 million lines of code</h4>
                                <p><small class="text-muted">Thursday, 21.11.2013 </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Tiramisu dragée oat cake. Oat cake jelly muffin macaroon oat cake dessert. Macaroon candy macaroon candy canes halvah. Biscuit donut dessert halvah. Lollipop marshmallow gingerbread gummi bears sweet roll ice cream.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge five"><i class="fa fa-circle"></i>
                        </div>
                        <div class="timeline-panel wow slideInLeft">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Updated Support Center</h4>
                                <p><small class="text-muted">Wednesday, 30.10.2013 </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Sesame snaps macaroon dessert biscuit marshmallow cookie lollipop liquorice dragée. Sugar plum apple pie toffee wafer macaroon. Chocolate bar danish danish. Dragée gingerbread dragée dragée lollipop candy ice cream cake. Tart
                                    donut gingerbread pastry cupcake candy canes. Sweet roll candy canes cookie oat cake gummies.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge six"><i class="fa fa-circle"></i>
                        </div>
                        <div class="timeline-panel wow slideInRight">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Initial Launch</h4>
                                <p><small class="text-muted">Monday, 30.09.2013 </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Tiramisu dragée oat cake. Oat cake jelly muffin macaroon oat cake dessert. Macaroon candy macaroon candy canes halvah. Biscuit donut dessert halvah. Lollipop marshmallow gingerbread gummi bears sweet roll ice cream.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- ========== /Section Timeline ========== -->

        <!-- ========== Section Quotes ========== -->
        <section class="section-quotes text-center" id="clients" data-type="background" data-speed="10">
            <div class="container">
                <h2 class="title">Quotes</h2>
                <hr class="underline">
                <p class="description">What our clients are saying about us</p>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div id="quote-slides" class="owl-carousel">
                            <div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-circle" src="\theme\themes\Phantasos\img\quote1.jpg" alt="Description" />
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Wow what great service, I love it! Buy this now. Definitely worth the investment.</p>
                                        <small>Mia Johnson</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-circle" src="\theme\themes\Phantasos\img\quote2.jpg" alt="Description" />
                                    </div>
                                    <div class="col-sm-9">
                                        <p>The very best. It just is awesome! Very easy to use. I use it often.</p>
                                        <small>Taylor Adams</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-circle" src="\theme\themes\Phantasos\img\quote3.jpg" alt="Description" />
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Just what I was looking for. Without it, we would have gone bankrupt by now.</p>
                                        <small>Isabelle Green</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Section /Quotes ========== -->

        <!-- ========== Section Pricing ========== -->
        <section class="section-pricing text-center" id="pricing">
            <div class="container">
                <h2 class="title">Pricing Tables</h2>
                <hr class="underline">
                <p class="description">No hidden fees. No risk. Cancel at any time</p>
                <div class="row">
                    <!-- Start Pricing Table -->
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h1> Silver </h1>
                                <h2>
                                    <span class="note">$</span>500 </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>Free Sample</li>
                                <li>Free Setup</li>
                                <li>One Page Template</li>
                                <li>5 GB Storage</li>
                            </ul>
                            <div class="price-actions">
                                <a href="#" class="btn btn-blue">Get it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h1> Gold </h1>
                                <h2>
                                    <span class="note">$</span>850 </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>Free Sample</li>
                                <li>Free Setup</li>
                                <li>Multiple Page Template</li>
                                <li>10 GB Storage</li>
                            </ul>
                            <div class="price-actions">
                                <a href="#" class="btn btn-blue">Get it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table popular ">
                            <div class="pricing-head">
                                <h1> Platinum </h1>
                                <h2>
                                    <span class="note">$</span>1500 </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>Free Sample</li>
                                <li>Free Setup</li>
                                <li>One Page Wordpress</li>
                                <li>15 GB Storage</li>
                            </ul>
                            <div class="price-actions">
                                <a href="#" class="btn btn-white">Get it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h1> Diamond </h1>
                                <h2>
                                    <span class="note">$</span>1800 </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>Free Sample</li>
                                <li>Free Setup</li>
                                <li>Multiple Page Wordpress</li>
                                <li>25 GB Storage</li>
                            </ul>
                            <div class="price-actions">
                                <a href="#" class="btn btn-blue">Get it now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Table-->
                </div>

                <p class="extra-pricing">Nothing for you? Contact us for a custom quote, we're available for freelance work!</p>
                <a href="#contact" class="btn btn-blue btn-lg scroll">Contact us now</a>
            </div>
        </section>
        <!-- ========== Section /Pricing ========== -->

        <!-- ========== Section Blog ========== -->
        <section class="section-blog text-center wow fadeInUp" id="blog" data-type="background" data-speed="10">
            <div class="container">
                <h2 class="title">Blog</h2>
                <hr class="underline">
                <p class="description">Our latest news and behind the scenes</p>
                <div class="row">
                    <div id="blog-slides" class="owl-carousel">
                        <div>
                            <h3>23 March</h3>
                            <div class="meta-row">
                                <div class="author">
                                    <i class="fa fa-pencil"></i>
                                    Max Riley
                                </div>
                                <div class="date">
                                    <i class="fa fa-calendar-o"></i>
                                    Sunday, 12:30 PM
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments"></i>
                                    8 Comments
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <h4><a href="#">Suspendisse et mauris nisi, in semper justo takilano.</a></h4>
                                <p>Liquorice jelly halvah ice cream pie jelly beans biscuit carrot cake. Gingerbread danish icing fruitcake croissant biscuit. Donut wafer brownie chocolate jujubes marshmallow sweet roll. Caramels pudding soufflé dessert.
                                    <br>
                                    <br>Sugar plum chocolate bar candy canes. Pie pastry chocolate. Candy donut tootsie roll candy canes bonbon. Bear claw fruitcake soufflé cupcake pastry danish. Danish jelly beans chupa chups ice cream toffee gingerbread toffee
                                    tootsie roll chocolate bar.
                                    <br>
                                    <br>Brownie tiramisu fruitcake caramels ice cream marzipan. Candy lemon drops sugar plum chocolate bar halvah cupcake tootsie roll icing. Soufflé marshmallow macaroon oat cake unerdwear.com ice cream.
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img class="img-responsive" src="\theme\themes\Phantasos\img\blog1.png" alt="Description">
                            </div>
                        </div>
                        <div>
                            <h3>18 March</h3>
                            <div class="meta-row">
                                <div class="author">
                                    <i class="fa fa-pencil"></i>
                                    Max Riley
                                </div>
                                <div class="date">
                                    <i class="fa fa-calendar-o"></i>
                                    Tuesday, 6:30 AM
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments"></i>
                                    19 Comments
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <h4><a href="#">Suspendisse et mauris nisi, in semper justo takilano.</a></h4>
                                <p>Liquorice jelly halvah ice cream pie jelly beans biscuit carrot cake. Gingerbread danish icing fruitcake croissant biscuit. Donut wafer brownie chocolate jujubes marshmallow sweet roll. Caramels pudding soufflé dessert.
                                    <br>
                                    <br>Sugar plum chocolate bar candy canes. Pie pastry chocolate. Candy donut tootsie roll candy canes bonbon. Bear claw fruitcake soufflé cupcake pastry danish. Danish jelly beans chupa chups ice cream toffee gingerbread toffee
                                    tootsie roll chocolate bar.
                                    <br>
                                    <br>Brownie tiramisu fruitcake caramels ice cream marzipan. Candy lemon drops sugar plum chocolate bar halvah cupcake tootsie roll icing. Soufflé marshmallow macaroon oat cake unerdwear.com ice cream.
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img class="img-responsive" src="\theme\themes\Phantasos\img\blog2.png" alt="Description">
                            </div>
                        </div>

                        <div>
                            <h3>1 March</h3>
                            <div class="meta-row">
                                <div class="author">
                                    <i class="fa fa-pencil"></i>
                                    Max Riley
                                </div>
                                <div class="date">
                                    <i class="fa fa-calendar-o"></i>
                                    Saturday, 18:10 PM
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments"></i>
                                    25 Comments
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <h4><a href="#">Suspendisse et mauris nisi, in semper justo takilano.</a></h4>
                                <p>Liquorice jelly halvah ice cream pie jelly beans biscuit carrot cake. Gingerbread danish icing fruitcake croissant biscuit. Donut wafer brownie chocolate jujubes marshmallow sweet roll. Caramels pudding soufflé dessert.
                                    <br>
                                    <br>Sugar plum chocolate bar candy canes. Pie pastry chocolate. Candy donut tootsie roll candy canes bonbon. Bear claw fruitcake soufflé cupcake pastry danish. Danish jelly beans chupa chups ice cream toffee gingerbread toffee
                                    tootsie roll chocolate bar.
                                    <br>
                                    <br>Brownie tiramisu fruitcake caramels ice cream marzipan. Candy lemon drops sugar plum chocolate bar halvah cupcake tootsie roll icing. Soufflé marshmallow macaroon oat cake unerdwear.com ice cream.
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img class="img-responsive" src="\theme\themes\Phantasos\img\blog3.png" alt="Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Section /Blog ========== -->

        <!-- ========== Section Contact ========== -->
        <section class="section-contact text-center wow fadeInUp" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="title">ติดต่อเรา</h2>
                        <hr class="underline">
                        <p class="description">สำหรับลูกค้าสามารถติดต่อเราได้ที่ 52/8 หมู่ 2 ซ.21 ต.เชียงคาน อ.เชียงคาน จ.เลย 42110 Tel.084-7931944</p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="alert alert-success hidden" id="contact-form-msg">Your message has been sent!</p>
                        <form id="contact-form" class="form-horizontal" method="post" action="\theme\frontend\views\layouts\form.php">
                            <div class="form-group">
                                <div class="col-md-6 marginb14">
                                    <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="ชื่อ">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="contact-email" name="contact-email" placeholder="E-mail">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 marginb14">
                                    <input type="text" class="form-control" id="contact-subject" name="contact-subject" placeholder="เรื่อง">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="human" placeholder="10+10 = ?">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea class="form-control" rows="8" id="contact-message" name="contact-message" placeholder="เนื้อหา"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input type="submit" class="btn btn-blue btn-lg" id="submit" name="submit" value="ส่ง" formaction="\theme\frontend\views\layouts\form.php">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== /Section Contact ========== -->


        <!-- Footer -->
        <footer class="main">
            <div class="container">
                <div class="row text-center sharing wow fadeInUp">
                    <h2>Join and follow us</h2>
                    <hr class="underline">
                    <a href="http://facebook.com" target="_blank" class="footer-icon color-fb"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com" target="_blank" class="footer-icon color-tw"><i class="fa fa-twitter"></i></a>
                    <a href="http://google.com" target="_blank" class="footer-icon color-gp"><i class="fa fa-google-plus"></i></a>
                    <a href="http://tumblr.com" target="_blank" class="footer-icon color-tm"><i class="fa fa-tumblr"></i></a>
                    <a href="http://youtube.com" target="_blank" class="footer-icon color-yt"><i class="fa fa-youtube-play"></i></a>
                    <p>Developed by<a href="http://socia.li">Socia.li</a></p>
                    <a href="#home" class="btn to-top-btn animated slideInRight"><i class="fa fa-angle-up"></i></a>
                    <div class="container">
                        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                        <p class="pull-right"><?= Yii::powered() ?></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript Files -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlipCTF8euHrOAcRW9kpvouQdV6ahAjic&sensor=false"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/magnific.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.min.js"></script>
        <script src="js/script.js"></script -->

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
