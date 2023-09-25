<?php

/**
 * Title: Footer
 * Slug: bizboost/footer
 * Categories: bizboost, footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignfull wp-block-footer wp-block-site-generator"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php printf(
                                                _x('Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'bizboost'),
                                                esc_attr(date_i18n(__('Y', 'bizboost'))),
                                                '<a href="' . esc_url(home_url('/')) . '">' . esc_attr(get_bloginfo('name', 'display')) . '</a><span class="sep"> </span>  by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>'
                                            ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"custom-mouse","layout":{"inherit":false}} -->
<div id="custom-cursor" class="wp-block-group custom-cursor"></div><!-- /wp:group -->
