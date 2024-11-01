<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Class WoocommerceWidget
 * A class responsible for rendering and displaying WooCommerce-multistep widget content.
 */
class WoocommerceWidget {

   /**
    * Render and display the WooCommerce widget HTML content.
    */
   public function wrig_woocommerce_widget_html() {
      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-woocommerce-template.php');
   }
}
