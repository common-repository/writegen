<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class ProductLongDescWidget
 * Responsible for rendering the HTML content of the Product Long Description Widget.
 */
class ProductLongDescWidget {

   /**
    * Render and display the HTML content of the Product Long Description Widget.
    */
   public function wrig_product_long_desc_html(){
   
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-product-long-desc-template.php');

  }

}
