<?php
/**
 * Блок страницы отделка под ключ - Контакты
 *
 * @package MSK+
 */
?>


<section id="contacts">
	<div class="container">
		<?php get_template_part('map'); ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo_2.png"/>
		<h3 class="l2-zag white">НАМИ РЕАЛИЗОВАНО БОЛЕЕ 100 ПРОЕКТОВ</h3>
		<div class="fo-co"><?php echo do_shortcode('[contact-form-7 id="195" title="Форма отделка"]'); ?></div>
	</div>
</section>