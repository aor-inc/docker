<?php
function aor_register_menus() {
  register_nav_menus(
    array(
    'menu-header' => __('Main Menu'),
    'footer-menu-1' => __( 'Footer Menu 1')
    )
  );
}

add_action('init', 'aor_register_menus');

