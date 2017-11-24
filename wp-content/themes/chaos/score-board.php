<?php
/**
 * Template Name: Score Board
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
    <section class="sb-bg">
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
                                <?php //chaos_header_menu() ?>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#point-table" class="page-scroll">POINT TABLE</a></li>
                                            <li><a href="#gallery" class="page-scroll">PHOTOS</a></li>
                                            <li><a href="#youtube" class="page-scroll">VIDEOS</a></li>
                                            <li><a href="#squad" class="page-scroll">SQUADS</a></li>
                                            <li><a href="#article" class="page-scroll">ARTICLES</a></li>
                                            <li><a href="#contact" class="page-scroll">CONTACT</a></li>
                                        </ul>
                                    </div>
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
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/sb-bg.jpg" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/sb-bg.jpg" alt="">
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
        <!--        accordion-->
        <div class="js-responsive-table visible-xs">
            <table>

                <tr>
                    <th>TEAM</th>
                    <th>GP</th>
                    <th>w</th>
                    <th>D</th>
                    <th>L</th>
                    <th>GF</th>
                    <th>GA</th>
                    <th>GD</th>
                    <th>PTS</th>
                </tr>

                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Ind</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>
                <tr>

                    <td>Aust</td>
                    <td>26</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>64</td>
                    <td>23</td>
                    <td>34</td>
                </tr>

            </table>
        </div>

        <!--        accordion end-->
        <section class="team-bg hidden-xs" id="point-table">
            <div class="table-bg">
                <div class="yellow-bg">

                </div>
                <div class="container">
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>TEAM</th>
                                    <th>GP</th>
                                    <th>w</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>GF</th>
                                    <th>GA</th>
                                    <th>GD</th>
                                    <th>PTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Aust</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>64</td>
                                    <td>23</td>
                                    <td>34</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="membership-score" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>GALLERY</h2>
                        <p>Tournament highlights caught on camera. Lots of ROFL and OMG moments.. Enjoy!</p>
                    </div>

                    <div class="col-md-12">
                        <div class="gal-one">
                            <div class="row">

                                <div class="col-md-3 col-sm-3">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_3.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_4.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch-7.jpg" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="gal-two">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch-8.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_5.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_6.jpg" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button><a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></button>
                </div>
            </div>
        </section>
        <section class="youtube-pg" id="youtube">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <div class="active-vedio">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/vSuSS5z1eSw?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                        <div class="sugg">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-4 col-xs-6">
                                    <div class="sug-1">
                                        <iframe width="180" height="113" src="https://www.youtube.com/embed/vSuSS5z1eSw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 hidden-sm hidden-xs">
                                    <div class="sug-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <a href="">View</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-4 col-xs-6">
                                    <div class="sug-1">
                                        <iframe width="180" height="113" src="https://www.youtube.com/embed/vSuSS5z1eSw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 hidden-sm hidden-xs">
                                    <div class="sug-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <a href="">View</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-4 col-xs-6">
                                    <div class="sug-1">
                                        <iframe width="180" height="113" src="https://www.youtube.com/embed/vSuSS5z1eSw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 hidden-sm hidden-xs">
                                    <div class="sug-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <a href="">View</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-4 col-xs-6">
                                    <div class="sug-1">
                                        <iframe width="180" height="113" src="https://www.youtube.com/embed/vSuSS5z1eSw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 hidden-sm hidden-xs">
                                    <div class="sug-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <a href="">View</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-4 col-xs-6">
                                    <div class="sug-1">
                                        <iframe width="180" height="113" src="https://www.youtube.com/embed/vSuSS5z1eSw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 hidden-sm hidden-xs">
                                    <div class="sug-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <a href="">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="squad" id="squad">
            <div class="container">
                <div class="row">
                    <h2>SQUADS</h2>
                    <div class="col-md-4 col-sm-5">
                        <ul class="squad-list">
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                            <li>India</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-md-offset-1 col-sm-5">
                        <ul class="team-members">
                            <h3>TEAM INDIA</h3>
                            <li>Evan Roj <span>(C)</span></li>
                            <li>Evan Roj</li>
                            <li>Evan Roj</li>
                            <li>Evan Roj <span>(WC)</span></li>
                            <li>Evan Roj</li>
                            <li>Evan Roj</li>
                            <li>Evan Roj</li>
                            <li>Evan Roj</li>
                            <li>Evan Roj</li>
                            <li>Evan Roj <span>(WK)</span></li>
                            <li>Evan Roj</li>
                            <li>Evan Roj</li>

                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="captain">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_12.jpg" alt="" class="img-responsive">
                            <h4>Evan Roj</h4>
                            <span>Captain</span>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="article" id="article">
            <div class="container">
                <div class="row">
                    <h2>ARTICLE</h2>
                    <div class="col-md-6 col-sm-6">
                        <h3><span>Lorem Ipsum</span> is simply<br> dummy text of the printing</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum has been the industry's standard</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="article-mainjp">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_9.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="test-ar1">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_10.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                    <button><a href="">View more</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="test-ar1">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="<?php echo get_template_directory_uri() ?>/inc/img/ch_11.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                    <button><a href="">View more</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <section class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <h2>CONTACT US</h2>
                        <p>Get in touch with us and book your slots! Let's have fun! </p>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-inline">
                            <div class="form-group">

                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Name">
                            </div>
                            <div class="form-group">

                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" placeholder="Phone">
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12">
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

    </section>
    <script>
        /* see: http://jsfiddle.net/Freizeitler/fzJLZ/ */
        /**
         * Responsive HTML Table
         *
         * @desc RWD: HTML table turns into an accordion.
         * @author [HZ]
         * @dependency jQuery
         */
        $.fn.responsiveTable = function () {
            $(this).find('table').each(function () {
                var trAcc = $(this).find('tr').not('tr:first-child'),
                    thHead = [];

                $(this).find('tr:first-child td, tr:first-child th').each(function () {
                    headLines = $(this).text();
                    thHead.push(headLines);
                });

                trAcc.each(function () {
                    for (i = 0, l = thHead.length; i < l; i++) {
                        $(this).find('td').eq(i + 1).prepend('<h3>' + thHead[i + 1] + '</h3>');
                    }
                });

                trAcc.append('<i class="icon-accordion">+</i>');
                trAcc.click(function () {
                    if ($(this).hasClass('accordion-opened')) {
                        $(this).animate({
                            maxHeight: '60px'
                        }, 200).removeClass('accordion-opened').find('.icon-accordion').text('+');

                    } else {
                        $(this).animate({
                            maxHeight: '1000px'
                        }, 400).addClass('accordion-opened').find('.icon-accordion').text('-');
                    }
                });
            });
        };

        // Init
        $(function () {
            $('.js-responsive-table').responsiveTable();
        });
    </script>



    <?php get_footer(); ?>