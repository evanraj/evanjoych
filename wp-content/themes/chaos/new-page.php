<?php
/**
 * Template Name: Membership Account
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
                                        <!-- <a class="navbar-brand visible-xs" href="#">Menu</a> -->
                                    </div>
                                    <?php //chaos_header_menu() ?>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                        	<?php 
                                            global $user_ID, $user_identity; 
                                            $member_details = getMemberDetails($user_ID);
                                            $redeem_remain = 1000-$member_details->earned_points;                                            
                                            ?>
                                            <li><a href="#" class="page-scroll">Welcome, <?php echo $user_identity; ?></a></li>
                                            <li><a href="<?php echo wp_logout_url('index.php'); ?>" class="page-scroll">Logout</a></li>
                                        </ul>
                                    </div>
                                        <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.container-fluid -->
                            </nav>
                        </div>                        
                    </div>
                </section>
            </header>            
        </div>
        <style type="text/css">
        	.memeber-content p {
        		text-align: left;
        		font-size: 19px;
        		color: #eaeaea;
        	}

            .redeem-content p {
                text-align: center;
                font-size: 19px;
                color: #eaeaea;    
            }
            .memb-text h2 {
                color: #ffb514;
                letter-spacing: 1px;
            }
            .memb-text a {
                color: #d0d0d0;
                text-decoration: none;
            }
            .memb-text a:hover {
                color: #ffb514;   
            }
            .redeem-box {
                border: 1px solid #ffb514;
                padding: 30px 30px 30px 30px;
                margin: 10px 10px 10px 10px;
            }
            .memb-text .active1 a {
                color: #ffb514;
            }

            .redeem-content button {
                padding: 7px 12px;
                margin: 20px 0;

            }

            .redeem-content button:hover {
                background: #1b1a18;
                color: #000;

            }
            .remain_points {
                font-size: 52px;
            }
        </style>       
        <div class="testing" style=" padding-top: 150px;" >           
            <section class="membership post" id="memb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="memb-text">
                                <h2 > <span class="active1" > <a   href="#">Profile</a></span> | <a href="#">Redeem History</a> | <a href="#">Billing History</a>  </h2>                               
                            	<div class="row">
                    				<div class="col-lg-6 col-xs-12 memeber-content ">
                                        <div class="redeem-box">
    		                                <p>Membership No : <?php echo $member_details->membership_no;  ?> </p>
    		                                <p>Name : <?php echo $member_details->first_name;  ?> </p>
    		                                <p>Phone : <?php echo $member_details->phone;  ?></p>
    		                                <p>Earned Points : <?php echo $member_details->earned_points;  ?></p>
                                        </div>
                            		</div> 
                                    <div class="col-lg-6  col-lg-12">
                                        <div class="redeem-box redeem-content">
                                        <?php echo  ($member_details->earned_points >= 1000)?'<p>congrats . .  .!  </p>  <p>You have reached '.$member_details->earned_points.' Points</p> <button><a href="">Redeem NOW</a></button>':'<p>You Need </p><span class="remain_points">'.$redeem_remain.'</span><p> Points to Redeem  </p>'; ?>
                                        </div>                                        
                                    </div>                            		
                        		</div>                        		
                        	</div>
                        </div>
                    </div>
                </div>
            </section>            
           <!--  <section class="contact post" id="contact">
                <section class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <h2>CONTACT US</h2>
                            <p>Get in touch with us and book your slots! Let's have fun! </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-inline">
                                <?php //echo do_shortcode('[contact-form-7 id="20" title="Contact Chaos"]') ; ?>

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
            </section> -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                            <p>2016 All rights reserved. Developed by <a href="http://ajnainfotech.com" target="_blank">Ajna Infotech</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    <?php get_footer(); ?>

