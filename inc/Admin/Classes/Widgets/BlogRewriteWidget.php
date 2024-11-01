<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class BlogRewriteWidget
 * Responsible for rendering the HTML content of the Blog Rewrite widget.
 */
class BlogRewriteWidget {

  /**
   * Render and display the HTML content of the Blog Rewrite widget.
   */
  public function wrig_blog_rewrite_html(){

   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-rewrite-template.php');

  }

}
