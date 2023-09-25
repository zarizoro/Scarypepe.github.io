<?php

/**
 * Title: Footer Three Columns
 * Slug: bizboost/footer-three-columns
 * Categories: bizboost, footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"wp-block-footer wp-block-widget-area","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignfull wp-block-footer wp-block-widget-area"><!-- wp:group {"align":"wide"} -->
        <div class="wp-block-group alignwide"><!-- wp:columns {"className":"wp-block-footer-widget-area-columns"} -->
            <div class="wp-block-columns wp-block-footer-widget-area-columns"><!-- wp:column {"className":"wp-block-widget"} -->
                <div class="wp-block-column wp-block-widget"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
                    <div class="wp-block-group"><!-- wp:site-title /-->

                        <!-- wp:site-tagline /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:heading -->
                        <h2><?php esc_html_e('Newsletter Signup', 'bizboost') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:tnp/minimal {"padding":0} -->
                        <div style="padding:0" class="wp-block-tnp-minimal">
                            <p></p>
                            <div>[newsletter_form type="minimal"]</div>
                        </div>
                        <!-- /wp:tnp/minimal -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"wp-block-widget"} -->
                <div class="wp-block-column wp-block-widget"><!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                        <h2 id="contact" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Quick Links', 'bizboost') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:navigation {"overlayMenu":"never"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"wp-block-widget"} -->
                <div class="wp-block-column wp-block-widget"><!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                        <h2 id="contact" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Customer Support', 'bizboost') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:navigation {"overlayMenu":"never"} /-->
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
</div>
<!-- /wp:group -->
