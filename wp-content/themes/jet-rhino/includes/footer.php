<footer>
   <div class="row main-footer">
      <div class="columns">
         <?php aor_menu('menu-header', 'menu-header', '', '2'); ?>
      </div>
      <div class="columns">
         
      </div>
      <div class="columns">
         <? the_field('address','options'); ?>
         <?php if (get_field('social_icons', 'options')): ?>
         	<?php while(has_sub_field('social_icons', 'options')): ?>
         
               <a href="<? the_sub_field('link_url', 'options'); ?>" target="_blank" class="social-link">
                  <img src="<?= get_sub_field('icon')['sizes']['thumbnail']; ?>">
               </a>
         
         	<?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
   <div class="row sub-footer">
      <div class="columns">
         <? if ( get_field('copyright_notice','options') ) : ?>
            <? 
            $notice = get_field('copyright_notice','options'); 
            echo str_replace('[year]', date('Y'), $notice);
            ?>
         <? endif; ?>
         <?php if (get_field('sub_footer_links', 'options')): ?> 
         	<?php while(has_sub_field('sub_footer_links', 'options')): ?>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a href="<? the_sub_field('link_url'); ?>">
                  <? the_sub_field('link_text'); ?>
               </a>
         
         	<?php endwhile; ?>
         
         <?php endif; ?>
      </div>
   </div>
</footer>


<? wp_footer(); ?>

<script>
   (function($) {
      $(document).foundation();
   })(jQuery);
</script>
<script>
   var scrolled = false;
   
   $( document ).ready(function() {
      $('.wow').each(function() {
         if ($(this).visible(true)) {
            $(this).removeClass('wow');
         }
         
      });
      $(window).on('scroll', function() {
         if (!scrolled) {
            scrolled = true;
            new WOW().init();
         }
      });
   });
  
</script>
<? the_field('footer_code','options'); ?>

</body>
</html>

