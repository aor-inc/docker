<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
   <? the_field('tag_manager_script_code','options'); ?>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   <?php wp_head(); ?>
   <? the_field('header_code','options'); ?>
</head>

<body <?php body_class(); ?> >
   <? the_field('tag_manager_noscript_code','options'); ?>
   <header >
      <div class="row">
         <div class="shrink columns logo" >
            <a href="<?php echo home_url(); ?>">
               <?
               if ( get_field('logo','options') ) :
               ?>
                  <img src="<?= get_field('logo','options')['sizes']['medium']; ?>" alt="<? bloginfo('name'); ?>">
               <?
               else :
               ?>
                  <h1><? bloginfo('name'); ?></h1>
               <?
               endif
               ?>
            </a>
         </div>
         <div class="columns navigation align-right align-middle">
            <nav class="menu-desktop">
               <!--<div class="menu-search">
                  <form role="search" method="get" id="search-form" action="/">
                     <input type="text" placeholder="Enter Search..." name="s" id="s">
                  </form>
               </div>-->
               <? aor_display_ubermenu(); ?>
            </nav>
            
            
            <div class="menu-trigger-holder">
               <a href="javascript:void(0)" class="menu-trigger shiftnav-toggle shiftnav-toggle-button" data-shiftnav-target="shiftnav-main">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
               </a>
            </div>
         </div>
      </div>
      
  </header>
<script type="text/javascript">
	jQuery(document).ready(function($){
		
		$(window).scroll(function(){
        var sticky = $('header'),
            scroll = $(window).scrollTop();
      
        if (scroll >= 120) sticky.addClass('scrolled');
        else sticky.removeClass('scrolled');
      });

	});
</script>