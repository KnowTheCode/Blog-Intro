<?php
/**
 * Enable the admin Editor
 *
 * @package     BlogIntro
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace BlogIntro;

add_action( 'edit_form_after_title', __NAMESPACE__ . '\enable_page_for_posts_editor' );
/**
 * Enable page_for_posts editor to allow the client to enter content.
 *
 * @since 1.0.0
 *
 * @param $post
 *
 * @return void
 */
function enable_page_for_posts_editor( $post ) {
	if ( get_option( 'page_for_posts' ) == $post->ID ) {
		add_post_type_support( 'page', 'editor' );
	}
}
