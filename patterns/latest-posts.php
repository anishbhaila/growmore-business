<?php
/**
 * Title: Latest Posts
 * Slug: growmore-business/latest-posts
 * Categories: growmore-business
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"},"metadata":{"name":"Latest Posts Section"}} -->
<div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"bottom":"40px"}}},"layout":{"type":"constrained"},"metadata":{"name":"Section Heading"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:40px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large","fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-center has-body-font-family has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Our Latest Articles', 'growmore-business' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|new-primary-color"}}}},"textColor":"new-primary-color","fontSize":"medium"} -->
<p class="has-text-align-center has-new-primary-color-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html__( 'Stay Updated', 'growmore-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"0","bottom":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:10px;padding-bottom:0;padding-left:10px"><!-- wp:query {"queryId":30,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":3},"fontSize":"large"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|10"}},"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:0"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large","fontFamily":"body"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->