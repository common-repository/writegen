<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class ProductShortDescWidget
 * Responsible for rendering the HTML content of the Product Short Description Widget.
 */
class ProductShortDescWidget {

   /**
    * Render and display the HTML content of the Product Short Description Widget.
    */
   public function wrig_product_short_desc_html(){
   
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-product-short-desc-template.php');

  }

}
