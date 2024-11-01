<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class BlogWidget
 * Responsible for rendering the HTML content of the Blog Widget.
 */
class BlogWidget {

   /**
    * Render and display the HTML content of the Blog Widget.
    */
   public function wrig_blog_widget_html_content() {

      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-widget-template.php');

   }

}
