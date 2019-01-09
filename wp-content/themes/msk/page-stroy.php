<?php
/*

Template Name: Строительство под ключ

*/

get_header();
get_header('page'); 

get_template_part('page-parts/stroy', 'first');
get_template_part('page-parts/stroy', 'projects');
get_template_part('page-parts/stroy', 'types');
get_template_part('page-parts/stroy', 'form');
get_template_part('page-parts/stroy', 'etapi');
get_template_part('page-parts/stroy', 'garanties');
get_template_part('page-parts/stroy', 'services');
get_template_part('page-parts/stroy', 'contacts');

get_footer();
?>
