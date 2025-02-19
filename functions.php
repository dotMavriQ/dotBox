<?php
function dotbox_setup()
{
    // Enqueue editor styles.
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'dotbox_setup');
?>