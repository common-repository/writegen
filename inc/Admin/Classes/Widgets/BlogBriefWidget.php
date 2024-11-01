<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Class BlogBriefWidget
 * Responsible for rendering the HTML content of the Blog Brief widget.
 */
class BlogBriefWidget {

  /**
   * Render and display the HTML content of the Blog Brief widget.
   */
  public function wrig_blog_brief_html(){

      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-brief-template.php');

  }

}
