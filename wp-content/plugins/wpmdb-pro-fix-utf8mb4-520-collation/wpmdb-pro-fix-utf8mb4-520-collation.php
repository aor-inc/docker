<?php
/*
Plugin Name: WP Migrate DB Pro force utf8mb4_unicode_520_ci conversion to utf8mb4_unicode_ci
Plugin URI: http://deliciousbrains.com
Description: Force utf8mb4_unicode_520_ci collation to utf8mb4_unicode_ci for compatibility with mysql < 5.6
Author: Delicious Brains
Version: 0.0
Author URI: http://deliciousbrains.com
*/

add_filter( 'wpmdb_create_table_query', 'wpmdb_mb4520_to_mb4', 5 );
function wpmdb_mb4520_to_mb4( $create_table ) {
	return str_replace( 'utf8mb4_unicode_520_ci', 'utf8mb4_unicode_ci', $create_table );
}


