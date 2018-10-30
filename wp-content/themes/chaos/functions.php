<?php
require get_template_directory() . '/inc/classes/navwalker.php';
require get_template_directory() . '/inc/admin/functions.php';



function custom_login_logo() {
  echo '<style type="text/css">
  h1 a { background-image: url('.get_bloginfo('template_directory').'/inc/img/chaos-logo.png) !important; background-size: 130px !important; height: 110px !important; width: 160px !important;}
  </style>';
}

add_action('login_head', 'custom_login_logo');

function chaos_adding_scripts() {
	wp_enqueue_style('chaos_bootstrap_css', get_template_directory_uri().'/inc/css/bootstrap.min.css');	
	wp_enqueue_style('chaos_awesome_css', get_template_directory_uri().'/inc/css/font-awesome.min.css');
	wp_enqueue_style('chaos_style_css', get_template_directory_uri().'/inc/css/style.css');
	wp_enqueue_style('chaos_bxslider_css', get_template_directory_uri().'/inc/css/jquery.bxslider.css');
	wp_enqueue_style('chaos_animchaos', get_template_directory_uri().'/inc/css/animate.css');	

	wp_enqueue_script('chaos_jquery_min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array('jquery'),false, false);
	
     

   
	wp_enqueue_script('chaos_bootstrap', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery'),false, false);
wp_enqueue_script('chaos_arrow27' , 'http://arrow.scrolltotop.com/arrow27.js', array('jquery'),false, false);	
    	wp_enqueue_script('chaos_scroll', get_template_directory_uri().'/inc/js/scroll.js', array('jquery'),false, false);
	wp_enqueue_script('chaos_bxslider', get_template_directory_uri().'/inc/js/jquery.bxslider.js', array('jquery'),false, false);
	wp_enqueue_script('easing', get_template_directory_uri().'/inc/js/jquery.easing.min.js', array('jquery'),false, false);	
	wp_enqueue_script('chaos_viewportchecker', get_template_directory_uri().'/inc/js/viewportchecker.js', array('jquery'),false, false);		
	wp_enqueue_script('chaos_script', get_template_directory_uri().'/inc/js/script.js', array('jquery'),false, false);
}

add_action( 'wp_enqueue_scripts', 'chaos_adding_scripts' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

register_nav_menus( array(
 'primary' => __( 'Primary Navigation', 'choas_menu' ),
 'newmenu' => __( 'New Navigation', 'choas_new_menu' ),
 ) );

if ( ! function_exists( 'chaos_header_menu' ) ) {

	function chaos_header_menu() {
		  // display the WordPress Custom Menu if available
		  wp_nav_menu(array(
		    'menu'              => 'primary',
		    'menu_id'           => 'main-menu',
		    'theme_location'    => 'primary',
		    'depth'             => 3,
		    'container'         => 'nav',
		    'container_id'		=> 'bs-example-navbar-collapse-1',
		    'container_class'   => 'collapse navbar-collapse page-scroll clearfix ',
		    'menu_class'        => 'nav navbar-nav navbar-right',
		    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		    'walker'            => new wp_bootstrap_navwalker()
		  ));
	} /* end header menu */
}

if ( ! function_exists( 'chaos_header_new_menu' ) ) {
	function chaos_header_new_menu() {
		  // display the WordPress Custom Menu if available
		  wp_nav_menu(array(
		    'menu'              => 'newmenu',
		    'menu_id'           => 'main-menu',
		    'theme_location'    => 'newmenu',
		    'depth'             => 3,
		    'container'         => 'nav',
		    'container_id'		=> 'bs-example-navbar-collapse-1',
		    'container_class'   => '',
		    'menu_class'        => 'nav navbar-nav',
		    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		    'walker'            => new wp_bootstrap_navwalker()
		  ));
	} /* end header menu */
}


function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


add_filter('show_admin_bar', '__return_false');

// Redirect login url
function chaos_login_redirect ($redirect_to, $url, $user) {
    if ( !isset($user->errors) ) {
    	if( is_array( $user->roles ) ) {
			if( in_array( 'member', $user->roles ) ) {
				$redirect_to = site_url('/membership-account/');
				
			} else {
				$redirect_to = admin_url();
			}
		}
        return $redirect_to;
    }
    wp_redirect( home_url('/login/') . '?action=login&failed=1');    
    exit;
}
add_filter('login_redirect', 'chaos_login_redirect', 10, 3);
// Redirect login url END

add_action( 'authenticate', 'check_username_password', 1, 3);
function check_username_password( $login, $username, $password ) {
$referrer = $_SERVER['HTTP_REFERER'];
$user = $username->ID;
$status = get_user_meta($user, 'ja_disable_user', true);

if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) { 
if( $username == "" || $password == "" ){
        if ( !strstr($referrer, '?login=empty' )) {
            wp_redirect( home_url('/login/?login=empty') );
            }
            else {
                wp_redirect( $referrer );
            }
    exit;
    }
if($status == 2){ //when meta value is 2 user account is pending
if ( !strstr($referrer, '?login=not_activated' )) {
            //wp_redirect( $referrer . '?login=empty');
            wp_redirect( home_url('/login/?login=not_activated') );
            }
            else {
                wp_redirect( $referrer );
            }
    exit;
    }   
  }
 }

if (! function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null) {
        $array = array();
        foreach ($input as $value) {
            if ( !array_key_exists($columnKey, $value)) {
                trigger_error("Key \"$columnKey\" does not exist in array");
                return false;
            }
            if (is_null($indexKey)) {
                $array[] = $value[$columnKey];
            }
            else {
                if ( !array_key_exists($indexKey, $value)) {
                    trigger_error("Key \"$indexKey\" does not exist in array");
                    return false;
                }
                if ( ! is_scalar($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not contain scalar value");
                    return false;
                }
                $array[$value[$indexKey]] = $value[$columnKey];
            }
        }
        return $array;
    }
}

?>