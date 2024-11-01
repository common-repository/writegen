<?php
/*
Plugin Name: WriteGen
Plugin URI: https://help.themepure.net/support/
Description: The Writegen - ChatGPT-OpenAI Content Generator plugin is like having a creative writing assistant for your WordPress site. It taps into OpenAI's powerful language technology to help you effortlessly produce top-notch content. With this plugin, you can create blog posts, articles, product descriptions, and more without the hassle of extensive research and writing. It's content creation made easy and user-friendly.
Version: 1.0.5
Author: Themepure
Author URI: http://themepure.net
License: GPL v2 or later
Text Domain: writegen
* Domain Path: /languages
*/
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( !class_exists("Wrig_Write_Gen") ) {
   final class Wrig_Write_Gen {
       // Define plugin properties
       private $version = '1.0.0';
       private $plugin_name = 'writegen';
       private static $instance;

     public static function getInstance() {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Wrig_Write_Gen ) ) {
           self::$instance = new Wrig_Write_Gen;	
           self::$instance->includes();
           self::$instance->init_plugin();
        }

        return self::$instance;
     }

     public function includes(){
         //autoload
         require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
     
      }

      public function init_plugin(){
      
         $plugin_init =  new Writegen\Init();
         $plugin_activate =  new Writegen\Base\WrigActivate();
         $plugin_activate->wrig_activation(); 
         
      }

       // Constructor function
       public function __construct(){

            define( 'WRIG_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
            define( 'WRIG_PLUGIN_ASSETS', plugin_dir_url( __FILE__ ) );
            define('WRIG_PLUGIN_FILE_URL', __FILE__);
            // Load plugin text domain
           add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
           register_activation_hook( __FILE__ , array($this, 'writegen_activation') ); 

       }
       // Load plugin text domain
       public function load_textdomain() {
           load_plugin_textdomain( 'writegen', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
       }
   }
}
function wrig_writegen() {
   
  return Wrig_Write_Gen::getInstance();

}

add_action( 'plugins_loaded', 'wrig_writegen' );

