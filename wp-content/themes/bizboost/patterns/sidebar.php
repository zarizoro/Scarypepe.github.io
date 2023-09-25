<?php
 /**
  * Title: Sidebar
  * Slug: bizboost/sidebar
  * Categories: bizboost, page
  */
?>

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}}}} -->
        <h2 id="about" style="margin-top: 0px; margin-right: 0px; margin-bottom: 28px; margin-left: 0px;">About</h2>
        <!-- /wp:heading -->
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-services.jpg' ); ?>" alt="" /></figure>
        <!-- /wp:image -->
        <!-- wp:paragraph -->
        <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus commodo, rhoncus et ante.', 'bizboost' ) ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}}}} -->
        <h2 id="categories" style="margin-top: 0px; margin-right: 0px; margin-bottom: 28px; margin-left: 0px;"><?php esc_html_e ( 'Categories', 'bizboost' ) ?></h2>
        <!-- /wp:heading -->
        <!-- wp:categories /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}}}} -->
        <h2 id="recent-post" style="margin-top: 0px; margin-right: 0px; margin-bottom: 28px; margin-left: 0px;"><?php esc_html_e ( 'Recent Post', 'bizboost' ) ?></h2>
        <!-- /wp:heading -->
        <!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}}}} -->
        <h2 id="tags" style="margin-top: 0px; margin-right: 0px; margin-bottom: 28px; margin-left: 0px;"><?php esc_html_e ( 'Tags', 'bizboost' ) ?></h2>
        <!-- /wp:heading -->
        <!-- wp:tag-cloud {"numberOfTags":15} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


