<?php
/**
 * Add an introduction to the site's blog page using the WordPress editor on the page_for_posts page.
 *
 * @package     KnowTheCode
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Blog Intro
 * Plugin URI:  https://knowthecode.io/labs/https://knowthecode.io/labs/insert-content-editor-blog-page
 * Description: Introduce Your Blog Page - Add an introduction to the site's blog page using the WordPress editor on the page_for_posts page.
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://knowthecode.io
 * Text Domain: blog_intro
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace BlogIntro;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

require_once( __DIR__ . '/assets/vendor/autoload.php' );
