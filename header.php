<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/others.css" />


<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 991px)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/desktop-media.css"/>
<link rel="stylesheet" media="screen and (min-width: 576px) and (max-width: 767px)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/desktop-small-media.css"/>
<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1024px) and (-webkit-min-device-pixel-ratio: 2)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ipad.css"/>
<link rel="stylesheet" media="screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (-webkit-min-device-pixel-ratio: 2)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ipad-pro.css" />
<link rel="stylesheet" media="screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation:landscape)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ipad-landscape.css"/>
<link rel="stylesheet" media="screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/iphone-x.css"/>
<link rel="stylesheet" media="screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/iphone-6-7-8-plus.css" />
<link rel="stylesheet" media="screen and (min-device-width: 360px) and (max-device-width: 640px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/galaxy_landscape.css" />
<link rel="stylesheet" media="screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css" />



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 

do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php //do_action( 'storefront_before_header' ); ?>

	
<header class="erp_header">
	<div class="container">
    	<div class="row">
        	<div class="col-6 col-sm-6 col-lg-4 col-xl-4">
                <div class="row">
                    <!--<div class="col row">
                        <select name="sel_language" id="sel_language">
                            <option value="english">English</option>
                            <option value="german">German</option>
                        </select>
                    </div>-->
                    <div class="col row">
                        
						
						 <form action="<?php echo home_url();?>" role="search" method="get" id="search_box">
                                                <input type="search" class="input_search searchbar" id="erp_search" placeholder="Search" value="" name="s" title="Search for:">
                                                <button class="erp_search_btn btn"> <i class="fa fa-search"></i> </button>
                                            </form>
                                            
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-8 col-xl-8">
            	<div class="row">
                    <ul>
                        <li class="erp_hdr_link">
								<!--<a href="#">Log In</a>-->
								<!--<a href="<?php //echo esc_url( wp_login_url( home_url() ) ); ?>" alt="<?php //esc_attr_e( 'Login', 'erpcars' ); ?>">
    										<?php //_e( 'Log In', 'erpcars' ); ?>
								</a>-->
								<a href="https://www.henwoodtrans.com/log-in/" alt="<?php esc_attr_e( 'Login', 'erpcars' ); ?>">
    										<?php _e( 'Log In', 'erpcars' ); ?>
								</a>
								
						</li>
                        <li><a href="http://www.henwoodtrans.com/register/">Create Account</a></li>
                    </ul>
                </div>	
            </div>
        </div>
    </div>
</header>



<section class="erp_nav_sec">
	<div class="container">
    	<div class="row">
            <div class="col-7 col-sm-7 col-md-4 col-lg-4 col-xl-4">
                <div class="row">
						<?php if(get_field('site_logo')!=''){ ?>
						
						<a href="<?php echo home_url();?>">
							<img src="<?php the_field('site_logo')?>" alt="" />
						</a>	
						<?php } else {?>
						<a href="<?php echo home_url();?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo.png" alt="logo, site logo" />
						</a>
						<?php }?>
				
                	
                </div>
            </div>
            <div class="col-5 col-sm-5 col-md-8 col-lg-8 col-xl-8">
            	<div class="row erp_nav_menu">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                  <!--      <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">about us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">how it works</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                          </li>
                        </ul>-->
						
						<?php
							$primarymenu = array(
								'theme_location'  => 'primary',   // theme_location name from nav menu offunction.php file
								'menu'            => 'main_menu',
								'container'       => ' ',
								'container_class' => ' ',
								'container_id'    => ' ',
								'menu_class'      => ' ',
								'menu_id'         => 'main-menu',         //menu_name is menu id.
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => ' ',
								'after'           => ' ',
								'link_before'     => ' ',
								'link_after'      => ' ',
								'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav main-nav firstul">%3$s</ul>',
								'depth'           => 0,
							);
							wp_nav_menu( $primarymenu );	
						?>

                      </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

