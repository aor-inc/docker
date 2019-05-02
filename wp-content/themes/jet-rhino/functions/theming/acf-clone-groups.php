<?php
function aor_button() {

   unset($target, $color, $size, $url);

   if ( get_sub_field('button_text') ) :

      $target =
         get_sub_field('open_in_a_new_tab')
         ? "target='_blank'"
         : "";

      $color = get_sub_field('button_color');

      $size =
         get_sub_field('button_size') == "large"
         ? "large"
         : ""
         ;

      $url =
         get_sub_field('url_type') == "URL"
         ? get_sub_field('url')
         : get_the_permalink(get_sub_field('wordpress_content'))
         ;

      ?>
      <a href="<?= $url; ?>" class="button <?= $size; ?> <?= $color; ?>" <?= $target; ?>>
         <? the_sub_field('button_text'); ?>
      </a>

   <?php
   endif;

   unset($target, $color, $size, $url);

}
