<?php
/**
 * Footer bloks
 *
 * @package MSK+
 */
?>

<?php if ( is_home() ) {} else { ?>    

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