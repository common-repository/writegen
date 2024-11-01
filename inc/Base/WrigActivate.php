<?php
namespace Writegen\Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Activate class
 */

 class WrigActivate {
   
    public function wrig_activation() {

        update_option('wrig_blog_widget', get_option('wrig_blog_widget', 'on'));
        update_option('wrig_woocommerce_widget', get_option('wrig_woocommerce_widget','on'));
        update_option('wrig_writegen_mode', get_option('wrig_writegen_mode','on'));
        update_option('wrig_blog_title', get_option('wrig_blog_title', 'on'));
        update_option('wrig_blog_content', get_option('wrig_blog_content', 'on'));
        update_option('wrig_blog_outline', get_option('wrig_blog_outline', 'on'));
        update_option('wrig_blog_tags', get_option('wrig_blog_tags','on'));
        update_option('wrig_rewrite_content', get_option('wrig_rewrite_content', 'on'));
        update_option('wrig_brief_generate', get_option('wrig_brief_generate', 'on'));
        update_option('wrig_paragraph_compression', get_option('wrig_paragraph_compression', 'on'));
        update_option('wrig_related_keywords', get_option('wrig_related_keywords','on'));
        update_option('wrig_find_question', get_option('wrig_find_question', 'on'));
        update_option('wrig_short_story', get_option('wrig_short_story', 'on'));
        update_option('wrig_woocommerce_product_title', get_option('wrig_woocommerce_product_title', 'on'));
        update_option('wrig_woocommerce_short_desc', get_option('wrig_woocommerce_short_desc', 'on'));
        update_option('wrig_woocommerce_long_desc', get_option('wrig_woocommerce_long_desc', 'on'));

    }
    
}
