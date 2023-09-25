<?php

/**
 * Title: 404 Header
 * Slug: bizboost/404-header
 * Categories: bizboost, header
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;">
        <!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/header-media-bg.jpg' ); ?>","dimRatio":20,"overlayColor":"body-text"} -->
        <div class="wp-block-cover">
            <span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-20 has-background-dim"></span>
            <img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/header-media-bg.jpg' ); ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"className":"alignwide"} -->
                    <div class="wp-block-group alignwide">
                        <!-- wp:heading {"textAlign":"center","level":1} -->
                        <h1 class="has-text-align-center"><?php esc_html_e ( '404 Nothing Found', 'bizboost' ) ?></h1>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph {"textAlign":"center"} -->
                        <p class="has-text-align-center"><?php esc_html_e ( 'Oops! That page can\'t be found', 'bizboost' ) ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

