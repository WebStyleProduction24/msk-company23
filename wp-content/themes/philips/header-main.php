<!DOCTYPE html>

<!--Переработка шаблона произведена командой Web Style Production 24 (https://wsp24.ru/) -->

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