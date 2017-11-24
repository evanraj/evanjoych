<?php
/**
 * Template Name: FIFA Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
    <section class="foot-bg">
        <header class="foot-head" id="home">
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
                                </div>
                                <?php chaos_header_menu() ?>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#home" class="page-scroll">HOME</a></li>
                                        <li><a href="#about" class="page-scroll">ABOUT</a></li>
                                        <li><a href="#fac" class="page-scroll">FACILITIES</a></li>
                                        <li><a href="#memb" class="page-scroll">MEMBERSHIP</a></li>
                                        <li><a href="#score" class="page-scroll">SCOREBOARD</a></li>
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
        <section class="foot-banner">
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
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/futsal-ban.jpg" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/futsal-ban2.jpg" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/futsal-ban3.jpg" alt="">
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

        <div class="fifa-bg1 post-foot" id="about">
            <section class="fifa-about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="fifa-text">
                                <h3>Chaos is relentlessly committed to elevating your sporting experience </h3>
                                <p>Have you been playing turf football at cramped spaces? Well, football without sidelines ain’t football bro! Welcome to Futsal by Chaos ! We have FIFA certified football turf complete with sidelines and goal posts.</p>
                                <p>With locker rooms, change rooms and cafeteria, Futsal provides for the most pleasant five a side football experience in Chennai.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="fifa-bg2 post-foot" id="fac">
            <section class="facilty fifa-portfolio">
                <div class="container">
                    <h2>FACILITIES</h2>
                    <h4 style="color: #fff;" class="text-center">Find out if your favorite slot is free! Book your slot online through gameday or Implay. </h4>
                    <div class="fac-shown">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="wall-mount">
                                    <div class="box">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/S70_1.jpg" alt="" class="img-responsive post">
                                        <div class="overbox">
                                            <div class="title overtext">
                                                <h4>FIFA certified turf</h4> </div>
                                            <div class="tagline overtext">
                                                <p>At Chaos we have a FIFA certified turf to make your soccer special. Why play in a turf where there are no sidelines or goalposts when you have all that at Futsal by Chaos Entertainment?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <img src="<?php echo get_template_directory_uri() ?>/inc/img/S70_2.jpg" alt="" class="img-responsive post">
                                        <div class="overbox">
                                            <div class="title overtext">
                                                <h4>Locker room facility</h4> </div>
                                            <div class="tagline overtext">
                                                <p>Separate Locker room and changing rooms are available at Futsal. So, you don’t have anything other than the game on your mind.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ps-facilty">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box corp">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/290_3.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Tournaments</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>If you haven’t heard of Chaos Premier League yet, it’s the turf footballer’s dream tourney in Chennai. We constantly organise five a side tournaments that are sought after by patrons.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box corp">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/290_4.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Happy Hours</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>While every hour is a happy hour at Chaos, we do have the time honored ‘happy hours’ package. Happy Hours package has slashed rates across the various activities. But, here’s the catch - You’ll have to call us to find out if the time you’ve chosen is a Happy Hour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ps-facilty">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box corp">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/290_1.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Corporate Packages</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>Hire the floor!</p>
                                                    <p>We know that a corporate outing calls for variety and a mix of many things to do! We have a corporate package tailor made for that! You can hire the floor for an hour!</p>
                                                    <p>Contact us for deal.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12">
                                        <div class="box corp">
                                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/290_2.jpg" alt="" class="img-responsive post">
                                            <div class="overbox">
                                                <div class="title overtext">
                                                    <h4>Cafeteria</h4> </div>
                                                <div class="tagline overtext">
                                                    <p>There’s no need to rush off after the games! We have a cafeteria where you can chill with your pals. Click here to find out what’s on the menu. </p>
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
            <!-- <section class="fifa-portfolio">
                <div class="container">
                    <div class="row">
                        <h2>FACILITIES</h2>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="port-1">
                                <img src="<?php //echo get_template_directory_uri() ?>/inc/img/port-1.jpg" alt="" class="img-responsive">
                                <h3>dummmmmmy</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="port-2">
                                <img src="<?php //echo get_template_directory_uri() ?>/inc/img/port-1.jpg" alt="" class="img-responsive">
                                <h3>dummmmmmy</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="port-3">
                                <img src="<?php //echo get_template_directory_uri() ?>/inc/img/port-1.jpg" alt="" class="img-responsive">
                                <h3>dummmmmmy</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="port-4">
                                <img src="<?php //echo get_template_directory_uri() ?>/inc/img/port-1.jpg" alt="" class="img-responsive">
                                <h3>dummmmmmy</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
        <div class="fifa-bg3 post-foot" id="memb">
            <section class="membership-fifa">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="memb-fifa">
                                <h2>MEMBERSHIP</h2>
                                <p>Sign up for membership at Chaos ! Patrons with a Chaos membership card enjoy monetary benefits and more.</p>
                                <button><a href="">JOIN NOW</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="fifa-point post-foot" id="score">
            <div class="container">
                <div class="point-bg">
                    <div class="row">
                        <h2>POINT TABLE</h2>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="point-img">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/point-table.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="point-text">
                                        <h3>CHAOS SPORTS PLACE</h3>
                                        <p>Catch all the excitement sorrounding the Chaos Premier League. </p>
                                        <p> Find out if your favorite team's leading the game.. yes, we hope so too! Take a look at the points table.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="goals">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                                <span>5</span>
                                                <br>
                                                <span>Goals</span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                                <span>5</span>
                                                <br>
                                                <span>Goals</span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                                <span>5</span>
                                                <br>
                                                <span>Goals</span>
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
        <div class="fifa-foot post-foot" id="contact">
            <section class="contact">
                <section class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h2>Contact us</h2>
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
                                        <div class="sm-ps foot-sm">
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
        </div>
        <footer>

            <p>2016 All rights reserved. Developed by <a href="http://ajnainfotech.com" target="_blank">Ajna Infotech</a></p>

        </footer>
    </section>

    <?php get_footer() ?>