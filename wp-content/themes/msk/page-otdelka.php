<?php
/*

Template Name: Отделка под ключ

*/

get_header();
get_header('page');

get_template_part('page-parts/otdelka', 'first');
get_template_part('page-parts/otdelka', 'vidi');
get_template_part('page-parts/otdelka', 'calc');
//get_template_part('page-parts/otdelka', 'primeri'); Временно отключаем блок "Примеры наших работ"
get_template_part('page-parts/otdelka', 'principles');
get_template_part('page-parts/otdelka', 'action');
get_template_part('page-parts/otdelka', 'contacts');

get_footer();

get_template_part('page-parts/otdelka', 'fancybox');

?>
