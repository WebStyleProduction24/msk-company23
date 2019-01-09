<?php
/**
 * Блок страницы отделка под ключ - Примеры работ
 *
 * @package MSK+
 */
?>

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
