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

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main.css">

	<?php if( is_page(20) ) { ?>
		<script src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>		
		<script src="<?php echo get_template_directory_uri(); ?>/jquery.twentytwenty.js"></script>
		<script src="http://shansu.ru/wp-content/themes/llorix-one-lite/wow.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/jquery.event.move.js"></script>   
	<?php } else { ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<?php } ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl.carousel.js"></script>
	
	<?php if ( is_front_page() ) { ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/animation-panel.js"></script> 
	<?php } ?>

	<?php wp_head(); ?>
