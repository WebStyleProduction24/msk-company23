<?php
/**
 * шапка без <header> для страницы "Строительство под ключ"
 *
 * @package msk+
 *
**/
?>

<?php if( is_page( '20' ) ){ $menu = 'l2'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/wp-content/themes/msk/owl.carousel.js"></script>
<?php } elseif( is_page( '18' ) ) {
	$menu = 'l1'; ?>
	<script src="/wp-content/themes/msk/jquery.min.js"></script>
	<script src="/wp-content/themes/msk/owl.carousel.js"></script>
<?php } elseif( is_page( '22' ) ){
	$menu = 'l3'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<?php } else {		
	$menu = 'primary'; 
}?>

</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>
	<div style="display:none" class="fancybox-hidden">
		<div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
	</div>
	<!-- header-area -->
	<div class="mainmenu visible-xs">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?php echo __('Меню', 'philips');?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>	

		<?php
				wp_nav_menu( array(
					'menu'              => $menu,
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


	</div>
	<div class="header-area page">
		<div class="container">
			
			<?php wsp24_logo(); ?>
			<div class="mainmenu col-md-7 col-sm-7 hidden-xs">
				
				<?php
				wp_nav_menu( array(
					'menu'              => $menu,
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
		<div class="icon-bullhorn col-xs-1"></div>      

	</div>
</div>

<!-- End header-area -->

<script type="text/javascript" src="js/scroll.js"></script>
