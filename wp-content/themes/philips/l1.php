<?php
/*
Template Name: Строительство под ключ

Переработка шаблона произведена командой Web Style Production 24 (https://wsp24.ru/)
*/

get_header(); ?>

<section id="first">

	<header class="entry-header col-md-6 main"><img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/msk.png"/>
   <h1 class="entry-title">Строительство домов под ключ</h1><h3 class="w19">Разработка и строительство индивидуальных проектов</h3>
 </header>

 <div class="ostavit col-md-8"><div class="inner-za"><?php echo do_shortcode('[contact-form-7 id="103" title="Проект бесплатно"]'); ?></div> </div>
</section>	

<section id="projects"><div class="container">










  <div class="owl-carousel owl-theme">
    <?php $house = new WP_Query( array( 'post_type' => 'house', 'posts_per_page' => 24 ) ); ?>
    <?php while ( $house->have_posts() ) : $house->the_post(); ?>
      <div class="item"><div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="col-md-12">  <div class="col-md-5">  
          <?php if (get_post_meta($post->ID, 'gallery', true)) { $shortcode = get_post_meta($post->ID, 'gallery', true); echo do_shortcode("$shortcode"); } else { echo ''; } ?>
        </div>  
        <div class="col-md-7">
          <h2 class="titl"><?php the_title(); ?></h2>
          <h3 class="podz"><?php echo (get_post_meta($post->ID, 'подзаголовок', true)); ?></h3>  
          <p class="opis">Подробное описание:</p>  
          <div class="cont"><?php the_content();?></div>  
          <table class="haract"><tbody>
            <tr><td>Площадь</td><td><?php echo (get_post_meta($post->ID, 'площадь', true)); ?></td></tr>
            <tr><td>Этажность</td><td><?php echo (get_post_meta($post->ID, 'этажность', true)); ?></td></tr>
            <tr><td>Фундамент</td><td><?php echo (get_post_meta($post->ID, 'фундамент', true)); ?></td></tr>
            <tr><td>Наружние стены</td><td><?php echo (get_post_meta($post->ID, 'стены', true)); ?></td></tr>
            <tr><td>Перекрытия</td><td><?php echo (get_post_meta($post->ID, 'перекрытия', true)); ?></td></tr>
            <tr><td>Кровля</td><td><?php echo (get_post_meta($post->ID, 'кровля', true)); ?></td></tr>
            <tr><td>Покрытие кровли</td><td><?php echo (get_post_meta($post->ID, 'покрытие', true)); ?></td></tr>
            <tr><td>Наружняя отделка</td><td><?php echo (get_post_meta($post->ID, 'наружняя-отделка', true)); ?></td></tr>
            <tr><td>Цоколь</td><td><?php echo (get_post_meta($post->ID, 'цоколь', true)); ?></td></tr>
          </tbody></table></div></div></div></div><?php endwhile; ?><?php wp_reset_postdata(); ?></div>
          <style>
          .owl-stage-outer {
            width: 100%;
            }.owl-stage:before {display:none}

          </style>
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                nav:	true,
                navText:	["<",">"],
                margin: 0,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: false
                  },
                  1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
          <div class="kno"><a href="#contact_form_pop" class="fancybox brown">Оставить заявку</a><a href="#" class="e222">Скачать описание в pdf</a></div>
        </div></section>
        <section id="types">  
          <div class="container"><h4 class="fgfgf">КАКИЕ ДОМА МЫ СТРОИМ</h4><div class="col-md-12"><div class="col-md-4"><img src="/wp-content/uploads/2016/12/d1.png"/><p class="blue">Каркасные дома</p></div><div class="col-md-4"><img src="/wp-content/uploads/2016/12/d2.png"/><p class="blue">Дома из блоков</p></div><div class="col-md-4"><img src="/wp-content/uploads/2016/12/d3.png"/><p class="blue">Кирпичные дома</p></div></div></div>  
        </section>
        <section id="form">
          <div class="container">
            <div class="col-md-11"><div class="in"><div class="in-v"> 
              <?php echo do_shortcode('[contact-form-7 id="108" title="Форма (строительство)"]');?>
            </div></div></div></div></section>
            <section id="etapi"><div class="container">  <h4 class="fgfgf">Этапы выполнения работ</h4>
              <div class="col-md-12">
                <div class="one-5"><img src="/wp-content/uploads/2016/12/str.png" class="c1"/><img src="/wp-content/uploads/2016/12/v1.png"/><div class="cont1">ВЫ ОСТАВЛЯЕТЕ<br>ЗАЯВКУ</div><div class="cont2">Не следует, однако забывать,<br>что постоянный количественный<br>рост  нашей активности  позволяет<br>выполнять важные задания </div></div> 
                <div class="one-5"><img src="/wp-content/uploads/2016/12/str.png" class="c2"/><img src="/wp-content/uploads/2016/12/v2.png"/><div class="cont1">Встреча и<br>обсуждение деталей</div><div class="cont2">Не следует, однако забывать,<br>что постоянный количественный<br>рост  нашей активности  позволяет<br>выполнять важные задания </div></div> 
                <div class="one-5"><img src="/wp-content/uploads/2016/12/str.png" class="c3"/><img src="/wp-content/uploads/2016/12/v3.png"/><div class="cont1">Создание проекта и<br>составление сметы</div><div class="cont2">Не следует, однако забывать,<br>что постоянный количественный<br>рост  нашей активности  позволяет<br>выполнять важные задания </div></div> 
                <div class="one-5"><img src="/wp-content/uploads/2016/12/str.png" class="c4"/><img src="/wp-content/uploads/2016/12/v4.png"/><div class="cont1">МЫ НАЧИНАЕМ<br>СТРОИТЕЛЬСТВО ДОМА</div><div class="cont2">Не следует, однако забывать,<br>что постоянный количественный<br>рост  нашей активности  позволяет<br>выполнять важные задания </div></div> 
                <div class="one-5"><img src="/wp-content/uploads/2016/12/v5.png"/><div class="cont1">ВРУЧАЕМ ВАМ КЛЮЧИ<br>ОТ ДОМА МЕЧТЫ</div><div class="cont2">Не следует, однако забывать,<br>что постоянный количественный<br>рост  нашей активности  позволяет<br>выполнять важные задания </div></div> 
              </div>  
            </div></section>  
            <section id="garanties">  
              <div class="container">  
                <h4 class="gr">Наши гарантии</h4>  
                <div class="col-md-12">
                  <div class="col-md-3"><img src="/wp-content/uploads/2016/12/c1.png"/><h4 class="fgff">МЫ ЧЕТКО СОБЛЮДАЕМ<br>УСТАНОВЛЕННЫЕ СРОКИ</h4></div>   
                  <div class="col-md-3"><img src="/wp-content/uploads/2016/12/c2.png"/><h4 class="fgff">ВСЕ РАБОТЫ<br>СООТВЕТСВУЮТ СМЕТЕ</h4></div> 
                  <div class="col-md-3"><img src="/wp-content/uploads/2016/12/c3.png"/><h4 class="fgff">ГАРАНТИРУЕМ КАЧЕСТВО<br>РАБОТ И МАТЕРИАЛОВ</h4></div> 
                  <div class="col-md-3"><img src="/wp-content/uploads/2016/12/c4.png"/><h4 class="fgff">КАЖДЫЙ ПРОЕКТ УНИКАЛЕН<br>И СОЗДАН ИМЕННО ДЛЯ ВАС</h4></div>   
                </div> 
              </div>  
            </section>  
            <section id="services"><div class="container">
              <h4 class="fgfgf">СТРОИТЕЛЬСТВО ПОД КЛЮЧ</h4>  
              <div class="col-md-12">
                <div class="col-md-4"><img src="/wp-content/uploads/2016/12/x1.png"/><p class="servic">3D МОДЕЛИРОВАНИЕ</p></div>  
                <div class="col-md-4"><img src="/wp-content/uploads/2016/12/x2.png"/><p class="servic">Дизайн экстерьера и интерьера</p></div>    
                <div class="col-md-4"><img src="/wp-content/uploads/2016/12/x3.png"/><p class="servic">Ландшафтный диайн</p></div>    
                <div class="col-md-4"><img src="/wp-content/uploads/2016/12/x4.png"/><p class="servic">ВЫБОР И СОГЛАСОВАНИЕ МАТЕРИАЛОВ</p></div>
                <div class="col-md-4"><img src="/wp-content/uploads/2016/12/x5.png"/><p class="servic">ВНЕШНЯЯ / внутреняя ОТДЕЛКА</p></div> 
              </div>
              <div class="ostavit col-md-8"><div class="inner-za"><?php echo do_shortcode('[contact-form-7 id="115" title="Вопросы менеджеру"]'); ?></div>  
            </div></section>  
            <section id="contacts"><div class="container">  <div class="karta"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=kgYQkrVKh7kRp4VjaVYNY2altO4Zpw0G&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script></div>
              <div class="col-md-12"><div class="col-md-4 contact"><div class="co-inner"><div class="co-in">
                <p class="brown"><?php wsp24_adress(); ?></p>  
                <p class="lkl">ТЕЛ: <?php wsp24_phone_1(); ?></p>
                <p class="lkl">ТЕЛ: <?php wsp24_phone_2(); ?></p>
                <p class="lkl">EMAIL: <?php wsp24_email(); ?></p><a href="#contact_form_pop" class="fancybox brown two">Оставить заявку</a></div></div></div></div></div></section>   
                <?php get_footer(); ?>
