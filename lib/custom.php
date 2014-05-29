<?php
/**
 * Custom functions
 */

add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );

function sgr_filter_image_sizes( $sizes) {

    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);

    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');
