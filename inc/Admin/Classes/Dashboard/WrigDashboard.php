<?php
/**
 * Dashboard Class
 * Handles the display of the WriteGen dashboard.
 */
namespace Writegen\Admin\Classes\Dashboard;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigDashboard
{
   /**
    * Displays the WriteGen dashboard.
    */
   public function wrig_dashboard_display(){
      // Include the dashboard template file
      include(plugin_dir_path(dirname(dirname(__FILE__))) . '/View/Dashboard/wrig-dashboard-template.php');
   }
}
