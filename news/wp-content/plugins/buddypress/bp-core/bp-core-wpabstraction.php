<?php
/*****
 * WordPress Abstraction
 *
 * The functions within this file will detect the version of WordPress you are running
 * and will alter the environment so BuddyPress can run regardless.
 *
 * The code below mostly contains function mappings. This code is subject to change once
 * the 3.0 WordPress version merge takes place.
 */

if ( !bp_core_is_multisite() ) {
	$wpdb->base_prefix = $wpdb->prefix;
	$wpdb->blogid = 1;
}

function bp_core_is_multisite() {
	if ( function_exists( 'is_multisite' ) )
		return is_multisite();

	if ( !function_exists( 'wpmu_signup_blog' ) )
		return false;

	return true;
}

/**
 * bp_core_is_main_site
 *
 * Checks if current blog is root blog of site
 *
 * @since 1.2.6
 * @package BuddyPress
 *
 * @param int $blog_id optional blog id to test (default current blog)
 * @return bool True if not multisite or $blog_id is main site
 */
function bp_core_is_main_site( $blog_id = '' ) {
	global $current_site, $current_blog;

	if ( !bp_core_is_multisite() )
		return true;

	if ( empty( $blog_id ) )
		$blog_id = $current_blog->blog_id;

	return $blog_id == $current_site->blog_id;
}

function bp_core_get_status_sql( $prefix = false ) {
	if ( !bp_core_is_multisite() )
		return "{$prefix}user_status = 0";
	else
		return "{$prefix}spam = 0 AND {$prefix}deleted = 0 AND {$prefix}user_status = 0";
}

if ( !function_exists( 'get_blog_option' ) ) {
	function get_blog_option( $blog_id, $option_name, $default = false ) {
		return get_option( $option_name, $default );
	}
}

if ( !function_exists( 'add_blog_option' ) ) {
	function add_blog_option( $blog_id, $option_name, $option_value ) {
		return add_option( $option_name, $option_value );
	}
}

if ( !function_exists( 'update_blog_option' ) ) {
	function update_blog_option( $blog_id, $option_name, $option_value ) {
		return update_option( $option_name, $option_value );
	}
}

if ( !function_exists( 'switch_to_blog' ) ) {
	function switch_to_blog() {
		return 1;
	}
}

if ( !function_exists( 'restore_current_blog' ) ) {
	function restore_current_blog() {
		return 1;
	}
}

if ( !function_exists( 'get_blogs_of_user' ) ) {
	function get_blogs_of_user() {
		return false;
	}
}

if ( !function_exists( 'update_blog_status' ) ) {
	function update_blog_status() {
		return true;
	}
}

if ( !function_exists( 'is_subdomain_install' ) ) {
	function is_subdomain_install() {
		if ( ( defined( 'VHOST' ) && 'yes' == VHOST ) || ( defined( 'SUBDOMAIN_INSTALL' ) && SUBDOMAIN_INSTALL ) )
			return true;

		return false;
	}
}

// Deprecated - 1.2.6
if ( !function_exists( 'is_site_admin' ) ) {
	function is_site_admin( $user_id = false ) {
		return is_super_admin( $user_id );
	}
}

// Added for WordPress 3.1 support
if ( !function_exists( 'get_dashboard_url' ) ) {

	/**
	 * Make sure the 'network_admin_menu' hook (which is new to 3.1) fires
	 * on our reliable friend 'admin_menu'
	 */
	function bp_network_admin_menu() {
		do_action( 'network_admin_menu' );
	}
	add_action( 'admin_menu', 'bp_network_admin_menu' );
}

?>
