<?php
namespace Writegen\Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue class
 */
class WrigEnqueue {

   public function __construct() {
      add_action( 'admin_enqueue_scripts', array($this, 'wrig_admin_enqueue_scripts'));
   }
   
   /**
    * Enqueue scripts and styles.
    *
    * @return void
    */
   public function wrig_admin_enqueue_scripts() {

       wp_enqueue_style( 'wrig-admin', WRIG_PLUGIN_ASSETS . 'assets/admin/css/wrig-admin.css', array( ), '1.0.0', 'all' );

       wp_enqueue_script( 'gutenberg-custom-button', WRIG_PLUGIN_ASSETS . 'assets/admin/js/gutenbergbutton.js', array( 'jquery' ), '1.0.0', true );
       wp_enqueue_script( 'nice-select', WRIG_PLUGIN_ASSETS . 'assets/admin/js/nice-select.js', array( 'jquery' ), '1.0.0', true );
       wp_enqueue_script( 'step-form', WRIG_PLUGIN_ASSETS . 'assets/admin/js/stepform.js', array( 'jquery' ), '1.0.0', true );
       wp_enqueue_script( 'apexcharts', WRIG_PLUGIN_ASSETS . 'assets/admin/js/apexcharts.js', array( 'jquery' ), '3.41.0', true );
       wp_enqueue_script( 'wrig-admin', WRIG_PLUGIN_ASSETS . 'assets/admin/js/wrig-admin.js', array( 'jquery' ), '1.0.0', true );
      // Localize the script
      wp_localize_script( 'wrig-admin', 'wrig_data', array(
         'home_url' => esc_url( home_url()),
         'wrig_open_api_key'  => esc_attr(get_option('wrig_open_api_key')),
         'wrig_serp_analytics'  => esc_attr(get_option('wrig_serp_analytics')),
         'wrig_serp_api_login'  => esc_attr(get_option('wrig_serp_api_login')),
         'wrig_serp_api_password'  => esc_attr(get_option('wrig_serp_api_password')),
      ) );
      
   }
   
}
