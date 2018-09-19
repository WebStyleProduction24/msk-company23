<?php
/*
Template Name: Отделка
*/?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="/wp-content/themes/philips/jquery.min.js"></script>
<link rel="icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<link rel="shortcut icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<script src="/wp-content/themes/philips/owl.carousel.js"></script><script src="/wp-content/themes/philips/jquery.twentytwenty.js"></script>
<script src="http://shansu.ru/wp-content/themes/llorix-one-lite/wow.js"></script>
<script src="/wp-content/themes/philips/jquery.event.move.js"></script>   
  
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
			
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="logo col-md-1">
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					</div></a>
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
<section id="first" style="background: none;padding-top: 0px;BOTTOM: 0;margin-top: 0;">
<div class="row" style="margin-top: 0em;">
<div class="large-12 columns">
        <div class="twentytwenty-container"><img src="/wp-content/themes/philips/1_2.jpg" />
          <img src="/wp-content/themes/philips/1_1.jpg" />
          
        </div>
      </div>
    </div>
  <header class="entry-header col-md-6 main l2"><img class="fgf" src="/wp-content/uploads/2016/12/krisha.png"/>
	<h1 class="entry-title">РЕМОНТ И ОТДЕЛКА <br>КОТТЕДЖЕЙ В СОЧИ <br>ПОД КЛЮЧ</h1><h3 class="w19">КАЧЕСТВО, СОБЛЮДЕНИЕ СРОКОВ, ЛЮБАЯ СЛОЖНОСТЬ</h3><div class="posab"><a href="#contact_form_pop" class="fancybox">• ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ •</a></div>
	</header>
</section>	
<section id="vidi"><div class="container">
<h3 class="l2-zag">• ВИДЫ РЕМОНТА •</h3>  
<div class="col-md-12">
<div class="col-md-4"><img src="/wp-content/uploads/2016/12/y1-e1482770348751.png"/><h3 class="l2-zag1">• КОМФОРТ •</h3><a href="#h1" class="fancybox pod">Подробности</a></div>
<div class="col-md-4"><img src="/wp-content/uploads/2016/12/y2.png"/><h3 class="l2-zag1">• ПРЕСТИЖ •</h3><a href="#h2" class="fancybox pod">Подробности</a></div><div class="col-md-4"><img src="/wp-content/uploads/2016/12/y3.png"/><h3 class="l2-zag1">• ЭЛИТНЫЙ •</h3><a href="#h3" class="fancybox pod">Подробности</a></div>
</div></div></section>
<script>$(window).load(function(){ $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.3});$(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});});</script>
<section id="calc">
<div class="container">
<div class="col-md-12"><div class="col-md-8"><?php echo do_shortcode('[contact-form-7 id="158" title="Калькулятор"]'); ?></div></div>
</div></section>
<section id="primeri">
<div class="container">
<h3 class="l2-zag">ПРИМЕРЫ НАШИХ РАБОТ</h3>  
<p>Дизайн интерьера и экстерьера дома обычно дополняют друг друга, поддерживая единую идею автора. Наша компания создает - художественное убранство внутренних помещений и все наружные работы, от отделки до ланшафтного дизайна, под ключ. </p>
</div>

 <div class="filtr"> 
<a href="#" class="vce active">Все работы</a>
<a href="#" class="interery1">Интерьеры</a>
<a href="#" class="eksterery1">Экстерьеры</a>
<a href="#" class="dizajn-landshafta1">Дизайн ландшафта</a>
<a href="#" class="3d-vizualizatsiya1">3D визуализация</a>
</div> 
<?php echo do_shortcode('[ajax_load_more container_type="ul" post_type="item" posts_per_page="8" scroll="false" button_label="Показать еще" button_loading_label="Подождите..."]'); ?>
</section>

<section id="principles"><div class="container">
<div class="col-md-12"><div class="col-md-4 right">
<h3 class="gold">ПРИНЦИПЫ нашей РАБОТЫ</h3><p>Обратившись к нам, Вы можете быть уверенными в удачном завершении проекта. Мы проведем отделочные работы качественно и в срок, поможем с подбором и покупкой света, сантехники, мебели и отделочных материалов по ценам, ниже сочинских магазинов! </p>  
</div></div>
<div class="col-md-12"><div class="col-md-4 right">
<h3 class="gold1"><span>80%</span> наших клиентов приходят<br>по рекомендации друзей и близких</h3>
</div></div>  

<div class="col-md-12 per"><div class="col-md-4 f1"><h4 class="gold2">КАЧЕСТВО РАБОТЫ</h4><p>Выбираем мастеров с золотыми руками, обеспечиваем их стабильным, высоким окладом и постоянным потоком заказов.</p></div><div class="col-md-4 f2"><h4 class="gold2">ОПТИМИЗАЦИЯ ПРОЦЕССОВ</h4><p>Выполняем все ремонтные работы, закупаем и доставляем материалы, вывозим мусор.</p></div><div class="col-md-4 f3"><h4 class="gold2">ГАРАНТИЯ НА РАБОТУ</h4><p>Гарантия <span>3</span> года прописана в договоре всегда, все работы отдельно указываются в смете.</p></div></div>
</div></section>
<section id="action"><div class="container">
<h3 class="l2-zag">ВНИМАНИЕ АКЦИЯ!</h3>
<div class="col-md-12">  
<div class="col-md-6"><IMG SRC="/wp-content/uploads/2016/12/kartinka.png"/></div>   
<div class="col-md-6">
<h3 CLASS="ac1">ДИЗАЙН ПРОЕКТ В ПОДАРОК ДО 30 ЯНВАРЯ</h3>  <h3 CLASS="ac2">До конца акции осталось:</h3> 
<script src="http://megatimer.ru/s/98a6ea6a305711cb5b8320fba33e532d.js"></script>  
<a href="#act" class="fancybox"><img src="/wp-content/uploads/2016/12/knopka1.png"></a></div>     
</div></div></section>


<!--<section id="testimonials"><div class="container">
<h3 class="l2-zag">ОТЗЫВЫ КЛИЕНТОВ</h3>


  
  
  
  
  
  
  
  
  
  
  
  
  
<div class="owl-carousel owl-theme" id="owl-1">
 <?php $testi = new WP_Query( array( 'post_type' => 'testi', 'posts_per_page' => 10 ) ); ?>
 <?php while ( $testi->have_posts() ) : $testi->the_post(); ?>
<div class="item kru">

<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
<div class="image"><?php the_post_thumbnail(array( 130,130)); ?></div>
<?php endif; ?>
<div class="conten"><h4 class="jkj"><?php the_title(); ?></h4><?php the_content(); ?></div>
</div><?php endwhile; ?><?php wp_reset_postdata(); ?></div>
<style>.owl-carousel.owl-drag .owl-item {
    
  
}  .owl-item.active:nth-child(1) {
    margin-left: -50px !important;
}
  .owl-stage-outer {
    width: 100%;
}.owl-stage:before {display:none}
  </style>

  <script> var owl = $('.owl-carousel'); 
  owl.owlCarousel({ items:5, center:true, navigation:true, navigationText:	["prev","next"], 
  loop:true, autoplayTimeout:2500, 
    responsive:{
0:{
items:1,
},
520:{
items:1,
},
560:{
items:1,
},
768:{
items:2,
},
992:{
items:3,
},
1200:{
items:5,
}}});
    
    
    
          </script>
  
  
  
  
  
  
</div></section>-->
<section id="contacts"><div class="container"><div class="karta"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=kgYQkrVKh7kRp4VjaVYNY2altO4Zpw0G&amp;width=100%&amp;height=600&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script></div><img src="/wp-content/uploads/2016/12/logo-1-2-e1482983292956.png"/>
<h3 class="l2-zag white">НАМИ РЕАЛИЗОВАНО БОЛЕЕ 100 ПРОЕКТОВ</h3>
<div class="fo-co"><?php echo do_shortcode('[contact-form-7 id="195" title="Форма отделка"]'); ?></div>

</div></section>
<?php get_footer(); ?>
