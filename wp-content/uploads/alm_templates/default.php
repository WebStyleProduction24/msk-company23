<?php $post_type = get_post_type( $post_id ) ?> 
 <? if ($post_type == 'item') { ?>
<li class="alm-layout alm-2-col alm-gallery brick <?php if( has_term( 'eksterery', 'gallery' ) ) { ?>eksterery<?php } elseif( has_term( 'interery', 'gallery' ) ) { ?>interery<?php } elseif( has_term( 'dizajn-landshafta', 'gallery' ) ) { ?>dizajn-landshafta<?php } elseif( has_term( '3d-vizualizatsiya', 'gallery' ) ) { ?>3d-vizualizatsiya<?php } ?>" data-target="toggle" data-id="<?php if( has_term( 'eksterery', 'gallery' ) ) { ?>eksterery<?php } elseif( has_term( 'interery', 'gallery' ) ) { ?>interery<?php } elseif( has_term( 'dizajn-landshafta', 'gallery' ) ) { ?>dizajn-landshafta<?php } elseif( has_term( '3d-vizualizatsiya', 'gallery' ) ) { ?>3d-vizualizatsiya<?php } ?>" >
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
<a href="#a<?php the_id(); ?>" class="ghg">
<div class="alm-gallery-img-wrap " style="background:url(<?php echo $image_url[0]; ?>)"></div><div class="plus">+</div>
<div class="overlay-details"><div class="vertical-align"><h2 class="ttttit"><?php the_title(); ?></h2>  
<p><?php the_meta( $post->ID, 'стоимость' );?></p><?php the_excerpt(); ?></div></div>
</a>
<a name="name"></a>
<a href="#name" id="a<?php the_id(); ?>" class="pressbox"><img src="<?php echo $image_url[0]; ?>"></a>
<div class="over"></div>
</li><?php wp_reset_postdata();?>

<?php } else { ?> 
<li style="padding: 0;" class="<?php if( has_term( 'adlerskij-rajon2', 'uchastki_pro' ) ) { ?>adlerskij-rajon2<?php } elseif( has_term( 'hotinskij-rajon2', 'uchastki_pro' ) ) { ?>hotinskij-rajon2<?php } elseif( has_term( 'tsentralnyj-rajon2', 'uchastki_pro' ) ) { ?>tsentralnyj-rajon2<?php } ?><?php if( has_term( 'adlerskij-rajon', 'houses_pro' ) ) { ?>z3<?php } elseif( has_term( 'hotinskij-rajon', 'houses_pro' ) ) { ?>z4<?php } elseif( has_term( 'tsentralnyj-rajon', 'houses_pro' ) ) { ?>z2<?php } ?>" >
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
<a href="#a<?php the_id(); ?>" class="ghg">
<div class="alm-gallery-img-wrap " style="background:url()"><img src="<?php echo $image_url[0]; ?>"/></div><div class="plus">+</div><div class="op"><div class="le"><h2 class="ttttit"><?php the_title(); ?></h2><?php the_CONTENT(); ?></div></div>
</a>
<a name="name"></a>
<a href="#name" id="a<?php the_id(); ?>" class="pressbox"><img src="<?php echo $image_url[0]; ?>"></a>
<div class="over"></div>
</li>
<?php wp_reset_postdata();?>     
<?php } ?>