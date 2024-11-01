<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class ShortStoryWidget
 * Responsible for rendering the HTML content of the Short Story Widget.
 */
class ShortStoryWidget {

   /**
    * Render and display the HTML content of the Short Story Widget.
    */
   public function wrig_short_story_html(){
   
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-short-story-template.php');

  }

}
