<?php
namespace Writegen\Admin\Classes\Widgets\Common;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Class WidgetHeader
 * Renders the header of a widget.
 */
class WidgetHeader {

  /**
   * Renders the widget header HTML.
   */
  public function wrig_widget_header_html(){
    // Include the widget header template
    include(plugin_dir_path(dirname(dirname(dirname(__FILE__)))) . '/View/Widgets/Common/wrig-widget-header-template.php');
  }
}
