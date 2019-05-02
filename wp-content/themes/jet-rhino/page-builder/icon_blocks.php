<? if ( get_sub_field('title') ) : ?>
    <div class="row title">
        <div class="column">
            <? if ( get_sub_field('title') ) : ?>
                <h1>
                    <? the_sub_field('title'); ?>
                </h1>
            <? endif;
            ?>
            <? if ( get_sub_field('description') ) : ?>
            <p><? the_sub_field('description'); ?></p>
            <? endif; ?>
        </div>
    </div>
<? endif; ?>

<?php if (get_sub_field('icons')): ?>
    <div class="row icons">
    <?php while(has_sub_field('icons')): ?>
        <div class="column content-icons">
            <img src="<?= get_sub_field('image')['sizes']['gallery-thumbnail']; ?>">
            
            <? if ( get_sub_field('title') ) : ?>
                <h5><? the_sub_field('title'); ?></h5>
            <? endif; ?>
            <? if ( get_sub_field('description') ) : ?>
                <p><? the_sub_field('description'); ?></p>
            <? endif; ?>
        </div>
        
    <?php endwhile; ?>
    </div>
<?php endif; ?>

