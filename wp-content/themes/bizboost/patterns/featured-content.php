<?php
 /**
  * Title: Featured Content
  * Slug: bizboost/featured-content
  * Categories: bizboost, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-feature-content","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-feature-content">
    <!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"align":"wide","className":"alignwide wp-block-group-heading"} -->
    <div class="wp-block-group alignwide wp-block-group-heading">
        <!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"textColor":"body-text","fontSize":"medium"} -->
        <h6 class="has-text-align-center has-body-text-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1.8;text-transform:uppercase"><?php esc_html_e ( 'What We Do', 'bizboost' ) ?></h6>
        <!-- /wp:heading -->
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="has-text-align-center"><?php esc_html_e ( 'Featured Content', 'bizboost' ) ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
    <div class="wp-block-group alignwide wp-block-group-content">
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-post-group"} -->
                <div class="wp-block-group wp-block-post-group">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-content-1.jpg' ); ?>" alt="" class="" /></figure>
                    <!-- /wp:image -->
                    <!-- wp:group {"className":"wp-block-entry-content"} -->
                    <div class="wp-block-group wp-block-entry-content">
                        <!-- wp:heading {"fontSize":"content-heading"} -->
                        <h2 class="has-content-heading-font-size"><?php esc_html_e ( 'Creative Lights', 'bizboost' ) ?></h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'bizboost' ) ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a class="wp-block-button__link"><?php esc_html_e ( 'View More', 'bizboost' ) ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-post-group"} -->
                <div class="wp-block-group wp-block-post-group">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-content-2.jpg' ); ?>" alt="" class="" /></figure>
                    <!-- /wp:image -->
                    <!-- wp:group {"className":"wp-block-entry-content"} -->
                    <div class="wp-block-group wp-block-entry-content">
                        <!-- wp:heading {"fontSize":"content-heading"} -->
                        <h2 class="has-content-heading-font-size"><?php esc_html_e ( 'Mobile Photography', 'bizboost' ) ?></h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'bizboost' ) ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a class="wp-block-button__link"><?php esc_html_e ( 'View More', 'bizboost' ) ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-post-group"} -->
                <div class="wp-block-group wp-block-post-group">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-content-3.jpg' ); ?>" alt="" class="" /></figure>
                    <!-- /wp:image -->
                    <!-- wp:group {"className":"wp-block-entry-content"} -->
                    <div class="wp-block-group wp-block-entry-content">
                        <!-- wp:heading {"fontSize":"content-heading"} -->
                        <h2 class="has-content-heading-font-size"><?php esc_html_e ( 'Vintage Camera', 'bizboost' ) ?></h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'bizboost' ) ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a class="wp-block-button__link"><?php esc_html_e ( 'View More', 'bizboost' ) ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


