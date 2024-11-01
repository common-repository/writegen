<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class BlogOutlinesWidget
 * Responsible for rendering the HTML content of the Blog Outlines widget.
 */
class BlogOutlinesWidget {

  /**
   * Render and display the HTML content of the Blog Outlines widget.
   */
  public function wrig_blog_outlines_html(){

    include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-outlines-template.php');

  }

}
