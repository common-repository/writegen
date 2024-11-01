<?php
/**
 * Template HTML for the WriteGen Sidebar
 * Includes preloader, sidebar header, and API error message area.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
          </div>   
      </div>
   </div> 
   <div class="wrig-widget-blog-footer footer-hide wrig-wizard-footer wrig-sidebar-footer wrig-d-flex wrig-justify-content-between wrig-align-items-center">
      <div class="wrig-sidebar-footer-left">
         <button class="wrig-sidebar-prev-btn" type="button" id="wizard-prev">
            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M6 1L1 6L6 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>
      <div class="wrig-sidebar-footer-right">
         <button class="wrig-sidebar-footer-btn wrig-sidebar-cancel-btn" type="button"><?php echo esc_html__( 'Cancel', 'writegen' ); ?></button>
         <button class="wrig-sidebar-footer-btn wrig-sidebar-next-btn wrig-next-btn-disable" type="button" id="wizard-next"><?php echo esc_html__( 'Next', 'writegen' ); ?></button>
      </div>
   </div>
   
   <div class="wrig-widget-woocommerce-footer footer-hide wrig-wizard-footer wrig-sidebar-footer wrig-d-flex wrig-justify-content-between wrig-align-items-center">
         <div class="wrig-sidebar-footer-left">
            <button class="wrig-sidebar-prev-btn" type="button" id="wrig-wc-wizard-prev">
               <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 1L1 6L6 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
         </div>
         <div class="wrig-sidebar-footer-right">
            <button class="wrig-sidebar-footer-btn wrig-sidebar-cancel-btn" type="button"><?php echo esc_html__( 'Cancel', 'writegen' ); ?></button>
            <button class="wrig-sidebar-footer-btn wrig-sidebar-next-btn wrig-next-btn-disable" type="button" id="wrig-wc-wizard-next"><?php echo esc_html__( 'Next', 'writegen' ); ?></button>
         </div>
   </div>
</div>