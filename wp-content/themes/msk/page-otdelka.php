<?php
/*

Template Name: Отделка под ключ

*/
?>


<script src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/jquery.twentytwenty.js"></script>
<script src="http://shansu.ru/wp-content/themes/llorix-one-lite/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/jquery.event.move.js"></script>   




<?php
get_header();
get_header('page');

get_template_part('page-parts/otdelka', 'first');
get_template_part('page-parts/otdelka', 'vidi');
?>


<?php

get_template_part('page-parts/otdelka', 'calc');
get_template_part('page-parts/otdelka', 'primeri');
get_template_part('page-parts/otdelka', 'principles');
get_template_part('page-parts/otdelka', 'action');
get_template_part('page-parts/otdelka', 'contacts');

get_footer();

?>
