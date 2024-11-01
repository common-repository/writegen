<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class ProductTitleWidget
 * Responsible for rendering the HTML content of the Product Title Widget.
 */
class ProductTitleWidget {

   /**
    * Render and display the HTML content of the Product Title Widget.
    */
   public function wrig_product_title_html(){
  
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-product-title-template.php');

  }

}
