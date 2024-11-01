<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class RelatedTagsWidget
 * Responsible for rendering the HTML content of the Related Tags Widget.
 */
class RelatedTagsWidget {

   /**
    * Render and display the HTML content of the Related Tags Widget.
    */
   public function wrig_related_tags_html(){
   
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-related-tags-template.php');

  }

}
