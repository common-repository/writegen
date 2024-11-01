<?php
/**
 * API Class
 * Handles registering and managing custom REST API routes.
 */
namespace Writegen\Api;

use Writegen\Api\Dashboard\WrigAllWidgets;
use Writegen\Api\Dashboard\WrigSettings;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigApi {
    /**
     * Constructor
     * Initializes the registration of REST API routes.
     */
    public function __construct() {
        add_action('rest_api_init', array($this, 'wrig_register_routes'));
    }
    
    /**
     * Registers custom REST API routes.
     */
    public function wrig_register_routes() {
        // Route for retrieving all widget settings
        register_rest_route('writegen/v1', '/allwidgetsettings', array(
            'methods' => 'POST',
            'callback' => array($this, 'wrig_get_all_widget_settings'),
            'permission_callback' => '__return_true',
        ));
        
        // Route for retrieving general settings
        register_rest_route('writegen/v1', '/settings', array(
            'methods' => 'POST',
            'callback' => array($this, 'wrig_get_settings'),
            'permission_callback' => '__return_true',
        ));
    }
    
    /**
     * Callback function for retrieving all widget settings.
     */
    public function wrig_get_all_widget_settings($request) {
        $setting_render = new WrigAllWidgets();
        return $setting_render->wrig_get_all_widget_settings_data($request);
    }
    
    /**
     * Callback function for retrieving general settings.
     */
    public function wrig_get_settings($request) {
        $setting_render = new WrigSettings();
        return $setting_render->wrig_get_settings_data($request);
    }
}
