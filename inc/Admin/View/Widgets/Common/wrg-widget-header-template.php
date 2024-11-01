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
   <div class="wrg-sidebar-area opened">
   <!-- pre loader area start -->
   <div class="wrg-loader-container">
      <div class="wrg-loader-bg"></div>
      <div class="wrg-loader"></div>
   </div>
   <!-- pre loader area end -->
   <div class="wrg-sidebar-wrapper wizard wrg-d-flex wrg-flex-column wrg-justify-content-between">
      <div class="wrg-sidebar-main">
         <!-- header start -->
         <div class="wrg-sidebar-header wrg-d-flex wrg-justify-content-between wrg-align-items-center">
            <div class="wrg-sidebar-logo">
               <a href="">
                  <img src="<?php echo esc_url(WRIG_PLUGIN_ASSETS . 'assets/admin/img/logo/logo.svg'); ?>" alt="logo">
               </a>
            </div>
            <div class="wrg-sidebar-close">
               <button class="wrg-sidebar-close-btn" type="button">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="#0D0432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="#0D0432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </button>
            </div>
         </div>
         <div class="wrg-api-error"><span></span> </div>
<!-- header end -->