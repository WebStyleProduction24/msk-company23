<?php
/**
 * Блок главной страницы - Контакты
 *
 * @package MSK+
 */
?>

<section id="contacts">
	<div class="container">
    <?php get_template_part('map'); ?>
		<div class="col-md-5 contact">
			<div class="co-inner inner-za">
				<div class="co-in">
					<p class="brown"><?php wsp24_adress(); ?></p>
					<p class="lkl">ТЕЛ: <?php wsp24_phone_1(); ?></p>
					<p class="lkl">ТЕЛ: <?php wsp24_phone_2(); ?></p>
					<p class="lkl">EMAIL: <?php wsp24_email(); ?></p>
					<a href="#contact_form_pop" class="fancybox brown two">Оставить заявку</a>
				</div>
			</div>
		</div>
	</div>
</section>