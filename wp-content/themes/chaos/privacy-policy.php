<?php
/**
 * Template Name: Privacy Policy
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */
get_header() ?>

    <body>
        <section class="" style="background:#000;">
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
                        .privacy-policy {
                            color:#fff;
                        }
                        .privacy-policy p {
                            font-size: 16px;
                        }

                        .home-login-button a {
                                color: #fff !important;
                                text-decoration: none;
                            }

                            .home-login-button a:hover {
                                color: #ffb514 !important;
                            }

                        @media  screen and (max-width: 991px)  {
                            .home-login-button {
                                margin: 22px 60px;
                            }

                        }
                    </style>
                    <div class="col-lg-6 col-md-6"> 
                        <div class="home-login-button" >
                            <a href="<?php echo site_url(); ?>/login">Log In</a>
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


            <section>
                <section class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 privacy-policy">
<h1>Privacy Policy for Chaos Entertainment</h1>

<p>At Chaos Entertainment, accessible from http://www.chaosentertainment.in/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Chaos Entertainment and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at piqued.digital@gmail.com</p>

<h2>Log Files</h2>

<p>Chaos Entertainment follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>




<h2>Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of Chaos Entertainment.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Chaos Entertainment, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that Chaos Entertainment has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Pary Privacy Policies</h2>

<p>Chaos Entertainment's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>Chaos Entertainment does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

<h2>Online Privacy Policy Only</h2>

<p><a href="https://gdprprivacynotice.com">This privacy policy (created with the GDPR Generator)</a> applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Chaos Entertainment. This policy is not applicable to any information collected offline or via channels other than this website.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
                            <hr class="visible-lg visible-md">
                        </div>
                    </div>
                </section>
            </section>
        </section>
        <?php get_footer() ?>