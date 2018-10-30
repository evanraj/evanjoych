<?php
/**
 * Template Name: Play Station Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
    <section class="ps-bg">
        <div id="home">
            <header>
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
                                            <span class="icon-bar"></span>
                                        </button>
                                        <!--                                        <a class="navbar-brand visible-xs" href="#">Menu</a>-->
                                    </div>
                                    <?php chaos_header_menu() ?>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home" class="page-scroll">HOME</a></li>
                                            <li><a href="#about" class="page-scroll">ABOUT</a></li>
                                            <li><a href="#facility" class="page-scroll">FACILITIES</a></li>
                                            <li><a href="#membership" class="page-scroll">MEMBERSHIP</a></li>
                                            <li><a href="#" class="page-scroll">SCOREBOARD</a></li>
                                            <li><a href="#contact" class="page-scroll">CONTACT</a></li>
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
            <section class="ps-banner">
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
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/pg-slide1.jpg" alt="">
                                <div class="carousel-caption">

                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/ps-banner-2.jpg" alt="">
                                <div class="carousel-caption">

                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/ps-banner-3.jpg" alt="">
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
        </div>
        <section class="joystick post" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="joy-text hidden-sm hidden-xs">
                            <div class="joy-title">
<!--                                <h2>WE ARE <br>CHAOS<br><span>SPORTS PLACE</span></h2>-->
                                <h2>IT'S ALL ABOUT <br>FINDING THE <span>CALM</span> IN THE <br><span>CHAOS</span></h2>
                            </div>
                        </div>
                        <div class="joy-text visible-sm visible-xs">
                            <div class="joy-sm">
<!--                                <h2>WE ARE CHAOS<br><span>SPORTS PLACE</span></h2>-->
                                 <h2>IT'S ALL ABOUT <br>FINDING THE <span>CALM</span> IN THE <br><span>CHAOS</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12">
                        <div class="joy-img">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/joyy.png" alt="" class="img-responsive post">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-8">
                        <p>The virtual world is so much cooler right? We love it as much as you do! At Chaos, we wished to build the coolest console gaming centre in Chennai. And we’ve built a gaming parlour that is above the ground! Like literally.</p>
                        <p>Welcome to new age PS4, XBox and PC LAN gaming in Chennai at Chaos. With utmost respect to the gaming community, we’ve summoned the best gaming facilities. Play COD, DOTA, FIFA 17 and more with your friends in a gamer friendly environment. Our uber cool parlour is the haven gamers in Chennai have been looking for. </p>
                        <p>Come join Chennai’s coolest gaming community at Chaos. We have gaming tournaments that you wouldn’t want to miss! </p>
                    </div>

                </div>
            </div>
        </section>
        <div class="testing">

            <section class="facilty" id="fac">
                <div class="container">
                    <h2>FACILITIES</h2>
                    <div class="fac-shown">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="wall-mount">
                                    <div class="box">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/l2.jpg" alt="" class="img-responsive post">
                                        <div class="overbox">
                                            <div class="title overtext">
                                                <h4>Steam Gaming:</h4> </div>
                                            <div class="tagline overtext">
                                                <p>Keep in touch with your online gaming community and get hassle free multiplayer gaming experience at Chaos. Play online tournaments with all the focus you require.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/l1.jpg" alt="" class="img-responsive post">
                                        <div class="overbox">
                                            <div class="title overtext">
                                                <h4>Tournaments:</h4> </div>
                                            <div class="tagline overtext">
                                                <p>Are you the FIFA star the Chennai needs to throw a spotlight on? Or are you the Black Ops shooter to behold? We constantly organise gaming tournaments. So, here’s your chance to shine on. Find out what’s in store this season:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ps-facilty">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box corp">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/c2.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Corporate Packages:</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>Hire the floor! We know that a corporate outing calls for variety and a mix of many things to do! We have a corporate package tailor made for that! You can hire the floor for an hour!</p>
                                                    <p>The corporate happiness equation:</p>
                                                    <p> 1 Hour of (Laser Tag / Futsal + Console gaming) = Rs. 6000..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box outdoor">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/c3.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Outdoor Events:</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>What is that? You wish to create Chaos at your college / office / community festival ? Get in touch with us! Our portable equipments allow us setup a laser tag / gaming arena at your venue! </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ps-facilty">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/c1.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Cafeteria:</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>There’s no need to rush off after the games! We have a cafeteria where you can chill with your pals. Click here to find out what’s on the menu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/c4.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Online Booking:</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>Find out if your favorite slot is free! Book your slot online through gameday or Implay. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="membership post" id="memb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="memb-text">
                                <h2>MEMBERSHIP</h2>
                                <p>Sign up for membership at Chaos! Patrons with a Chaos membership card enjoy monetary benefits and more.</p>
                                <button><a href="">JOIN NOW</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="slide-two post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="bxslider">
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/battle.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/cod.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/doom.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/dota.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/fifa-17.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/cs.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/masseffect.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri() ?>/inc/img/halo.jpg" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact post" id="contact">
                <section class="container">
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
                                    <div class="col-lg-3">
                                        <div class="adres-icon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Avvai Shanmugam Salai, Gopalapuram, Chennai, Tamil Nadu 600014</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="adres-icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i><span>099401 40757</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="adres-icon">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i><span>chaos@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="sm-ps">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
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
        </div>
    </section>

    <?php get_footer(); ?>