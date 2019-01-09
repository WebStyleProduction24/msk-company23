<?php
/**
 * Footer bloks
 *
 * @package MSK+
 */
?>

<?php if ( is_front_page() ) {} else { ?>    

	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php get_template_part('copyright'); ?>
				</div>
			</div>
		</div>
	</div>

<?php } get_template_part('analytics'); ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ga.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/target-ga.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/picsel.js"></script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-291063-8ASDh" style="position:fixed; left:-999px;" alt=""/></noscript>

