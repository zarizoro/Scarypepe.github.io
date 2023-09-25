<?php
 /**
  * Title: Promotional Contact
  * Slug: bizboost/promotional-contact
  * Categories: bizboost, page
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/promotional-contact.jpg' ); ?>","dimRatio":60,"align":"full","className":"wp-block-section wp-block-cta wp-block-promotional-contact"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-cta wp-block-promotional-contact">
    <span aria-hidden="true" class="has-background-dim-60 wp-block-cover__gradient-background has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/promotional-contact.jpg' ); ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"inherit":true}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"spacing":{"blockGap":"35px"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"className":"wp-block-group-heading"} -->
                <div class="wp-block-group wp-block-group-heading">
                    <!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"textColor":"body-text","fontSize":"medium"} -->
        <h6 class="has-text-align-center has-body-text-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1.8;text-transform:uppercase"><?php esc_html_e ( 'Promotional Contact', 'bizboost' ) ?></h6>
        <!-- /wp:heading -->
                    <!-- wp:heading {"textAlign":"center"} -->
                    <h2 class="has-text-align-center"><?php esc_html_e ( 'Ready to work together?', 'bizboost' ) ?></h2>
                    <!-- /wp:heading -->

                </div>
                <!-- /wp:group -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link"><?php esc_html_e ( 'Contact Us', 'bizboost' ) ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

