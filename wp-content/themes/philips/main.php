<?php
/*
Template Name: Главная страница
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<link rel="shortcut icon" href="/wp-content/uploads/2017/01/logo-1-2-e1484215432492.png" type="image/x-icon" />
<script src="/wp-content/themes/philips/jquery.min.js"></script>
<script src="/wp-content/themes/philips/owl.carousel.js"></script>
<style>
.content-area article {
    position: fixed;
    width: 83%;
    top: 0;
    height: 100%;
}  
  
  div#owl-carousel1 {
    position: fixed;
    height: 50%;
    top: 50%;    width: calc(83.33333333% - 50px);
}div#owl-carousel {
    position: fixed;
    height: 50%;    width: calc(83.33333333% - 50px);
   
}</style> 

 <script type="text/javascript">
$(function(){
    $('.panel').tabSlideOut({                       //Класс панели
        tabHandle: '.handle',                       //Класс кнопки
        pathToTabImage: '/wp-content/uploads/2016/12/ug.png',            //Путь к изображению кнопки
        imageHeight: '171px',                       //Высота кнопки
        imageWidth: '291px',                         //Ширина кнопки
        tabLocation: 'right',                       //Расположение панели top - выдвигается сверху, right - выдвигается справа, bottom - выдвигается снизу, left - выдвигается слева
        speed: 300,                                 //Скорость анимации
        action: 'click',                            //Метод показа click - выдвигается по клику на кнопку, hover - выдвигается при наведении курсора
        topPos: '0px',                            //Отступ сверху
        fixedPosition: false                        //Позиционирование блока false - position: absolute, true - position: fixed
    });
});
(function($){
    $.fn.tabSlideOut = function(callerSettings) {
        var settings = $.extend({
                    
        }, callerSettings||{});
 
        settings.tabHandle = $(settings.tabHandle);
        var obj = this;
        if (settings.fixedPosition === true) {
            settings.positioning = 'fixed';
        } else {
            settings.positioning = 'absolute';
        }
         
        //ie6 doesn't do well with the fixed option
        if (document.all && !window.opera && !window.XMLHttpRequest) {
            settings.positioning = 'absolute';
        }
         
        //set initial tabHandle css
        settings.tabHandle.css({ 
            'display': 'block',
            'width' : settings.imageWidth,
            'height': settings.imageHeight,
            'textIndent' : '-99999px',
            'background' : 'url('+settings.pathToTabImage+') no-repeat',
            'outline' : 'none',
            'position' : 'absolute'
        });
         
        obj.css({
            'line-height' : '1',
            'position' : settings.positioning
        });
 
         
        var properties = {
                    containerWidth: parseInt(obj.outerWidth(), 10) + 'px',
                    containerHeight: parseInt(obj.outerHeight(), 10) + 'px',
                    tabWidth: parseInt(settings.tabHandle.outerWidth(), 10) + 'px',
                    tabHeight: parseInt(settings.tabHandle.outerHeight(), 10) + 'px'
                };
 
        //set calculated css
        if(settings.tabLocation === 'top' || settings.tabLocation === 'bottom') {
            obj.css({'left' : settings.leftPos});
            settings.tabHandle.css({'right' : 0});
        }
         
        if(settings.tabLocation === 'top') {
            obj.css({'top' : '-' + properties.containerHeight});
            settings.tabHandle.css({'bottom' : '-' + properties.tabHeight});
        }
 
        if(settings.tabLocation === 'bottom') {
            obj.css({'bottom' : '-' + properties.containerHeight, 'position' : 'fixed'});
            settings.tabHandle.css({'top' : '-' + properties.tabHeight});
             
        }
         
        if(settings.tabLocation === 'left' || settings.tabLocation === 'right') {
            obj.css({
                'height' : properties.containerHeight,
                'top' : settings.topPos
            });
             
            settings.tabHandle.css({'top' : 0});
        }
         
        if(settings.tabLocation === 'left') {
            obj.css({ 'left': '-' + properties.containerWidth});
            settings.tabHandle.css({'right' : '-' + properties.tabWidth});
        }
 
        if(settings.tabLocation === 'right') {
            obj.css({ 'right': '-' + properties.containerWidth});
            settings.tabHandle.css({'left' : '-' + properties.tabWidth});
             
            $('html').css('overflow-x', 'hidden');
        }
 
        //functions for animation events
         
        settings.tabHandle.click(function(event){
            event.preventDefault();
        });
         
        var slideIn = function() {
             
            if (settings.tabLocation === 'top') {
                obj.animate({top:'-' + properties.containerHeight}, settings.speed).removeClass('open');
            } else if (settings.tabLocation === 'left') {
                obj.animate({left: '-' + properties.containerWidth}, settings.speed).removeClass('open');
            } else if (settings.tabLocation === 'right') {
                obj.animate({right: '-' + properties.containerWidth}, settings.speed).removeClass('open');
            } else if (settings.tabLocation === 'bottom') {
                obj.animate({bottom: '-' + properties.containerHeight}, settings.speed).removeClass('open');
            }    
             
        };
         
        var slideOut = function() {
             
            if (settings.tabLocation == 'top') {
                obj.animate({top:'-3px'},  settings.speed).addClass('open');
            } else if (settings.tabLocation == 'left') {
                obj.animate({left:'-3px'},  settings.speed).addClass('open');
            } else if (settings.tabLocation == 'right') {
                obj.animate({right:'-3px'},  settings.speed).addClass('open');
            } else if (settings.tabLocation == 'bottom') {
                obj.animate({bottom:'-3px'},  settings.speed).addClass('open');
            }
        };
 
        var clickScreenToClose = function() {
            obj.click(function(event){
                event.stopPropagation();
            });
             
            $(document).click(function(){
                slideIn();
            });
        };
         
        var clickAction = function(){
            settings.tabHandle.click(function(event){
                if (obj.hasClass('open')) {
                    slideIn();
                } else {
                    slideOut();
                }
            });
             
            clickScreenToClose();
        };
         
        var hoverAction = function(){
            obj.hover(
                function(){
                    slideOut();
                },
                 
                function(){
                    slideIn();
                });
                 
                settings.tabHandle.click(function(event){
                    if (obj.hasClass('open')) {
                        slideIn();
                    }
                });
                clickScreenToClose();
                 
        };
         
        //choose which type of action to bind
        if (settings.action === 'click') {
            clickAction();
        }
         
        if (settings.action === 'hover') {
            hoverAction();
        }
    };
})(jQuery);  
</script> 
<?php wp_head(); ?>
</head>

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
		
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="logo">
					<div class="col-md-12">
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
					</div>
				</div></a><div class="contact"><p class="zzz">Контактная информация</p><p><span>Адрес:</span> г. Сочи, Навагинская., д. 9, оф. 26</p><p><span>Тел:</span> +7 (862) 123 - 45 - 67</p><p><span>Почта:</span> BUILDING@ВАШДОМЕН.ru</p></div><a class="fancybox zvo" href="#contact_form_pop">Заказать звонок</a><div class="foot"><div class="soc"><a target="_blank" href="/"><i class="fa fa-vk" aria-hidden="true"></i></a><a target="_blank" href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a><a target="_blank" href="/"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a><a target="_blank" href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a></div><p>COPYRIGHT © 2017 АГЕНТСТВО НЕДВИЖИМОСТИ
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

