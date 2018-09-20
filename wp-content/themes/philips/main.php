<?php
/*
Template Name: Главная страница

Переработка шаблона произведена командой Web Style Production 24 (https://wsp24.ru/)
*/

get_header('main');

?>

<body <?php body_class(); ?>><div id="wptime-plugin-preloader"></div>
<div style="display:none" class="fancybox-hidden">
<div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
</div>

	
	
	<div class="col-md-10">
		
        <!-- main navigation -->

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<div class="panel">
<a class="handle" href="#">Смотреть</a>
<h3><span > Заглавие </span></h3><br>
<span>Текст или скрипт сюда</span>
</div>  
  
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header col-md-6 main"><img class="fgf" src="/wp-content/uploads/2016/12/krisha.png"/>
	<h1 class="entry-title">Подбор участков и
строительство домов под ключ</h1><h3 class="w19">Закажите дом вашей мечты</h3>
	</header><!-- .entry-header -->
<div class="entry-content"><?php the_content(); ?>
  
  
  
  
<div class="owl-carousel owl-theme" id="owl-carousel">
                <div class="item"><img src="/wp-content/uploads/2016/12/i1.png" alt="Owl Image"></div>
                <div class="item"><img src="/wp-content/uploads/2016/12/i2.png" alt="Owl Image"></div>
                <div class="item"><img src="/wp-content/uploads/2016/12/i3.png" alt="Owl Image"></div>
               
</div>
<div class="owl-carousel owl-theme" id="owl-carousel1">
                <div class="item"><img src="/wp-content/uploads/2016/12/i4.png" alt="Owl Image"></div>
                <div class="item"><img src="/wp-content/uploads/2016/12/i3.png" alt="Owl Image"></div>
                <div class="item"><img src="/wp-content/uploads/2016/12/i2.png" alt="Owl Image"></div>
               
</div>
              
      <script>
var owl = $('#owl-carousel');
owl.owlCarousel({
    items:2,
        transitionStyle: true,
	slideSpeed: 3000,
   loop:true,
    autoplay:true,
    autoplayTimeout:2500,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2]  
}); 
    </script>     

<script>
var owl = $('#owl-carousel1');
owl.owlCarousel({
    items:2,
  slideSpeed: 3000,
  transitionStyle: true,
	rtl: true,
    loop:true,
    autoplay:true,
    autoplayTimeout:2500,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2]
});
</script>
   
  
 
  </div>
</article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->	
    
    
    
    
    
    
    
    
	<div class="mainmenu">
		
			
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php echo __('Toggle navigation', 'philips');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>	

					<?php
						wp_nav_menu( array(
							'menu'              => 'Menu1',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'philips_custom_navwalker::fallback',
							)
						);
					?>			
			</div>    
    
    
    
    
    
    
    
			</div>
			
		</div>	
	</div>	









<div class="header-area col-md-2">
		



<?php 
    $bloginfo = '<div class="col-md-12"><a href="/" class="home">';
    $bloginfo .= '<h1 class="site-title">' . get_bloginfo( 'name' ) . '</h1>';
    $bloginfo .= '<h4 class="site-description">' . get_bloginfo( 'description' ) . '</h4>';
    $bloginfo .= '</a></div>';

    $html = has_custom_logo()  ? get_custom_logo() : $bloginfo;
    echo $html;
?>


<div class="contact"><p class="zzz">Контактная информация</p><p><span>Адрес:</span> г. Сочи, Навагинская., д. 9, оф. 26</p><p><span>Тел:</span> +7 (862) 123 - 45 - 67</p><p><span>Почта:</span> BUILDING@ВАШДОМЕН.ru</p></div><a class="fancybox zvo" href="#contact_form_pop">Заказать звонок</a><div class="foot"><div class="soc"><a target="_blank" href="/"><i class="fa fa-vk" aria-hidden="true"></i></a><a target="_blank" href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a><a target="_blank" href="/"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a><a target="_blank" href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a></div><p>COPYRIGHT © 2017 АГЕНТСТВО НЕДВИЖИМОСТИ
ЕВРО ДОМ - ПРОДАЖА УЧАСТКОВ, РЕМОНТ И СТРОИТЕЛЬСТВО ДОМОВ</p><p>ВСЕ ПРАВА ЗАЩИЩЕНЫ <a href="/">Евро Дом ™</a></p>
			</div>
	</div><!-- End header-area -->




 
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41759689 = new Ya.Metrika({
                    id:41759689,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>

