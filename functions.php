<?php
function dotbox_setup()
{
    // Enqueue editor styles.
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'dotbox_setup');

/**
 * Register custom block styles.
 */
function dotbox_register_block_styles()
{
    register_block_style(
        'core/paragraph',
        array(
            'name' => 'dotbox-fancy-text',
            'label' => __('Fancy Text', 'dotbox'),
            'inline_style' => '.wp-block-paragraph.is-style-dotbox-fancy-text { font-style: italic; color: #d79921; }',
        )
    );
}
add_action('init', 'dotbox_register_block_styles');

/**
 * Register custom block patterns.
 */
function dotbox_register_block_patterns()
{
    register_block_pattern(
        'dotbox/hero-section',
        array(
            'title' => __('Hero Section', 'dotbox'),
            'description' => __('A simple hero section with a title and button.', 'dotbox'),
            'content' => '<!-- wp:group {"align":"full"} -->
                <div class="wp-block-group">
                    <h2>' . __('Welcome to dotBox', 'dotbox') . '</h2>
                    <p>' . __('Minimalist Gruvbox theme for WordPress.', 'dotbox') . '</p>
                </div>
                <!-- /wp:group -->',
        )
    );
}
add_action('init', 'dotbox_register_block_patterns');

/**
 * Ensure all translations use the correct text domain.
 */
function dotbox_load_theme_textdomain()
{
    load_theme_textdomain('dotbox', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'dotbox_load_theme_textdomain');
?>