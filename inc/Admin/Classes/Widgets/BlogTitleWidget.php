<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class BlogTitleWidget
 * Responsible for rendering the HTML content of the Blog Title widget.
 */
class BlogTitleWidget {

  /**
   * Render and display the HTML content of the Blog Title widget.
   */
  public function wrig_single_blog_title_html(){

      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-title-template.php');

  }

}
