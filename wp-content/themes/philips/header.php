<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package philips
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<link rel="shortcut icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />




<?php if( is_page( '20' ) ){ ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script><script src="/wp-content/themes/philips/owl.carousel.js"></script>
<?php } elseif( is_page( '18' ) ) {?>
<script src="/wp-content/themes/philips/jquery.min.js"></script><script src="/wp-content/themes/philips/owl.carousel.js"></script>
<?php } elseif( is_page( '22' ) ){ ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
 
<?php } ?>
  


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><div id="wptime-plugin-preloader"></div>
<div style="display:none" class="fancybox-hidden">
<div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
</div>
	<!-- header-area -->
	<div class="header-area page">
		<div class="container">
			
				<?php custom_logo(); ?>
        <div class="mainmenu col-md-7">
		<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php echo __('Меню', 'philips');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>	
<?php if( is_page( '18' ) ){ ?>
<?php
						wp_nav_menu( array(
							'menu'              => 'l1',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'philips_custom_navwalker::fallback',
							'walker'            => new philips_custom_navwalker())
						);
					?>			
          <?php } elseif( is_page( '20' ) ){ ?>
          <?php
						wp_nav_menu( array(
							'menu'              => 'l2',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'philips_custom_navwalker::fallback',
							'walker'            => new philips_custom_navwalker())
						);
					?>			
          <?php } elseif( is_page( '22' ) ){ ?>
          <?php
						wp_nav_menu( array(
							'menu'              => 'l3',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'philips_custom_navwalker::fallback',
							'walker'            => new philips_custom_navwalker())
						);
					?>			
<?php } else { ?>
<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'philips_custom_navwalker::fallback',
							'walker'            => new philips_custom_navwalker())
						);
					?>			          
<?php } ?>          
</div>
<div class="phone col-md-3"><p><a href="tel:+78621234567">+7 (862) 123-45-67</a></p></div>        
<div class="call col-md-1"><a href="#contact_form_pop" class="fancybox"><img src="/wp-content/uploads/2016/12/callback.png"/></a></div>          
		
		</div>
	</div><!-- End header-area -->

