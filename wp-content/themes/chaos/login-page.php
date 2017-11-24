<?php
/**
 * Template Name: Login Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */
 get_header() ?>

    <body>
        <section class="bg">
            <section class="container-fluid logo-section">
                <div class="row">
                    <div class="col-lg-6 col-md-6 logo-res">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri() ?>/inc/img/logo.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <style type="text/css">
                        
                        .home-login-button {
                            float: right;
                            color: white;                            
                            font-size: 35px;
                            font-size: 18px;                             
                            margin: 52px 60px 0 0 ;
                        }

                        .home-login-button a {
                            color: #fff !important;
                            text-decoration: none;
                        }

                        .home-login-button a:hover {
                            color: #ffb514 !important;
                        }
                        .carousel-control {
                            display: none;
                        }
.event {
    top: 200px;
}                    
form {
  background: white;
  width: 50%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 10px;
   text-align: left;
margin: 0 auto;
font-size: 18px;
}
form header {
  background: #060a0d;
  padding: 30px 20px;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  border-radius: 10px 10px 0 0;
}
form label {
  margin-left: 20px;
  display: inline-block;
  margin-top: 30px;
  margin-bottom: 5px;
  position: relative;
}
form label span {
  color: #FF3838;
  font-size: 2em;
  position: absolute;
  left: 2.3em;
  top: -10px;
}
form input {
  display: block;
  width: 78%;
  margin-left: 20px;
  padding: 5px 20px;
  font-size: 1em;
  border-radius: 3px;
  outline: none;
  border: 1px solid #ccc;
}
form .help {
  margin-left: 20px;
  font-size: 0.8em;
  color: #777;
}
form button {
  position: relative;
  margin-top: 30px;
  margin-bottom: 30px;
  left: 50%;
  transform: translate(-50%, 0);
  font-family: inherit;
  color: white;
  background: #060a0d;
  outline: none;
  border: none;
  padding: 5px 15px;
  font-size: 1.3em;
  font-weight: 400;
  border-radius: 3px;
  box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
  cursor: pointer;
  transition: all 0.15s ease-in-out;
}
form button:hover {
  background: #000;
}




                        @media  screen and (max-width: 991px)  {
                            .home-login-button {
                                margin: 22px 60px;
                            }
                        }




                    </style>
                    <div class="col-lg-6 col-md-6"> 
                        <div class="home-login-button" >
                            <a href="<? echo site_url(); ?>/login">Log In</a>
                        </div>                
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
                    </div>
            </section>

            <section class="event">
                <section class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 "> 
                        <?php global $user_ID, $user_identity; if (!$user_ID) { ?> 
                        <?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>
                            <?php } elseif ($reset == true) { ?>
                            <h3>Success!</h3>
                            <p>Check your email to reset your password.</p>
                            <?php } else { ?>                            
                            <p>Have an account? </em></p>
                            <span style=" color:#fefefe; font-size: 15px;   " ><?php echo ( $_GET['action'] == 'login' && $_GET['failed'] == '1' )?'Invalid Login Id':''; ?></span>
                            <?php } ?>
                                                      
                            <form method="post" action="<?php bloginfo('url') ?>/wp-login.php">
                              <header>Login</header>
                              <label>Username <span>*</span></label>
                              <input type="text" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login"  required />
                              
                              <label>Password <span>*</span></label>
                              <input type="password" name="pwd" value="" size="20" id="user_pass"   required />
                              
                              <button type="submit">Login</button>                                                            
                              <input type="hidden" name="user-submit" value="<?php _e('Login'); ?>"  class="user-submit" />
                              <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
                              <input type="hidden" name="user-cookie" value="1" />
                            </form>

                            <?php }else { // is logged in ?>
                                <div class="sidebox">
                                    <h3>Welcome, <?php echo $user_identity; ?></h3>
                                    <div class="usericon">
                                        <?php global $userdata; echo get_avatar($userdata->ID, 60); ?>
                                    </div>
                                    <div class="userinfo">
                                        <p>You&rsquo;re logged in as <strong><?php echo $user_identity; ?></strong></p>
                                        <p>
                                            <a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a> | 
                                            <?php if (current_user_can('manage_options')) { 
                                                echo '<a href="' . admin_url() . '">' . __('Admin') . '</a>'; } else { 
                                                echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>'; } ?>
                                        </p>
                                    </div>
                                </div>

                            <?php } ?>
                            <hr class="visible-lg visible-md">
                        </div>
                       
                    </div>
                </section>
            </section> 

            

            
        
        <?php get_footer() ?>