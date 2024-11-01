<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Class BlogContentWidget
 * Responsible for rendering the HTML content of the Blog Content widget.
 */
class BlogContentWidget {

  /**
   * Render and display the HTML content of the Blog Content widget.
   */
  public function wrig_blog_content_html(){

   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-content-template.php');

  }

}
