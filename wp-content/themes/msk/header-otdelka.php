 
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="/wp-content/themes/msk/jquery.min.js"></script>
<link rel="icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<link rel="shortcut icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<script src="/wp-content/themes/msk/owl.carousel.js"></script><script src="/wp-content/themes/msk/jquery.twentytwenty.js"></script>
<script src="http://shansu.ru/wp-content/themes/llorix-one-lite/wow.js"></script>
<script src="/wp-content/themes/msk/jquery.event.move.js"></script>   
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?159",t.onload=function(){VK.Retargeting.Init("VK-RTRG-291063-8ASDh"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-291063-8ASDh" style="position:fixed; left:-999px;" alt=""/></noscript>
  
 <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>><div id="wptime-plugin-preloader"></div>
<div style="display:none" class="fancybox-hidden">
<div id="act"><?php echo do_shortcode('[contact-form-7 id="271" title="Акция отделка"]'); ?></div>
</div><div style="display:none" class="fancybox-hidden">
<div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
</div>
<div style="display:none" class="fancybox-hidden"><div id="text1">text</div></div>
<div style="display:none" class="fancybox-hidden"><div id="text2">text</div></div>
<div style="display:none" class="fancybox-hidden"><div id="text3">text</div></div>  
 <div style="display:none" class="fancybox-hidden"><div id="h1">text</div></div>
<div style="display:none" class="fancybox-hidden"><div id="h2">text</div></div>
<div style="display:none" class="fancybox-hidden"><div id="h3">text</div></div>  
	<!-- header-area -->
	<div class="header-area page">
		<div class="container">
			
				<?php wsp24_logo(); ?>
        <div class="mainmenu col-md-7">
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
       
</div>
<div class="phone col-md-3"><p><a href="tel:+78621234567">+7 (862) 123-45-67</a></p></div>        
<div class="call col-md-1"><a href="#contact_form_pop" class="fancybox"><img src="/wp-content/uploads/2016/12/lil.png"/></a></div>          
		
		</div>
	</div><!-- End header-area -->


<script type="text/javascript" src="js/scroll.js"></script>