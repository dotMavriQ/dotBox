<?php
register_block_pattern(
    'dotbox/hero-section',
    array(
        'title' => __('Hero Section', 'dotbox'),
        'description' => __('A simple hero section with a title and button.', 'dotbox'),
        'content' => '<!-- wp:group {"align":"full"} -->
            <div class="wp-block-group">
                <h2>' . __('Welcome to dotBox', 'dotbox') . '</h2>
                <p>' . __('A modern Gruvbox-inspired block theme.', 'dotbox') . '</p>
                <a href="#" class="wp-block-button">' . __('Learn More', 'dotbox') . '</a>
            </div>
            <!-- /wp:group -->',
    )
);
?>