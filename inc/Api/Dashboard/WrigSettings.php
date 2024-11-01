<?php
/**
 * Settings Class
 * Handles retrieving and updating plugin settings data.
 */
namespace Writegen\Api\Dashboard;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigSettings {


    /**
     * Retrieves and updates plugin settings data.
     *
     * @param WP_REST_Request $request The REST API request.
     * @return array An array containing the status and data of the operation.
     */
    public function wrig_get_settings_data($request) {
        $wrig_data = $request->get_params();
        $wrig_received_nonce = $request->get_header('X-wrig-Nonce');

        // Nonce check
        if( !empty( $wrig_received_nonce) && wp_verify_nonce( $wrig_received_nonce,'wrig-save-settings-nonce')) {

            return 'Worked!';
    
        }
    
        // Sanitize and retrieve data from the request
        $wrig_open_api_key = sanitize_text_field($wrig_data['wrig_open_api_key']);
  
        // Update options with sanitized data
        update_option('wrig_open_api_key', $wrig_open_api_key);
   
        // Prepare response data
        $settings_data = array(
            'data' => 'Save Successful',
            'status' => 200,
        );

        return rest_ensure_response($settings_data);
    }
}
