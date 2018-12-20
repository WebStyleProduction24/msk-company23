<?php
/**
 * Блок страницы отделка под ключ - Первый экран
 *
 * @package MSK+
 */
?>


<script>
  $(window).load(
    function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.3});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    }
  );
</script>


<section id="first"  data-type="background" data-speed="10" style="background: none;padding-top: 0px;BOTTOM: 0;margin-top: 0;">
	<div class="row" style="margin-top: 0em;">
		<div class="large-12 columns">
			<div class="twentytwenty-container">
				<img src="<?php echo get_template_directory_uri(); ?>/1_2.jpg" />
				<img src="<?php echo get_template_directory_uri(); ?>/1_1.jpg" />				
			</div>
		</div>
	</div>
	<header class="entry-header col-md-6 main l2"><img class="fgf" src="<?php echo get_template_directory_uri(); ?>/images/msk.png"/>
		<h1 class="entry-title">РЕМОНТ И ОТДЕЛКА <br>КОТТЕДЖЕЙ В СОЧИ <br>ПОД КЛЮЧ</h1><h3 class="w19">КАЧЕСТВО, СОБЛЮДЕНИЕ СРОКОВ, ЛЮБАЯ СЛОЖНОСТЬ</h3><div class="posab"><a href="#contact_form_pop" class="fancybox">• ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ •</a></div>
	</header>
</section>	