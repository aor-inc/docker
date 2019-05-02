<? if ( get_sub_field('title') ) : ?>
    <div class="row title">
        <div class="column">
            <? if ( get_sub_field('title') ) : ?>
                <h1>
                    <? the_sub_field('title'); ?>
                </h1>
            <? endif; ?>
            <? if ( get_sub_field('description') ) : ?>
            <p><? thw_sub_field('description'); ?></p>
            <? endif; ?>
        </div>
    </div>
<? endif; ?>

<?php if (get_sub_field('icons')): ?>
    <div class="row counterBar">
        <?php while(has_sub_field('icons')): ?>
            <div class="column countBox">
                <img src="<?= get_sub_field('image')['sizes']['gallery-thumbnail']; ?>">
                
                <? if ( get_sub_field('data') ) : ?>
                    <h4><? the_sub_field('data'); ?></h4>
                <? endif; ?>
                <? if ( get_sub_field('title') ) : ?>
                    <h4><? the_sub_field('title'); ?></h4>
                <? endif; ?>
            </div>
        <? php endwhile; ?>
    </div>
<? endif; ?>