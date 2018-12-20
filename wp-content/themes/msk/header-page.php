<?php
/**
 * шапка без <header> для страницы "Строительство под ключ"
 *
 * @package msk+
 *
**/
?>


</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>
	<?php get_template_part('page-parts/callback'); ?>

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

		<?php wp_nav_menu_custom()?>


	</div>
	<div class="header-area page">
		<div class="container">
			
			<?php wsp24_logo(); ?>
			<div class="mainmenu col-md-7 col-sm-7 hidden-xs">
				
				<?php wp_nav_menu_custom()?>	

			</div>
			<div class="phone col-md-3 col-sm-3">
				<p><?php wsp24_phone_1(); ?></p>
				<p><?php wsp24_phone_2(); ?></p>
			</div>        
			<div class="call col-md-1 col-sm-1 hidden-xs">
				<a href="#contact_form_pop" class="fancybox">
					<img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/callback.png"/>
				</a>
			</div>
			<div class="col-xs-1 visible-xs">
				<a href="#contact_form_pop" class="fancybox icon-bullhorn"></a>
			</div>      

		</div>
	</div>

	<!-- End header-area -->

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
