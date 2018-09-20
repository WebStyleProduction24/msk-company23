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
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="panel">
                        <a class="handle" href="#">Смотреть</a>
                        <h3><span >О компании</span></h3><br>
                        <?php the_content(); ?>
                    </div>  

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="mask"></div>
                        <header class="entry-header col-md-6 main"><img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/msk.png"/>
                         <h1 class="entry-title">Многофункциональная строительная компания</h1>
                         <h3 class="w19">Реализовывайте свои мечты с нами</h3>
                     </header><!-- .entry-header -->
                     <div class="entry-content">




                         <div class="owl-carousel owl-theme" id="owl-carousel">
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/karkas_1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/karkas_2.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/karkas_3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/karkas_4.jpg" alt="Owl Image"></div>

                        </div>
                        <div class="owl-carousel owl-theme" id="owl-carousel1">
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/blago_4.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/blago_3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/blago_2.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/blago_1.jpg" alt="Owl Image"></div>

                        </div>
                        <script src="<?php echo get_template_directory_uri(); ?>/js/carousel.js"></script>



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


    <div class="contact">
        <p><span>Адрес: </span><?php wsp24_adress(); ?></p>
        <p><span>Тел: </span><?php wsp24_phone_1(); ?><br><span></span><?php wsp24_phone_2(); ?></p>
        <p><span>Почта: </span><?php wsp24_email(); ?></p></div>
        <a class="fancybox zvo" href="#contact_form_pop">Заказать звонок</a>
        <div class="foot">
            <div class="soc">
                <a target="_blank" href="https://vk.com/"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a target="_blank" href="https://facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a target="_blank" href="https://ok.ru/"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                <a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="copyright">
                <p>COPYRIGHT © <?php echo date("Y"); ?> <?php bloginfo('name'); ?><br><?php bloginfo('description'); ?><br>ВСЕ ПРАВА ЗАЩИЩЕНЫ <a href="/"><?php bloginfo('name'); ?> ™</a></p>
            </div>
        </div>
    </div>

    <!-- End header-area -->





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

