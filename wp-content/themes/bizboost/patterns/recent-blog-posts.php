<?php
 /**
  * Title: Recent Blog Posts
  * Slug: bizboost/recent-blog-posts
  * Categories: bizboost, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-recent-blog-posts","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-recent-blog-posts">
    <!-- wp:group {"align":"wide","className":"alignwide wp-block-group-heading"} -->
    <div class="wp-block-group alignwide wp-block-group-heading">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="has-text-align-center"><?php esc_html_e ( 'Recent Blog Posts', 'bizboost' ) ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
    <div class="wp-block-group alignwide wp-block-group-content">

    <!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"full","className":"alignfull","layout":{"inherit":true}} -->
        <div class="wp-block-query alignfull">
            <!-- wp:post-template {"align":"full"} -->
            <!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}},"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group wp-block-post-meta" style="margin-top: 0px; margin-bottom: 8px;">
                    <!-- wp:post-terms {"term":"category"} /-->

                    <!-- wp:post-terms {"term":"post_tag"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"0px","bottom":"0px","left":"0px","top":"0px"}}}} /-->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"14px","bottom":"0"}}},"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group wp-block-post-meta" style="margin-top: 14px; margin-bottom: 0;">
                    <!-- wp:post-author {"showAvatar":false} /-->

                    <!-- wp:post-date {"isLink":true} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->

                <!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
                <div class="wp-block-group alignfull wp-block-post-container">
                    <!-- wp:post-excerpt {"moreText":"Continue Reading"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:query-pagination-previous {"fontSize":"small"} /-->
            <!-- wp:query-pagination-next {"fontSize":"small"} /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:query -->

    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


