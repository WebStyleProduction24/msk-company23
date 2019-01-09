<?php
/**
 * Блок страницы отделка под ключ - Первый экран
 *
 * @package MSK+
 */
?>

<section id="first" style="background: none;padding-top: 0px;BOTTOM: 0;margin-top: 0;">
	<div class="row" style="margin-top: 0em;">
		<div class="large-12 columns">
			<div class="twentytwenty-container"><img src="<?php echo get_template_directory_uri(); ?>/1_2.jpg" />
				<img src="<?php echo get_template_directory_uri(); ?>/1_1.jpg" />

			</div>
		</div>
	</div>
	



	<header class="entry-header col-md-4 main">
		<img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/msk.png"/>
		<h1 class="entry-title">Ремонт и отделка коттеджей в&nbsp;Сочи под&nbsp;ключ</h1>
		<h3 class="w19">Качество, соблюдение сроков, любая сложность</h3>		

		<div class="posab"><a href="#contact_form_pop" class="fancybox brown two wpcf7-form-control wpcf7-submit">• ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ •</a></div>
	</header>

</section>

<script>
	$(window).load(function(){
		$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.3});
		$(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
	});
</script>

