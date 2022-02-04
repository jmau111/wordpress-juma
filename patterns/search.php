<?php
/**
 * Search page block pattern
 *
 * @package wordpress-juma
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Search', 'wordpress-juma' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '<!-- wp:heading {"className":"is-style-wordpress-juma-text-shadow","fontSize":"x-large"} --><h2 class="is-style-wordpress-juma-text-shadow has-x-large-font-size">' . wordpress_juma_search_title() . '</h2><!-- /wp:heading -->',
);
