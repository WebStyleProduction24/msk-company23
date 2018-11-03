<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package philips
 *
 *Переработка шаблона произведена командой Web Style Production 24 (https://wsp24.ru/)
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128591847-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128591847-1');
</script>
<script>document.addEventListener( 'wpcf7mailsent', function( event ) {
	if ( '271' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 271', 'submit');
	}
	if ( '115' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 115', 'submit');
	}
	if ( '47' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 47', 'submit');
	}
	if ( '158' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 158', 'submit');
	}
	if ( '103' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 103', 'submit');
	}
	if ( '108' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 108', 'submit');
	}
	if ( '195' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 195', 'submit');
	}
	if ( '244' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 244', 'submit');
	}
}, false );
</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if( is_page( '20' ) ){ ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script><script src="/wp-content/themes/msk/owl.carousel.js"></script>
	<?php } elseif( is_page( '18' ) ) {?>
		<script src="/wp-content/themes/msk/jquery.min.js"></script><script src="/wp-content/themes/msk/owl.carousel.js"></script>
	<?php } elseif( is_page( '22' ) ){ ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php } ?>

	<?php wp_head(); ?>
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?159",t.onload=function(){VK.Retargeting.Init("VK-RTRG-291063-8ASDh"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-291063-8ASDh" style="position:fixed; left:-999px;" alt=""/></noscript>
</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>
	<div style="display:none" class="fancybox-hidden">
		<div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
	</div>
	<!-- header-area -->
	<div class="header-area page">
		<div class="container">
			
			<?php wsp24_logo(); ?>
			<div class="mainmenu col-md-7 col-sm-7">
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
<div class="phone col-md-3 col-sm-3">
	<p><?php wsp24_phone_1(); ?></p>
	<p><?php wsp24_phone_2(); ?></p>
</div>        
<div class="call col-md-1 col-sm-1">
	<a href="#contact_form_pop" class="fancybox">
		<img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/callback.png"/>
	</a>
</div>          

</div>
</div><!-- End header-area -->
