<?php
/**
 * Модальные окна форм
 *
 * @package MSK+
 */

if( is_page(18) ){ ?>

	<div style="display:none" class="fancybox-hidden">
		<div id="contact_form_pop">
			<?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?>
		</div>
	</div>

<?php } elseif (is_page(20)) { ?>

	<div style="display:none" class="fancybox-hidden">
		<div id="act">
			<?php echo do_shortcode('[contact-form-7 id="271" title="Акция отделка"]'); ?>
		</div>
	</div>

	<div style="display:none" class="fancybox-hidden">
		<div id="contact_form_pop">
			<?php echo do_shortcode('[contact-form-7 id="47" title="Заказать звонок"]'); ?>
		</div>
	</div>

<?php } ?>