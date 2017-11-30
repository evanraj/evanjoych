<?php
/**
 * Template Name: Membership Account Page
**/
 get_header(); ?>

<?php 

$authors = getAllUserSelect();
global $wpdb;
$redeem_table = $wpdb->prefix.'chaos_redeem_points';
global $user_ID, $user_identity; 



if( isset($_POST['action']) && $_POST['action'] == 'redeem_data'  ) {
 	$redeem_data = array(
 		'member_id' => $_POST['member_id'],
 		'redeemed_point' =>$_POST['redeem_point'],
 		'balance_point'=>$_POST['balance_point'],
 		);
 	$wpdb->insert($redeem_table,$redeem_data);
 	$insert_id = $wpdb->insert_id;
 	$add_points = redeemPoints($_POST['member_id'],$_POST['redeem_point']);
	$credit_point_table = addPointsInCreditPointsTable($_POST['member_id'],$_POST['redeem_point'],'redeem_table',$insert_id);
 }  
$member_details = getMemberDetails($user_ID);
 $member_redeem_details = getRedeemPoint($user_ID);
?>
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
                                            <li><a href="#" class="page-scroll">Welcome, <?php echo $user_identity; ?></a></li>
                                            <li><a href="<?php echo wp_logout_url('index.php'); ?>" class="page-scroll">Logout</a></li>
                                        </ul>
                                    </div>                                      
                                </div>                                
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
            .redeem-content input {
            	padding: 7px 12px;
    			margin: 20px 0;
    			border: 1px solid #ffb514;
    			background: #000;
    			color: #ffb514;
            }
            .redeem-content input:hover {
            	background: #1b1a18;
            	color: #fff;
            }

                
    
        </style>       
        <div class="testing" style=" padding-top: 150px;" >           
            <section class="membership " id="memb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="memb-text">
                                <h2 > <span class="active1" > <a   href="#">Profile</a></span> | <a href="<?php echo site_url() ?>/redeem-history/">Redeem History</a></h2>                               
                            	<div class="row">
                    				<div class="col-lg-6 col-xs-12 memeber-content ">
                                        <div class="redeem-box">
    		                                <p>Membership No : <?php echo $member_details->membership_no;  ?> </p>
    		                                <p>Name : <?php echo $member_details->first_name;  ?> </p>
    		                                <p>Phone : <?php echo $member_details->phone;  ?></p>
    		                                <p>Total Points Earned  : <?php echo $member_details->earned_points;  ?></p>
    		                                <p>Points Redeemed  : <?php echo $member_details->redeem_points;  ?></p>
    		                                <p>Current Points   : <?php echo $member_details->balance_points;  ?></p>


                                        </div>
                            		</div> 
                                    <div class="col-lg-6  col-lg-12">
                                        <div class="redeem-box redeem-content">
                                        <?php //echo "<pre>";  var_dump($member_redeem_details); ?>
                                        <?php //var_dump($member_redeem_details->user_id); ?>

                                        <?php 
                                        if($member_redeem_details->is_eligible == '1') { 
                                        ?>
                                        	<p>congrats..!  </p>
                                        	<p>You have reached <?php  echo $member_redeem_details->balance_points; ?> Points</p>
                                        	<form class="form-horizontal form-label-left " action="" method="POST" id="">
                                        		<input type="hidden" name="member_id" value="<?php echo $member_redeem_details->user_id; ?>"/>

                                        		<lable>Redeem Ponits :</lable>
                                        		<input type="text" name="redeem_point" value="" required id="redeem_point"  class="redeem_point"  />	
                                        		
                                        		<input type="hidden" name="balance_point" value="<?php echo $member_redeem_details->balance_points; ?>" class="balance_point" />
                                        		<br>

												<input type="submit" class="player_add" id="submit" value="Redeem Now">
												<input type="hidden" name="action" class="action" value="redeem_data">
                                        	
                                        	<?php }  else { ?>
                                        		<p>You Need </p>
                                        		<span class="remain_points">
                                        			<?php $remain_points_to_redeem = 1000 - $member_details->balance_points  ?> 
                                        			<button><?php echo $remain_points_to_redeem;  ?></button>
                                        		<p>Points to Redeem</p>
                                        <?php } ?>                                        
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

    <script type="text/javascript">
    jQuery('#submit').click(function() {    	
    	
	});
    </script>
    <?php get_footer(); ?>
