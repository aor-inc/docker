<?php get_template_part( 'includes/header' ); ?>

<section class="post-single">
    <div class="row">
        <div class="small-12 columns">
            <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h1><? the_title(); ?></h1>
                <h6><?= get_The_date(); ?></h6>
                <? the_content(); ?>

                <a href="/news/" class="button back">
                    Back to News
                </a>
            <? endwhile; else : ?>

            <? endif; ?>
        </div>
    </div>
</section>


<?php get_template_part( 'includes/footer' ); ?>
