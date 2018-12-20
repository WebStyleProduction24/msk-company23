<?php
/**
 * header для темы MSK+
 *
 * Показан вся <head> секция и вся верхушка <div id="content">
 *
 * @package msk+
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ga.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/target-ga.js"></script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/animation-panel.js"></script> 
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/picsel.js"></script>
	<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-291063-8ASDh" style="position:fixed; left:-999px;" alt=""/></noscript>

	<?php wp_head(); ?>
