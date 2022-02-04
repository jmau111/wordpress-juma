<?php
/**
 * Block styles.
 *
 * @package wordpress-juma
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function wordpress_juma_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'wordpress-juma-sticky',
			'label' => __( 'Sticky menu button', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'wordpress-juma-flat-button',
			'label' => __( 'Flat button', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'wordpress-juma-shadow-button',
			'label' => __( 'Button with shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'wordpress-juma-navigation-button',
			'label' => __( 'Button style', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'wordpress-juma-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'wordpress-juma-list-underline',
			'label' => __( 'Underlined list items', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'wordpress-juma-box-shadow',
			'label' => __( 'Box shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'wordpress-juma-box-shadow',
			'label' => __( 'Box shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'wordpress-juma-box-shadow',
			'label' => __( 'Box shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'wordpress-juma-text-shadow',
			'label' => __( 'Text shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'wordpress-juma-text-shadow',
			'label' => __( 'Text shadow', 'wordpress-juma' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'wordpress-juma-text-shadow',
			'label' => __( 'Text shadow', 'wordpress-juma' ),
		)
	);
}
add_action( 'init', 'wordpress_juma_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function wordpress_juma_unregister_block_style() {
	wp_enqueue_script(
		'wordpress-juma-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		[ 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ],
		WORDPRESS_JUMA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wordpress_juma_unregister_block_style' );
