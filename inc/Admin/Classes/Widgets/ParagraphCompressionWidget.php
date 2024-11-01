<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class ParagraphCompressionWidget
 * Responsible for rendering the HTML content of the Paragraph Compression Widget.
 */
class ParagraphCompressionWidget {

   /**
    * Render and display the HTML content of the Paragraph Compression Widget.
    */
   public function wrig_paragraph_compression_html(){
   
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-paragraph-compression-template.php');

  }

}
