<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class BlogTagsWidget
 * Responsible for rendering the HTML content of the Blog Tags widget.
 */
class BlogTagsWidget {

  /**
   * Render and display the HTML content of the Blog Tags widget.
   */
  public function wrig_blog_tags_html(){
   
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-blog-tags-template.php');

  }

}
