<?php
/**
 * Twenty Twenty-four - Child function and definitions
 * 
 * @link 
 * @since Twenty Twenty-four - Child
 */

 function twentytwentyfour_child_enqueue_scripts(){
    wp_enqueue_style( 
		'child-style', 
		get_parent_theme_file_uri() . '/style.css'
	);
 }

 add_action( 'wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_scripts' );

function register_query_loop_pattern() {
    $block_content = '
    <!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"list","columns":1},"className":"custom-query-loop"} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
            <!-- wp:post-featured-image /-->
            <!-- wp:post-title {"isLink":true} /-->
            <!-- wp:post-excerpt /-->
            <!-- wp:post-link {"text":"Read More"} /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
    ';

    register_block_pattern(
        'mytheme/query-loop-pattern',
        array(
            'title'       => __('Custom Query Loop'),
            'description' => __('Displays 3 most recent posts with featured image, title, excerpt, and link.'),
            'content'     => $block_content,
        )
    );
}
add_action('init', 'register_query_loop_pattern');


