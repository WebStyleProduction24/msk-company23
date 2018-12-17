<?php /*Блок главной страницы - Проекты.*/?>

<?php
/**
 * Блок главной страницы - Сервисы
 *
 * @package MSK+
 */
?>

<section id="projects" data-type="background" data-speed="10">
  <div class="container">
    <h4 class="fgfgf">Наши проекты</h4>
    <div class="owl-carousel owl-theme">
      <?php $house = new WP_Query( array( 'post_type' =>'house', 'posts_per_page' =>24 ) ); ?>
      <?php while ( $house->have_posts() ) : $house->the_post(); ?>
        <div class="item">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="col-md-12">
              <div class="col-md-5">
                <?php
                if (get_post_meta($post->ID, 'gallery', true)) {
                  $shortcode = get_post_meta($post->ID, 'gallery', true); echo do_shortcode("$shortcode");
                } else {
                  echo '';
                }
                ?>
              </div>
              <div class="col-md-7">
                <h2 class="titl"><?php the_title(); ?></h2>
                <h3 class="podz"><?php echo (get_post_meta($post->ID, 'подзаголовок', true)); ?></h3>
                <div class="border-content">
                  <p class="opis">Описание:</p>
                  <div class="cont"><?php the_content();?></div>
                </div>

                <div class="kno">
                  <a href="#contact_form_pop" class="fancybox zvo brown">Оставить заявку</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <style>
    .owl-stage-outer {
      width: 100%;
    }
    .owl-stage:before {
      display:none
    }
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
            nav: true
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

</div>
</section>