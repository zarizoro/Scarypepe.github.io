<?php
 /**
  * Title: Hero Content
  * Slug: bizboost/hero-content
  * Categories: bizboost, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section  wp-block-hero-content"} -->
<div class="wp-block-group alignfull wp-block-section wp-block-hero-content">
    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">
        <!-- wp:group {"style":{"color":{}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:media-text {"mediaLink":"#","mediaType":"image","mediaWidth":40} -->
            <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto">
                <figure class="wp-block-media-text__media"><img
                        src="<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.png' ); ?>"
                        alt="" /></figure>
                <div class="wp-block-media-text__content">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"className":"wp-block-group-heading"} -->
                    <div class="wp-block-group wp-block-group-heading">
                        <!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"textColor":"body-text","fontSize":"medium"} -->
        <h6 class="has-text-align-left has-body-text-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1.8;text-transform:uppercase"><?php esc_html_e ( 'Our Services', 'bizboost' ) ?></h6>
        <!-- /wp:heading -->
                        <!-- wp:heading {"textAlign":"left"} -->
                        <h2 class="has-text-align-left"><?php esc_html_e ( 'We solve creative delusions efficiently', 'bizboost' ) ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e ( 'The display employs new techniques and technology to
precisely follow the curves of the design, all the way to the elegantly rounded corners.', 'bizboost' ) ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'Get Started', 'bizboost' ) ?></a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:media-text -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


