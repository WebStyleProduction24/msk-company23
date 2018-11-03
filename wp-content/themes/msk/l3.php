<?php
/*
Template Name: Продажа
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> <link rel="icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?159",t.onload=function(){VK.Retargeting.Init("VK-RTRG-291063-8ASDh"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-291063-8ASDh" style="position:fixed; left:-999px;" alt=""/></noscript>
<link rel="shortcut icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<?php wp_head(); ?> </head>

<body <?php body_class(); ?>><div id="wptime-plugin-preloader"></div>
<div style="display:none" class="fancybox-hidden">
<div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
</div>
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
</div>
<div class="phone col-md-3"><p><a href="tel:+78621234567">+7 (862) 123-45-67</a></p></div>        
<div class="call col-md-1"><a href="#contact_form_pop" class="fancybox"><img src="/wp-content/uploads/2016/12/zzzv.png"/></a></div>          
		
		</div>
	</div><!-- End header-area -->




<section id="first">
	<header class="entry-header col-md-6 main"><img class="fgf" src="/wp-content/uploads/2016/12/krisha.png"/>
	<h1 class="entry-title">ПРОДАЖА НЕДВИЖИМОСТИ<br>И УЧАСТКОВ В СОЧИ</h1><h3 class="w19">Ваше жилье - наша забота!</h3><div class="posab"><a href="#contact_form_pop" class="fancybox">• ПОЛУЧИТЕ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ •</a></div>
	</header><!-- .entry-header -->

</section>	
<section id="primeri">
<div class="container">
<h3 class="l2-zag">НЕДВИЖИМОСТЬ В СОЧИ</h3>  
<p>Наша компания предлагает недорого купить недвижимость в Сочи. В продаже имеются самые разнообразные варианты - от эконом-класса до элитного жилья. ... Предложения от Партнёров компании.</p>


 <div class="filtr"> 
<a href="#" class="zz1 active">Все районы</a>
<a href="#" class="zz2">Центральный район</a>
<a href="#" class="zz3">Адлерский район</a>
<a href="#" class="zz4">Хотинский район</a>
</div> 
<?php echo do_shortcode('[ajax_load_more container_type="ul" post_type="house_pro" posts_per_page="6" scroll="false" button_label="Показать еще" button_loading_label="Подождите..."]'); ?>
</div></section>
<section id="preimush">
<div class="container">
<h4 class="fgfgf">ПРЕИМУЩЕСТВА ПОКУПКИ У НАС</h4>  
<div class="col-md-12">
<div class="col-md-4">
<div class="image one"></div><div class="pervoe">3 года заботы<br>о наших клиентах</div><div class="vtoroe">Наши сотрудники работают более 3-х лет в продажах недвижимости. Наша команда состоит из менеджеров , работающие в отделе продаж, а так же из риелторов - специалисты в своем деле.</div></div>
<div class="col-md-4">
<div class="image two"></div><div class="pervoe">Персональный подход<br>к каждому клиенту</div><div class="vtoroe">Встретим в аэропорту и проведем обзорные экскурсии с показом участков и недвижимости, 
не зависимо от вашего бюджета и цены желаемой недвижимости.</div></div>  
<div class="col-md-4">
<div class="image tre"></div><div class="pervoe">НАШ ОФИС ГОТОВ ПРИНЯТЬ<br>ВАС 6 ДНЕЙ В НЕДЕЛЮ</div><div class="vtoroe">Мы открыты для наших клиентов, офис на ул. Навагинская д. 9 работает 6 дней в неделю и вы лично можете получить информацию о комплексе актуальных предложений. </div></div>  
  
  
</div>  
</div></section>  
<section id="primeri-uch">
<div class="container">
<h3 class="l2-zag">ЗЕМЕЛЬНЫЕ УЧАСТКИ В СОЧИ</h3>  
<p>Наша компания предлагает недорого купить недвижимость в Сочи. В продаже имеются самые разнообразные варианты - от эконом-класса до элитного жилья. ... Предложения от Партнёров компании.</p>
<div class="filtr"> 
<a href="#" class="vce3 active">Все районы</a>
<a href="#" class="tsentralnyj-rajon3">Центральный район</a>
<a href="#" class="adlerskij-rajon3">Адлерский район</a>
<a href="#" class="hotinskij-rajon3">Хотинский район</a>
</div> 
<?php echo do_shortcode('[ajax_load_more container_type="ul" post_type="uchastok_pro" posts_per_page="6" scroll="false" button_label="Показать еще" button_loading_label="Подождите..."]'); ?>
</div></section>
<section id="zhem">
<div class="container">
<h3 class="l2-zag">ЖЕМЧУЖИНА ЭТОЙ НЕДЕЛИ</h3>  
<div class="col-md-12">
  <div class="col-md-6">

  
 <?php
$args=array(
'post_type' => 'house_pro',
'showposts'=>1,
'tax_query' => array(array('taxonomy' => 'houses_pro','field'    => 'slug','terms'    => 'zhem',),),);
$house_pro = get_posts($args);
foreach ($house_pro as $post) :
setup_postdata($post);?>
<div style="padding: 0;">
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>  
<a href="#a<?php the_id(); ?>" class="ghg">
<div class="alm-gallery-img-wrap " style="background:url(<?php echo $image_url[0]; ?>)"><img src="<?php echo $image_url[0]; ?>"></div><div class="plus">+</div><div class="op"><div class="le"><h2 class="ttttit"><?php the_title();?></h2><div class="col-md-12"><?php the_content();?>
</div></div>
</a>
<a name="name"></a>
<a href="#name" id="a<?php the_id(); ?>" class="pressbox"><img src="<?php echo $image_url[0]; ?>"></a>
<div class="over"></div>
</div>
    
    
<?php endforeach; ?> 
  
  
  </div></div>
  
 <div class="col-md-6">
<?php
$args=array(
'post_type' => 'uchastok_pro',
'showposts'=>1,
'tax_query' => array(array('taxonomy' => 'uchastki_pro','field'    => 'slug','terms'    => 'zhem',),),);
$uchastok_pro = get_posts($args);
foreach ($uchastok_pro as $post) :
setup_postdata($post);?>
<div style="padding: 0;">
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>  
<a href="#a<?php the_id(); ?>" class="ghg">
<div class="alm-gallery-img-wrap " style="background:url(<?php echo $image_url[0]; ?>)"><img src="<?php echo $image_url[0]; ?>"></div><div class="plus">+</div><div class="op"><div class="le"><h2 class="ttttit"><?php the_title();?></h2><div class="col-md-12"><?php the_content();?>
</div></div>
</a>
<a name="name"></a>
<a href="#name" id="a<?php the_id(); ?>" class="pressbox"><img src="<?php echo $image_url[0]; ?>"></a>
<div class="over"></div>
</div>
<?php endforeach; ?>
</div>  
</div></section> 
<section id="poluchit"><div class="container">
<h3 class="l2-zag">ПОЛУЧИТЕ ИНДИВИДУАЛЬНЫЙ ПОДБОР<br>НЕДВИЖИМОСТИ И УЧАСТКОВ</h3>
  <div class="form-pro col-md-10">
<?php echo do_shortcode('[contact-form-7 id="244" title="Форма продажа"]'); ?>
  </div>
  
</div></section> 

  
  
  
  
  
  
  
  
  
  
  
  
  
<section id="services1"><div class="container">
<h4 class="fgfgf"><span>5 Причин</span>ПОЧЕМУ С НАМИ ВЫГОДНО РАБОТАТЬ</h4>  
<div class="col-md-12">
<div class="col-md-7 right">
<div class="col-md-12"><div class="col-md-2"><span><img src="/wp-content/uploads/2016/12/nnn.png"/></span>1</div><div class="col-md-10"><p>У нас представлены только актуальные объекты с реальными ценами от собственников, без завышения и лишних "приукрашиваний"</p></div></div>
  <div class="col-md-12"><div class="col-md-2"><span><img src="/wp-content/uploads/2016/12/nnn.png"/></span>2</div><div class="col-md-10"><p>Мы работаем на прямую с собственниками недвижимости и земельных участков, покупателю не нужно платить нам комиссию.</p></div></div>
  <div class="col-md-12"><div class="col-md-2"><span><img src="/wp-content/uploads/2016/12/nnn.png"/></span>3</div><div class="col-md-10"><p>Мы работаем только с проверенными объектами, предоставляем полное юридическое и техническое сопровождение сделок, обеспечивая максимальный коифорт, безопасность и конфиденциальность клиентам.</p></div></div>
  <div class="col-md-12"><div class="col-md-2"><span><img src="/wp-content/uploads/2016/12/nnn.png"/></span>4</div><div class="col-md-10"><p>Мы знаем все особенности и нюансы, как недвижимости, так и земельных участков, благодаря чему, у покупателя не возникнет в будущем "неприятных неожиданностей".</p></div></div>
  <div class="col-md-12"><div class="col-md-2"><span><img src="/wp-content/uploads/2016/12/nnn.png"/></span>5</div><div class="col-md-10"><p>Мы готовы предоставить комплексное обслуживание нашим клиентам: подбор желаемой квартиры или участка, согласование условий и сопровождение сделки, а так же заключение договоров с коммунальными службами, разработки дизайн-проекта, узаконивание перепланировки, выполнение всех видов ремонтно-строительных работ.</p></div></div>
  </div> 
</div>
<div class="ostavit col-md-8"><div class="inner-za"><?php echo do_shortcode('[contact-form-7 id="115" title="Вопросы менеджеру"]'); ?></div>  
</div></section>  
<section id="contacts"><div class="container">  <div class="karta"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=kgYQkrVKh7kRp4VjaVYNY2altO4Zpw0G&amp;width=100%&amp;height=530&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script></div>
<div class="col-md-12"><div class="col-md-4 contact"><div class="co-inner"><div class="co-in">
<p class="brown">г. Сочи. Ул. Навагинская д 9</p>  
<p class="lkl">ТЕЛ: +7 (862) 123-45-67</p>
<p class="lkl">EMAIL: mail@evantika.ru</p><a href="#contact_form_pop" class="fancybox brown two">Оставить заявку</a></div></div></div></div></div></section>   

  
<script>
$(document).ready(function(){
$(".zz2").click(function(){
$(".z2").removeClass("opa");
$(".zz2").toggleClass("active");  
$(".zz3,.zz4,.zz1").removeClass("active");  
$(".z3,.z4").toggleClass("opa"); return false; }); 
$(".zz3").click(function(){
$(".z3").removeClass("opa");
$(".zz3").toggleClass("active");  
$(".zz2,.zz4,.zz1").removeClass("active");  
$(".z4,.z2").toggleClass("opa"); return false; });   
$(".zz4").click(function(){
$(".z4").removeClass("opa");
$(".zz4").toggleClass("active");  
$(".zz2,.zz3,.zz1").removeClass("active");  
$(".z3,.z2").toggleClass("opa"); return false; });    
$(".zz1").click(function(){

$(".z3,.z4,.z2").removeClass("opa"); return false; });    
});</script> 
  <script>
$(document).ready(function(){
$(".tsentralnyj-rajon3").click(function(){
$(".tsentralnyj-rajon3").toggleClass("active");
$(".tsentralnyj-rajon2").removeClass("opa"); 
$(".adlerskij-rajon3,.hotinskij-rajon3,.vce3").removeClass("active");  
$(".adlerskij-rajon2,.hotinskij-rajon2").toggleClass("opa"); return false; }); 
$(".adlerskij-rajon3").click(function(){
$(".adlerskij-rajon3").toggleClass("active");
$(".adlerskij-rajon2").removeClass("opa");    
$(".tsentralnyj-rajon3,.hotinskij-rajon3,.vce3").removeClass("active");  
$(".tsentralnyj-rajon2,.hotinskij-rajon2").toggleClass("opa"); return false; }); 
$(".hotinskij-rajon3").click(function(){
$(".hotinskij-rajon3").toggleClass("active");
$(".hotinskij-rajon2").removeClass("opa");     
$(".adlerskij-rajon3,.tsentralnyj-rajon3,.vce3").removeClass("active");  
$(".adlerskij-rajon2,.tsentralnyj-rajon2").toggleClass("opa"); return false; }); 
$(".vce3").click(function(){
$(".vce3").toggleClass("active");
$(".adlerskij-rajon3,.tsentralnyj-rajon13,.hotinskij-rajon3").removeClass("active");     
$(".adlerskij-rajon2,.tsentralnyj-rajon2,.hotinskij-rajon2").removeClass("opa"); return false; });    
});</script> 
<?php get_footer(); ?>
