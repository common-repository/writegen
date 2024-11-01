<?php
/**
 * Wrig_EditorButton Class
 * Handles the addition of custom editor buttons in different editors.
 */
namespace Writegen\Admin\Classes\Button;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigEditorButton {

   /**
    * Constructor
    * Hooks actions to add custom buttons to classic editor, WooCommerce editor, and Gutenberg toolbar.
    */
   public function __construct(){

      add_action('media_buttons', array($this,'wrig_add_custom_button_classic_editor'));
      add_action('media_buttons', array($this, 'wrig_add_custom_button_wc_editor'));
      
   }

   /**
    * Adds a custom button to the classic editor.
    */
   public function wrig_add_custom_button_classic_editor() {
      global $typenow;
   
      // Check if it's the post editor screen
      if ( $typenow == 'post' ) {
          echo '<div class="button wrig-editor-button"><img src="'.esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/logo/menu-logo.png' ).'" alt="WriteGen Logo" class="logo-image">WriteGen</div>';
      }
   }

   /**
    * Adds a custom button to the WooCommerce editor.
    */
   public function wrig_add_custom_button_wc_editor() {
      global $post_type;
      if (class_exists('WooCommerce')) {
         global $post_type;

         // Check if it's the WooCommerce product editor screen
         if ($post_type === 'product') {
            echo '<div class="button wrig-wc-editor-button"> <img src="'.esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/logo/menu-logo.png' ).'" alt="WriteGen Logo" class="logo-image">WriteGen</div>';
         }
      }
   }

}
