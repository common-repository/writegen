<?php
namespace Writegen\Admin\Classes\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class FindQuestionWidget
 * Responsible for rendering the HTML content of the Find Question Widget.
 */
class FindQuestionWidget {

   /**
    * Render and display the HTML content of the Find Question Widget.
    */
   public function wrig_find_question_html(){
  
   include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Widgets/wrig-find-question-template.php');

  }

}
