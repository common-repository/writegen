<?php
namespace Writegen;
/**
 * Init class
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

class Init {
   function __construct(){

      new Admin\Classes\Menu\WrigMenu();
      new Admin\Classes\Button\WrigEditorButton();
      new Admin\Classes\Metabox\WrigMetaDescription();
      new Admin\Classes\WrigWidgets();
      new Base\WrigEnqueue();
      new Api\WrigApi();
     
   }

}
