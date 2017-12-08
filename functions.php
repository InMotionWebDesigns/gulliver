<?php
/**
 * This is where child-theme specific code should be ran.
 *
 * @package Starter
 */
 // Changing excerpt more
    function new_excerpt_more($more) {
    global $post;
    return '<br> <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Read More' . '</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
?>
