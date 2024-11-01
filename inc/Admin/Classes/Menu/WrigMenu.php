<?php
/**
 * Menu Class
 * Handles the registration of the WriteGen menu in the WordPress admin dashboard.
 */
namespace Writegen\Admin\Classes\Menu;

use Writegen\Admin\Classes\Dashboard\WrigDashboard;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class WrigMenu {
    /**
     * Constructor
     * Initializes the menu registration and other actions.
     */
    public function __construct() {
        // Hook into WordPress admin menu action
        add_action('admin_menu', array($this, 'wrig_add_menu'));
    }

    /**
     * Adds the WriteGen menu to the WordPress admin dashboard.
     */
    public function wrig_add_menu() {
        // Register a top-level menu page
        add_menu_page(
            'WriteGen',                     // Page title
            'WriteGen',                     // Menu title
            'manage_options',               // Capability required to access the menu
            'writegen',                     // Menu slug
            array($this, 'wrig_menu_dashboard_display'), // Callback to display menu content
            WRIG_PLUGIN_ASSETS.'assets/admin/img/logo/menu-logo.png',               // Menu icon
            99                              // Menu position
        );
    }

    /**
     * Callback to display the WriteGen menu dashboard content.
     */
    public function wrig_menu_dashboard_display() {
        // Create an instance of the Dashboard class to render the dashboard content
        $dashboard_renderer = new WrigDashboard();
        $dashboard_renderer->wrig_dashboard_display();
    }
}
