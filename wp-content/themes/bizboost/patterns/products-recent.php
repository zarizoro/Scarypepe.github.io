<?php
 /**
  * Title: Recent Products
  * Slug: bizboost/products-recent
  * Categories: bizboost, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-products products-recent","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-products products-recent">
    <!-- wp:group {"className":"wp-block-group-heading"} -->
    <div class="wp-block-group wp-block-group-heading">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="has-text-align-center"><?php esc_html_e ( 'Recent Products', 'bizboost' ) ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","className":"wp-block-group-content"} -->
    <div class="wp-block-group alignfull wp-block-group-content"><!-- wp:woocommerce/product-new {"columns":4,"rows":1,"align":"full"} /--></div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


