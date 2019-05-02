<?
$image = get_sub_field('background_image');
if ( get_sub_field('layout') == "image_right_content_left" ) :

    $class = "content-first";

endif;
?>

<div class="row <?= $class; ?>">


    <div class="columns small-12 medium-6 image" style="background-image:url('<?= $image['sizes']['split-section']; ?>">

    </div>
    <div class="columns small-12 medium-6 content">
        <div class="hold-me">
            <? if ( get_sub_field('title') ) : ?>
                <h4><? the_sub_field('title'); ?></h4>
            <? endif; ?>
            <? the_sub_field('content'); ?>
            <?php if (get_sub_field('buttons')): ?> 
            
            	<?php while(has_sub_field('buttons')): ?>
            
                    <? aor_button(); ?>
            
            	<?php endwhile; ?>
            
            <?php endif; ?>
        </div>
    </div>
</div>
