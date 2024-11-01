<?php
namespace Writegen\Admin\Classes\Widgets\Common;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class WidgetFooter
 * Renders the footer of a widget.
 */
class WidgetFooter {

  /**
   * Renders the widget footer HTML.
   */
  public function wrig_widget_footer_html(){
    // Include the widget footer template
    include(plugin_dir_path(dirname(dirname(dirname(__FILE__)))) . '/View/Widgets/Common/wrig-widget-footer-template.php');
  }
}
