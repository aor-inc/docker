<?php get_template_part( 'includes/header' ); ?>

<section class="team-member-single">
    <div class="row">
        <div class="small-12 columns">
            <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <? $image = get_field('headshot'); ?>
                <div class="image">
                    <img src="<?= $image['sizes']['portrait-medium']; ?>">
                </div>
                <h1><? the_title(); ?></h1>
                <? the_field('bio'); ?>

            <? endwhile; else : ?>

            <? endif; ?>
        </div>
    </div>
</section>


<?php get_template_part( 'includes/footer' ); ?>
