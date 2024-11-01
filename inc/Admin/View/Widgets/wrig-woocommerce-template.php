<?php
/**
 * Template HTML for the WriteGen Sidebar
 * Includes sidebar woocommece widget.
 * Also includes the WriteGen Helper file using the correct path.
 * This file provides essential functions and utilities for the WriteGen plugin.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include(plugin_dir_path(dirname(__FILE__)) . '/Helper/wrig-helper.php');
?>
  <div class="wrig-sidebar-main-content wrig-woocommerce-widget-canvas">

  <!-- tab start -->
  <div class="wizard-header wrig-wc-widzard-header">
     <div class="wrig-sidebar-tab-wrapper steps ">
        <div class="wrig-sidebar-tab-btn wrig-wc-wizard-step wrig-product-title active"><?php echo esc_html__('Title', 'writegen' ); ?></div>
        <div class="wrig-sidebar-tab-btn wrig-wc-wizard-step wrig-product-long-des"><?php echo esc_html__('Long desc', 'writegen' ); ?></div>
        <div class="wrig-sidebar-tab-btn wrig-wc-wizard-step wrig-product-short-des"><?php echo esc_html__('Short desc', 'writegen' ); ?></div>
     </div>
     <!-- tab end -->
  </div>

  <div class="wrig-sidebar-content-body wrig-wc-wizard-body">
     <!-- content start -->
     <div class="wrig-sidebar-content wrig-select step initial active">
        <div class="wrig-sidebar-inpur-wrapper mb-30">
           <div class="wrig-sidebar-input">
              <div class="wrig-sidebar-input-title">
                 <label><?php echo esc_html__('Product Name', 'writegen' ); ?></label>
                 <div class="wrig-tooltip-wrapper">
                    <span>
                       <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                    </span>
                    <div class="wrig-tooltip-content">
                       <p><?php echo esc_html__('Enter the product name of your product title.', 'writegen' ); ?></p>
                    </div>
              </div>
              </div>
              <div class="wrig-input-box">
                 <input type="text" class="wrig-product-name" placeholder="<?php echo esc_attr__('Enter Your Keyword here', 'writegen' ); ?>">
              </div>
           </div>
           <div class="wrig-sidebar-input">
              <div class="wrig-sidebar-input-title">
                 <label><?php echo esc_html__('Product Brief/ Comma separated keywords', 'writegen' ); ?></label>
                 <div class="wrig-tooltip-wrapper">
                    <span>
                       <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                    </span>
                    <div class="wrig-tooltip-content">
                       <p><?php echo esc_html__('Provide the context/brief of your product.', 'writegen' ); ?></p>
                    </div>
              </div>
              </div>
              <div class="wrig-input-box">
                 <textarea class="wrig-product-brief" placeholder="<?php echo esc_attr__('e.g. mobile, laptop...', 'writegen' ); ?>"></textarea>
              </div>
           </div>
        </div>

        <div class="wrig-sidebar-input-wrapper mb-25">
           <div class="wrig-container">
              <div class="wrig-row">
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Language', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Select your preferred input and output languages.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-language">
                          <?php
                              foreach ($wrig_language_options as $value => $label) {
                              ?>
                              <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                              <?php
                             }
                           ?>    
                          </select>
                       </div>
                    </div>
                 </div>
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Tone', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Specify the desired tone of voice for the outputs.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-tone">
                           <?php
                                foreach ($wrig_tone_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label) ?></option>
                                 <?php
                             }
                           ?>
                          </select>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <div class="wrig-sidebar-input-wrapper mb-35">
           <div class="wrig-container">
              <div class="wrig-row">
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Writing Style', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Indicate your preferred writing style for Writegen.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-writing-style">
                          <?php
                              
                                foreach ($wrig_writing_style_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                                 <?php
                             }
                           ?>
                          </select>
                       </div>
                    </div>
                 </div>
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Max Results', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Maximum title you want to generate.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-quantity-box">
                          <div class="wrig-quantity">
                             <span class="wrig-quantity-minus">
                                <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M1 1H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                                          
                             </span>
                             <input class="wrig-quantity-input wrig-product-max-result" type="text" value="2">
                             <span class="wrig-quantity-plus">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <button class="wrig-btn-big wrig-product-title-generate w-full mb-35" type="button">
        <?php echo esc_html__('Generate Product Title', 'writegen' ); ?>
           <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
           </svg>
        </button>

        <div class="wrig-analysis-wrapper wrig-product-title-item-show">
           <!-- item show -->
           
        </div>
     </div>

     <!-- content start -->
     <div class="wrig-sidebar-content wrig-select step">
        <div class="wrig-sidebar-inpur-wrapper mb-30">
        <div class="wrig-sidebar-input">
           <div class="wrig-sidebar-input-title">
              <label><?php echo esc_html__('Product Title', 'writegen' ); ?></label>
              <div class="wrig-tooltip-wrapper">
                 <span>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                 </span>
                 <div class="wrig-tooltip-content">
                    <p><?php echo esc_html__('Enter the product title of your product description.', 'writegen' ); ?></p>
                 </div>
           </div>
        </div>
        <div class="wrig-input-box">
           <input type="text" name="wrig_product_title" placeholder="<?php echo esc_html__('Enter Your product title here', 'writegen' ); ?>" class="wrig-product-long-title">
        </div>
     </div>
           <div class="wrig-sidebar-input">
              <div class="wrig-sidebar-input-title">
                 <label><?php echo esc_html__('Context (Optional)', 'writegen' ); ?></label>
                 <div class="wrig-tooltip-wrapper">
                    <span>
                       <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                    </span>
                    <div class="wrig-tooltip-content">
                       <p><?php echo esc_html__('Provide the context of your product.', 'writegen' ); ?></p>
                    </div>
              </div>
              </div>
              <div class="wrig-input-box">
                 <textarea class="wrig-product-long-context" placeholder="<?php echo esc_attr__('Enter a brief description or the keywords for this product, seperated by commas', 'writegen' ); ?>"></textarea>
              </div>
           </div>
        </div>

        <div class="wrig-sidebar-input-wrapper mb-25">
           <div class="wrig-container">
              <div class="wrig-row">
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Language', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Select your preferred input and output languages.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-des-language">
                          <?php
                              foreach ($wrig_language_options as $value => $label) {
                              ?>
                              <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                              <?php
                             }
                           ?> 
                          </select>
                       </div>
                    </div>
                 </div>
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Tone', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Specify the desired tone of voice for the outputs.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-des-tone">
                          <?php
                                foreach ($wrig_tone_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label) ?></option>
                                 <?php
                             }
                           ?>
                          </select>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <div class="wrig-sidebar-input-wrapper mb-35">
           <div class="wrig-container">
              <div class="wrig-row">
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Writing Style', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Indicate your preferred writing style for Writegen.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-des-w-style">
                          <?php
                                foreach ($wrig_writing_style_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                                 <?php
                             }
                           ?>
                          </select>
                       </div>
                    </div>
                 </div>
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Content Length', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Maximum content you want to generate.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-quantity-box">
                          <div class="wrig-quantity-2">
                             <span class="wrig-quantity-minus-2">
                                <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M0 0L3.29289 3.29289C3.68342 3.68342 4.31658 3.68342 4.70711 3.29289L8 0" fill="currentColor"/>
                                </svg>                                                        
                             </span>
                             <input class="wrig-quantity-input-2 wrig-product-long-length" type="text" value="400">
                             <span class="wrig-quantity-plus-2">
                                <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 4.19995L4.70711 0.907057C4.31658 0.516533 3.68342 0.516534 3.29289 0.907058L0 4.19995" fill="currentColor"/>
                                </svg>
                             </span>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>


        <button class="wrig-btn-big w-full mb-35 wrig-generate-long-des-btn" type="button">
        <?php echo esc_html__('Generate Long Description', 'writegen' ); ?>
           <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
           </svg>
        </button>
     </div>

     <!-- content start -->
     <div class="wrig-sidebar-content wrig-select step">
        <div class="wrig-sidebar-inpur-wrapper mb-30">
           <div class="wrig-sidebar-input">
           <div class="wrig-sidebar-input-title">
              <label><?php echo esc_html__('Product Title', 'writegen' ); ?></label>
              <div class="wrig-tooltip-wrapper">
                 <span>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                 </span>
                 <div class="wrig-tooltip-content">
                    <p><?php echo esc_html__('Enter the title of your product.', 'writegen' ); ?></p>
                 </div>
           </div>
           </div>
           <div class="wrig-input-box">
              <input type="text" name="wrig_product_title" placeholder="<?php echo esc_html__('Enter Your product title here', 'writegen' ); ?>" class="wrig-product-short-title">
           </div>
        </div>
     
           <div class="wrig-sidebar-input">
              <div class="wrig-sidebar-input-title">
                 <label><?php echo esc_html__('Context (Optional)', 'writegen' ); ?></label>
                 <div class="wrig-tooltip-wrapper">
                    <span>
                       <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                    </span>
                    <div class="wrig-tooltip-content">
                       <p><?php echo esc_html__('Provide the context of your product.', 'writegen' ); ?></p>
                    </div>
              </div>
              </div>
              <div class="wrig-input-box">
                 <textarea class="wrig-product-short-context" placeholder="<?php echo esc_attr__('Enter a brief description or the keywords for this product, seperated by commas', 'writegen' ); ?>"></textarea>
              </div>
           </div>
        </div>

        <div class="wrig-sidebar-input-wrapper mb-25">
           <div class="wrig-container">
              <div class="wrig-row">
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Language', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Select your preferred input and output languages.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-short-language">
                          <?php
                              foreach ($wrig_language_options as $value => $label) {
                              ?>
                              <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                              <?php
                             }
                           ?> 
                          </select>
                       </div>
                    </div>
                 </div>
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Tone', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Specify the desired tone of voice for the outputs.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                          <select class="wrig-product-short-tone">
                          <?php
                                include(plugin_dir_path(dirname(__FILE__)) . '/Helper/wrig-writing-tone-options.php');
                                foreach ($wrig_tone_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label) ?></option>
                                 <?php
                             }
                           ?>
                          </select>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <div class="wrig-sidebar-input-wrapper mb-35">
           <div class="wrig-container">
              <div class="wrig-row">
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Writing Style', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Indicate your preferred writing style for Writegen.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-input-box">
                       <select class="wrig-product-short-w-style">
                           <?php
                                foreach ($wrig_writing_style_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                                 <?php
                             }
                           ?>
                       </select>
                       </div>
                    </div>
                 </div>
                 <div class="wrig-col-6">
                    <div class="wrig-sidebar-input">
                       <div class="wrig-sidebar-input-title">
                          <label><?php echo esc_html__('Min Length', 'writegen' ); ?></label>
                          <div class="wrig-tooltip-wrapper">
                             <span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                             <div class="wrig-tooltip-content">
                                <p><?php echo esc_html__('Minimum content you want to generate.', 'writegen' ); ?></p>
                             </div>
                       </div>
                       </div>
                       <div class="wrig-quantity-box">
                          <div class="wrig-quantity">
                             <span class="wrig-quantity-minus">
                                <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M1 1H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                                          
                             </span>
                             <input class="wrig-quantity-input wrig-product-short-length" type="text" value="150">
                             <span class="wrig-quantity-plus">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                             </span>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <button class="wrig-btn-big w-full mb-35 wrig-generate-short-des-btn" type="button">
        <?php echo esc_html__('Generate Short Description', 'writegen' ); ?>
           <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
           </svg>
        </button>

     
     </div>

  </div>

</div>