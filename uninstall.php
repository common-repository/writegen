<?php
/**
 * Uninstall options
 * This file is executed when the plugin is being uninstalled.
 */

// If not defined, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Remove saved options
delete_option('wrig_blog_widget');
delete_option('wrig_woocommerce_widget');
delete_option('wrig_writegen_mode');
delete_option('wrig_blog_title');
delete_option('wrig_blog_content');
delete_option('wrig_blog_outline');
delete_option('wrig_blog_tags');
delete_option('wrig_rewrite_content');
delete_option('wrig_brief_generate');
delete_option('wrig_paragraph_compression');
delete_option('wrig_related_keywords');
delete_option('wrig_find_question');
delete_option('wrig_short_story');
delete_option('wrig_woocommerce_product_title');
delete_option('wrig_woocommerce_short_desc');
delete_option('wrig_woocommerce_long_desc');
delete_option('wrig_custom_nonce');
