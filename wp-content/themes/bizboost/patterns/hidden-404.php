<?php

/**
 * Title: Hidden 404
 * Slug: bizboost/hidden-404
 * Categories: bizboost, page
 * Inserter: no
 */
?>

<!-- wp:group {"className":"wp-block-inner-page-title","align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group wp-block-inner-page-title alignfull">
    <!-- wp:group -->
    <div class="wp-block-group">
      <!-- wp:heading {"className":"wp-block-post-title","textAlign":"center"} -->
      <h2 class="has-text-align-center wp-block-post-title"><?php esc_html_e ( '404 Nothing Found', 'bizboost' ) ?></h2>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center"><?php esc_html_e ( 'Oops! That page can\'t be found. Maybe try a search?', 'bizboost' ) ?></p>
      <!-- /wp:paragraph -->
      <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search a Keyword...","widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->



