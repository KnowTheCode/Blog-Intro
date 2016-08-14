<?php
/**
 * Renders out the blog contents on the front-end
 *
 * @package     BlogIntro
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace BlogIntro;

add_action( 'after_setup_theme', __NAMESPACE__ . '\unregister_callbacks' );
/**
 * Unregister callbacks after the theme is setup and ready to go.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_callbacks() {
	remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
}


add_action( 'genesis_before_loop', __NAMESPACE__ . '\render_contents' );
/**
 * Render the contents out to the browser.
 *
 * @since 1.0.0
 *
 * @return void
 */
function render_contents() {
	if ( ! is_home() ) {
		return;
	}

	$page_for_posts = get_page_for_posts();
	if ( ! $page_for_posts ) {
		return;
	}

	$contents = prepare_contents_for_render( $page_for_posts );
	$title    = get_the_title( $page_for_posts );

	include( 'views/contents.php' );
}


/**
 * Get the page for posts object
 *
 * @since 1.0.0
 *
 * @return WP_Post|null
 */
function get_page_for_posts() {
	$post_id = get_option( 'page_for_posts' );

	return get_post( $post_id );
}

/**
 * Prepare the contents for rendering, which includes sanitizing it,
 * since it's not running through filtering, and running the shortcodes.
 *
 * @since 1.0.0
 *
 * @param \WP_Post $page_for_posts Post object
 *
 * @return string Returns the clean HTML
 */
function prepare_contents_for_render( \WP_Post $page_for_posts ) {
	$content = wp_kses_post( $page_for_posts->post_content );
	$content = do_shortcode( $content );

	return wpautop( $content );
}
