<?php
 /**
  * Title: Video Featured
  * Slug: bizboost/video-featured
  * Categories: bizboost, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-video-featured","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-video-featured">
    <!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
    <div class="wp-block-group alignwide wp-block-group-content">
       <!-- wp:video -->
        <figure class="wp-block-video"><video controls poster="<?php echo get_parent_theme_file_uri( '/assets/images/video-featured.jpg' ); ?>" src="<?php echo get_parent_theme_file_uri( '/assets/video/video-featured.mp4' ); ?>"></video></figure>
        <!-- /wp:video -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


