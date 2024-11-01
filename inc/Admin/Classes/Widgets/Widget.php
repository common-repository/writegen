<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Widget
 * A generic class responsible for rendering the HTML content of various widgets.
 */
class Widget {

   /**
    * Render and display the HTML content of the widget.
    */
   public function wrig_all_widget_html() {
      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-all-widget-template.php');
   }
   
}
