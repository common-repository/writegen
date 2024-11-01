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
   <div class="wrg-widget-blog-footer footer-hide wrg-wizard-footer wrg-sidebar-footer wrg-d-flex wrg-justify-content-between wrg-align-items-center">
      <div class="wrg-sidebar-footer-left">
         <button class="wrg-sidebar-prev-btn" type="button" id="wizard-prev">
            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M6 1L1 6L6 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>
      <div class="wrg-sidebar-footer-right">
         <button class="wrg-sidebar-footer-btn wrg-sidebar-cancel-btn" type="button"><?php echo esc_html__( 'Cancel', 'writegen' ); ?></button>
         <button class="wrg-sidebar-footer-btn wrg-sidebar-next-btn wrg-next-btn-disable" type="button" id="wizard-next"><?php echo esc_html__( 'Next', 'writegen' ); ?></button>
      </div>
   </div>
   
   <div class="wrg-widget-woocommerce-footer footer-hide wrg-wizard-footer wrg-sidebar-footer wrg-d-flex wrg-justify-content-between wrg-align-items-center">
         <div class="wrg-sidebar-footer-left">
            <button class="wrg-sidebar-prev-btn" type="button" id="wrg-wc-wizard-prev">
               <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 1L1 6L6 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
         </div>
         <div class="wrg-sidebar-footer-right">
            <button class="wrg-sidebar-footer-btn wrg-sidebar-cancel-btn" type="button"><?php echo esc_html__( 'Cancel', 'writegen' ); ?></button>
            <button class="wrg-sidebar-footer-btn wrg-sidebar-next-btn wrg-next-btn-disable" type="button" id="wrg-wc-wizard-next"><?php echo esc_html__( 'Next', 'writegen' ); ?></button>
         </div>
   </div>
</div>