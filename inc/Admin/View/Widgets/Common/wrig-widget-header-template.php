<?php
/**
 * Template HTML for the WriteGen Sidebar
 * Includes sidebar footer.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="writegen">
   <div class="wrig-sidebar-area opened">
   <!-- pre loader area start -->
   <div class="wrig-loader-container">
      <div class="wrig-loader-bg"></div>
      <div class="wrig-loader"></div>
   </div>
   <!-- pre loader area end -->
   <div class="wrig-sidebar-wrapper wizard wrig-d-flex wrig-flex-column wrig-justify-content-between">
      <div class="wrig-sidebar-main">
         <!-- header start -->
         <div class="wrig-sidebar-header wrig-d-flex wrig-justify-content-between wrig-align-items-center">
            <div class="wrig-sidebar-logo">
               <a href="">
                  <img src="<?php echo esc_url(WRIG_PLUGIN_ASSETS . 'assets/admin/img/logo/logo.svg'); ?>" alt="logo">
               </a>
            </div>
            <div class="wrig-sidebar-close">
               <button class="wrig-sidebar-close-btn" type="button">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="#0D0432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="#0D0432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </button>
            </div>
         </div>
         <div class="wrig-api-error"><span></span> </div>
<!-- header end -->