<?php
/**
 * AllWidgets Class
 * Handles retrieving and updating all widget settings data.
 */
namespace Writegen\Api\Dashboard;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigAllWidgets {

    /**
     * Retrieves and updates all widget settings data.
     *
     * @param WP_REST_Request $request The REST API request.
     * @return array An array containing the status and data of the operation.
     */
    public function wrig_get_all_widget_settings_data($request) {
    $wrig_data = $request->get_params();
    $wrig_received_nonce = $request->get_header('X-wrig-Nonce');

    // Nonce check
    if( !empty( $wrig_received_nonce) && wp_verify_nonce( $wrig_received_nonce,'wrig-save-settings-nonce')) {

      return 'Worked!';

    }
    
    
     // Sanitize and retrieve data from the request
    $wrig_blog_widget = sanitize_text_field( $wrig_data['wrig_blog_widget'] );
    $wrig_woocommerce_widget = sanitize_text_field( $wrig_data['wrig_woocommerce_widget'] );
    $wrig_writegen_mode = sanitize_text_field( $wrig_data['wrig_writegen_mode'] );
    $wrig_blog_title = sanitize_text_field( $wrig_data['wrig_blog_title'] );
    $wrig_blog_content = sanitize_text_field( $wrig_data['wrig_blog_content'] );
    $wrig_blog_outline = sanitize_text_field( $wrig_data['wrig_blog_outline'] );
    $wrig_blog_tags = sanitize_text_field( $wrig_data['wrig_blog_tags'] );
    $wrig_rewrite_content = sanitize_text_field( $wrig_data['wrig_rewrite_content'] );
    $wrig_brief_generate = sanitize_text_field( $wrig_data['wrig_brief_generate'] );
    $wrig_paragraph_compression = sanitize_text_field( $wrig_data['wrig_paragraph_compression'] );
    $wrig_related_keywords = sanitize_text_field( $wrig_data['wrig_related_keywords'] );
    $wrig_find_question = sanitize_text_field( $wrig_data['wrig_find_question'] );
    $wrig_short_story = sanitize_text_field( $wrig_data['wrig_short_story'] );
    $wrig_woocommerce_product_title = sanitize_text_field( $wrig_data['wrig_woocommerce_product_title'] );
    $wrig_woocommerce_short_desc = sanitize_text_field( $wrig_data['wrig_woocommerce_short_desc'] );
    $wrig_woocommerce_long_desc = sanitize_text_field( $wrig_data['wrig_woocommerce_long_desc'] );

     // Update options with sanitized data
     update_option('wrig_blog_widget', $wrig_blog_widget);
     update_option('wrig_woocommerce_widget', $wrig_woocommerce_widget);
     update_option('wrig_writegen_mode', $wrig_writegen_mode);
     update_option('wrig_blog_title', $wrig_blog_title);
     update_option('wrig_blog_content', $wrig_blog_content);
     update_option('wrig_blog_outline', $wrig_blog_outline);
     update_option('wrig_blog_tags', $wrig_blog_tags);
     update_option('wrig_rewrite_content', $wrig_rewrite_content);
     update_option('wrig_brief_generate', $wrig_brief_generate);
     update_option('wrig_paragraph_compression', $wrig_paragraph_compression);
     update_option('wrig_related_keywords', $wrig_related_keywords);
     update_option('wrig_find_question', $wrig_find_question);
     update_option('wrig_short_story', $wrig_short_story);
     update_option('wrig_woocommerce_product_title', $wrig_woocommerce_product_title);
     update_option('wrig_woocommerce_short_desc', $wrig_woocommerce_short_desc);
     update_option('wrig_woocommerce_long_desc', $wrig_woocommerce_long_desc);

        // Prepare response data
        $settings_data = array(
            'data' => 'Save Successfull',
            'status' => 200,
        );

        return rest_ensure_response($settings_data);
    }

}
