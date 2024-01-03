<?php
/**
 * Title: Banner
 * Slug: growmore-business/banner
 * Categories: growmore-business
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":"Banner Section"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"10px","left":"10px"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:10px;padding-left:10px"><!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|new-primary-color"}}}},"textColor":"new-primary-color","fontSize":"medium"} -->
<p class="has-new-primary-color-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html__( 'Full Site Editing', 'growmore-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5","letterSpacing":"1px"}},"fontSize":"x-large","fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family has-x-large-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px;line-height:1.5"><?php echo esc_html__( 'WordPress Block Theme', 'growmore-business' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="letter-spacing:1px"><?php echo esc_html__( 'Simple, Clean, and Lightning Fast Full Site Editing Theme. Google Core Web Vitals and Search Engines optimized WordPress block theme.', 'growmore-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"new-primary-color","style":{"border":{"radius":"5px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-new-primary-color-background-color has-background wp-element-button" href="#" style="border-radius:5px"><?php echo esc_html__( 'Get Started', 'growmore-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"new-primary-color","style":{"border":{"radius":"5px","width":"2px"},"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|new-primary-color"}}}},"borderColor":"new-primary-color"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-new-primary-color-color has-text-color has-background has-link-color has-border-color has-new-primary-color-border-color wp-element-button" href="#" style="border-width:2px;border-radius:5px;background-color:#ffffff00"><?php echo esc_html__( 'Learn More', 'growmore-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"id":2734,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.png" alt="" class="wp-image-2734" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->