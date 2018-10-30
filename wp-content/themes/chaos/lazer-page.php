<?php
/**
 * Template Name: Lazer Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>

    <section class="ps-bg lazer-bg">
        <header id="home-lz">
            <section class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-6">
                        <div class="ps-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/logo.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> </button>
                                    <!--                                    <a class="navbar-brand visible-xs" href="#">Menu</a>-->
                                </div>
                                <?php chaos_header_menu() ?>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#home-lz" class="page-scroll">HOME</a></li>
                                        <li><a href="#about-lz" class="page-scroll">ABOUT</a></li>
                                        <li><a href="#lz-fac" class="page-scroll">FACILITIES</a></li>
                                        <li><a href="#lz-memb" class="page-scroll">MEMBERSHIP</a></li>
                                        <li><a href="#lz-winner" class="page-scroll">WINNER</a></li>
                                        <li><a href="#lz-contact" class="page-scroll">CONTACT</a></li>
                                    </ul>
                                </div> -->
                                    <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                    </div>
                    <div class="menu-bar">
                        <nav>
                            <!-- <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-chevron-down"></i></a> -->
                            <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <div id="sidebar-wrapper">
                                <ul class="sidebar-nav">
                                    <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove">
                                    </i></a>
                                    <br>
                                    <?php chaos_header_new_menu()?>
                                        <div class="sm sm-mob visible-sm visible-xs">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </div>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
        </header>
        <section class="lz-banner">
            <div class="container-fluid">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/lazer-banner.jpg" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/lazer-banner-2.jpg" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                          <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/lazer-banner-3.jpg" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="lazer-about " id="about">
            <!-- class for animation "postt" -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="joy-text">
                            <div class="lazer-title">
                                <h2>ABOUT<br><span>CHAOS</span></h2>
                            </div>
                            <p>Laser tag in Chennai was Chaos Entertainment's vision. Today the popularity for this fun game is widespread in the city thanks to that vision. We've created a culture of competition around laser tag that has proven to be highly addictive. Chaos has the largest laser tag arena in Chennai. So, there’s a lot of space to move and unleash your combating capabilities. We've seen the smiles and the laughter. And we invite you to come and enjoy the same way!</p>
                            <p>So, call up your friends and form your teams! Dev team vs Sales team? Mechanical vs Civil? Grab your laser guns and battle it out with fun, only at Chaos.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 hidden-lg hidden-xs">
                        <div class="joy-img">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/lazer-ab.png" alt="" class="img-responsive">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="facility-lazer facility" id="fac">
            <div class="container">
                <div class="fac-bg">
                    <div class="row">
                        <h2>FACILITIES</h2>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="facility-con" data-list="#facility1">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/corprate_small.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="facility-con" data-list="#facility2">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/birthday.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="facility-con" data-list="#facility3">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/out_small.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="facility-con" data-list="#facility4">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/happy-hour.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="facility-con" data-list="#facility5">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/foot_1.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="facility-con" data-list="#facility6">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/online_1.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                            <div class="row face-list">
                                <div class="col-lg-12">
                                    <div class="face-content active" id="facility1">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/corprate_big.jpg" alt="" class="img-responsive">
                                        <h4>Corporate Packages</h4>
                                        <p>Hire the floor!</p>
                                        <p>We know that a corporate outing calls for variety and a mix of many things to do! We have a corporate package tailor made for that! You can hire the floor for an hour!</p>
                                        <p>The corporate happiness equation:</p>
                                        <p>1 Hour of (Laser Tag / Futsal + Console gaming) = Rs. 6000.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="face-content" id="facility2">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/birthday_big.jpg" alt="" class="img-responsive">
                                        <h4>Birthday Packages</h4>
                                        <p>Birthday celebrations at Chaos are the ultimate fun experience for kids and adults alike. Our birthday package includes decorations and arrangements. Contact us for more info.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="face-content" id="facility3">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/out_big.jpg" alt="" class="img-responsive">
                                        <h4>Outdoor Events</h4>
                                        <p>What is that? You wish to create Chaos at your college / office / community festival ? Get in touch with us! Our portable equipments allow us setup a laser tag / gaming arena at your venue! </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="face-content" id="facility4">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/hour_big.jpg" alt="" class="img-responsive">
                                        <h4>Happy Hours</h4>
                                        <p>While every hour is a happy hour at Chaos, we do have the time honored ‘happy hours’ package. Happy Hours package has slashed rates across the various activities. But, here’s the catch - You’ll have to call us to find out if the time you’ve chosen is a Happy Hour.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="face-content" id="facility5">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/foot_1Big.jpg" alt="" class="img-responsive">
                                        <h4>Cafeteria</h4>
                                        <p>There’s no need to rush off after the games! We have a cafeteria where you can chill with your pals. Click here to find out what’s on the menu.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="face-content" id="facility6">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/online_1_big.jpg" alt="" class="img-responsive">
                                        <h4>Online Booking</h4>
                                        <p>Find out if your favorite slot is free! Book your slot online through gameday or Implay. </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--
                        <div class="col-lg-10 col-md-12">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                        </div>
-->
                    </div>
                </div>
            </div>
        </section>
        <section class="membership" id="memb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="memb-text lazer-memb ">
                            <h2>MEMBERSHIP</h2>
                            <p>Sign up for membership at Chaos ! Patrons with a Chaos membership card enjoy monetary benefits and more.</p>
                            <button><a href="">JOIN NOW</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="winner" id="score">
            <section class="container">
                <div class="winner-bg ">
                    <div class="row">
                        <h2>WINNERS</h2>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <h3>WINNER<br>OF<br>THE WEEK</h3>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/winner.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12">
                            <p>Congratulations for your fabulous victory! You are riding the wave of success! You're a laser tag superstar!</p>
                            <button><a href="">JOIN NOW</a></button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--

        <div class="winner" id="score">
            <section class="container">
                <div class="winner-bg ">
                    <div class="row">
                        <h2>WINNERS</h2>

                        <div class="col-lg-7 col-md-4 col-sm-6">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/winner.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-12">
                            <h3>WINNER<br>OF<br>THE WEEK</h3>
                            <h4>200 POINT</h4>
                            <p>Congratulations  for your fabulous victory! You are riding the wave of success!! You're a laser tag superstar! Congratulations  for your fabulous victory! You are riding the wave of success!! You're a laser tag superstar! </p>

                        </div>
                    </div>
                </div>
            </section>
        </div>
-->

        <section class="contact contact-lz" id="contact">
            <section class="container">
                <div class="contact-bg ">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>CONTACT US</h2>
                            <p>Get in touch with us and book your slots! Let's have fun! </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-inline">
                                <?php echo do_shortcode('[contact-form-7 id="20" title="Contact Chaos"]') ; ?>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="adres">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="adres-icon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Avvai Shanmugam Salai, Gopalapuram, Chennai, Tamil Nadu 600014</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="adres-icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i><span>099401 40757</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="adres-icon">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i><span>chaos@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="sm-ps sm-lz">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>2016 All rights reserved. Developed by <a href="http://ajnainfotech.com" target="_blank">Ajna Infotech</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <?php get_footer(); ?>