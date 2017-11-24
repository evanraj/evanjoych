<?php get_header() ?>

    <body>
        <section class="bg">
            <section class="container-fluid logo-section">
                <div class="row">
                    <div class="col-lg-6 col-md-6 logo-res">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/logo.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="menu-bar">
                            <nav>
                                <!-- <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-chevron-down"></i></a> -->
                                <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                <div id="sidebar-wrapper">
                                    <ul class="sidebar-nav">
                                        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
                                        <br>
                                        <?php chaos_header_new_menu()?>
                                            <div class="sm sm-mob visible-sm visible-xs">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="menu-bar">
                        <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        <div id="sidebar-wrapper">
                            <ul class="sidebar-nav">
                                <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>

                                <li class="sidebar-brand">
                                    <a href="index.html">Chaos</a>
                                </li>
                                <li>
                                    <a href="ps.html">Play Station</a>
                                </li>
                                <li>
                                    <a href="lazer.html">Lazer Tag</a>
                                </li>
                                <li>
                                    <a href="football.html">Fifa</a>
                                </li>
                                <div class="sm sm-mob visible-sm visible-xs">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="sm visible-lg visible-md">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </div>
                </div> -->
                    </div>
            </section>
            <section class="container">


                <div class="circle-container hidden-xs hidden-sm">
                    <div class="quarter-circle-bottom-right">
                        <div class="moving-circle menu1-cir menu-data-1 active">
                            <div class="circle-in">

                            </div>
                        </div>
                        <div class="moving-circle menu2-cir menu-data-2">
                            <div class="circle-in">

                            </div>
                        </div>

                        <div class="moving-circle menu3-cir menu-data-3">
                            <div class="circle-in">

                            </div>
                        </div>

                        <div class="moving-circle menu4-cir menu-data-4">
                            <div class="circle-in">

                            </div>
                        </div>

                        <div class="moving-circle menu5-cir menu-data-5">
                            <div class="circle-in">

                            </div>
                        </div>

                        <div class="moving-circle menu6-cir menu-data-6">
                            <div class="circle-in">

                            </div>
                        </div>

                    </div>
                    <div class="circle-menu menu1 menu-data-1 active"><a href="<?php echo site_url() ?>">HOME</a></div>
                    <div class="circle-menu menu2 menu-data-2"><a href="<?php echo site_url() ?>/play-station/">GAMING</a></div>
                    <div class="circle-menu menu3 menu-data-3"><a href="<?php echo site_url() ?>/futsal/">FUTSAL</a></div>
                    <div class="circle-menu menu4 menu-data-4"><a href="<?php echo site_url() ?>/lazer-page/">LASER TAG</a></div>
                    <div class="circle-menu menu5 menu-data-5"><a href="<?php echo site_url() ?>/sb/">TOURNAMENT</a></div>
                    <div class="circle-menu menu6 menu-data-6">SCREENING</div>
                </div>


                <div class="slide">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" data-menu="1">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/home-banner.png" alt="">
                                <div class="carousel-caption">

                                </div>
                            </div>
                            <div class="item" data-menu="2">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/slide-1.png" alt="">
                                <div class="carousel-caption">

                                </div>
                            </div>
                            <div class="item" data-menu="3">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/img/home-banner-3.png" alt="">
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

            <section class="event">
                <section class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <h1>CHAOS ENTERTAINMENT</h1>
                            <span>TIMING - 10 AM</span>
                            <p>The line between real world and virtual world seamlessly merge here! </p>
                            <hr class="visible-lg visible-md">
                        </div>
                        <div class="col-lg-12">
                            <div class="dates">
                                <h2>UPCOMING <span>EVENTS</span></h2>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 month">
                                        <div class="date-list">
                                            <span>6</span>
                                            <br><span>SEP-16</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 month">
                                        <div class="date-list">
                                            <span>6</span>
                                            <br><span>SEP-16</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 month">
                                        <div class="date-list">
                                            <span>6</span>
                                            <br><span>SEP-16</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
        <?php get_footer() ?>