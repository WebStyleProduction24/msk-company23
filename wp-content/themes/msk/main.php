<?php
/*
Template Name: Главная страница
*/

global $social;

get_header();
?>

</head>

<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>
    <div style="display:none" class="fancybox-hidden">
        <div id="contact_form_pop"><?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?></div>
    </div>
    <div class="col-md-10">
        <!-- main navigation -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="panel">
                        <a class="handle" href="#"></a>
                        <div class="content">
                            <h3 id="close">О компании</h3>
                            <?php the_content(); ?>
                        </div>
                    </div>  
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="mask"></div>
                        <header class="entry-header col-md-6 main"><img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/msk.png"/>
                           <h1 class="entry-title">Многофункциональная строительная компания</h1>
                           <h3 class="w19">Реализовывайте свои мечты с нами</h3>
                       </header><!-- .entry-header -->
                       <div class="entry-content">
                        <div class="owl-carousel owl-theme" id="owl-carousel">
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-1.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-2.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-3.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-4.png" alt="MSK+"></div>
                        </div>
                        <div class="owl-carousel owl-theme" id="owl-carousel1">
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-5.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-6.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-7.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-8.png" alt="MSK+"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/home/home-image-9.png" alt="MSK+"></div>
                        </div>
                        <script src="<?php echo get_template_directory_uri(); ?>/js/carousel.js"></script>
                    </div>
                </article><!-- #post-## -->
            <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->	
    <div class="mainmenu">
       <div class="navbar-header visible-xs">
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
        <p><span>Почта: </span><?php wsp24_email(); ?></p>
        <a class="fancybox zvo tablet" href="#contact_form_pop">Заказать звонок</a>
    </div>

    <?php get_template_part('map'); ?>

    <div style="clear:both"></div>

    <a class="fancybox zvo desktop" href="#contact_form_pop">Заказать звонок</a>
    <div class="foot">
        <div class="soc">
            <a target="_blank" href="https://vk.com/<?php echo $social['vk'];?>"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a target="_blank" href="https://facebook.com/<?php echo $social['facebook'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a target="_blank" href="https://ok.ru/group/<?php echo $social['ok'];?>"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
        </div>

        <?php get_template_part('copyright'); ?>

    </div>
</div>

<!-- End header-area -->
<?php wp_footer(); ?>

</body>
</html>

