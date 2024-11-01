<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Class WritegenModeWidget
 * A class responsible for rendering and displaying the WriteGen mode widget content.
 */
class WritegenModeWidget {

   /**
    * Render and display the WriteGen mode widget HTML content.
    */
   public function wrig_writegen_mode_html() {
      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-writegen-mode-template.php');
   }
}
