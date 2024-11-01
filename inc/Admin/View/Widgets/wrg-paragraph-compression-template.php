<?php
/**
 * Template HTML for the WriteGen Sidebar
 * Includes sidebar blog paragraph compression widget.
 * Also includes the WriteGen Helper file using the correct path.
 * This file provides essential functions and utilities for the WriteGen plugin.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include(plugin_dir_path(dirname(__FILE__)) . '/Helper/wrg-helper.php');
?>
<div class="wrg-sidebar-content wrg-paragraph-compression-canvas wrg-select">
<div class="wrg-sidebar-inpur-wrapper mb-30">
  <div class="wrg-sidebar-input">
  <div class="wrg-sidebar-input-title">
     <label><?php echo esc_html__('Select template', 'writegen'); ?></label>
     <div class="wrg-tooltip-wrapper">
        <span>
           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
           </svg>
        </span>
        <div class="wrg-tooltip-content">
           <p><?php echo esc_html__('Choose a template based on your basic requirements.', 'writegen'); ?></p>
        </div>
  </div>
  </div>
  <div class="wrg-input-box wrg-input-select-big">
     <select id="wrg-paragraph-compression-widget-selector">
        <option value="wrg-woocommerce-widget-canvas"><?php echo esc_html__('WooCommerce Widget', 'writegen'); ?></option>
        <option value="wrg-writegen-mode-canvas"><?php echo esc_html__('WriteGen mode', 'writegen'); ?></option>
        <option value="wrg-blog-title-canvas"><?php echo esc_html__('Blog Title', 'writegen'); ?></option>
        <option value="wrg-blog-content-canvas"><?php echo esc_html__('Blog Content', 'writegen'); ?></option>
        <option value="wrg-blog-outlines-canvas"><?php echo esc_html__('Blog Outlines', 'writegen'); ?></option>
        <option value="wrg-blog-tags-canvas"><?php echo esc_html__('Blog Tags', 'writegen'); ?></option>
        <option value="wrg-blogrewrite-canvas"><?php echo esc_html__('Blog Rewrite', 'writegen'); ?></option>
        <option value="wrg-blog-brief-canvas"><?php echo esc_html__('Blog Brief', 'writegen'); ?></option>
        <option value="wrg-paragraph-compression-canvas" selected><?php echo esc_html__('Paragraph Compression', 'writegen'); ?></option>
        <option value="wrg-related-tags-canvas"><?php echo esc_html__('Related Tags', 'writegen'); ?> </option>
        <option value="wrg-find-question-canvas"><?php echo esc_html__('Find Question', 'writegen'); ?></option>
        <option value="wrg-short-story-canvas"><?php echo esc_html__('Short Story', 'writegen'); ?></option>
        <option value="wrg-product-title-canvas"><?php echo esc_html__('Product Title', 'writegen'); ?></option>
        <option value="wrg-product-long-desc-canvas"><?php echo esc_html__('Product Long Description', 'writegen'); ?></option>
        <option value="wrg-product-short-desc-canvas"><?php echo esc_html__('Product Short Description', 'writegen'); ?></option>
     </select>
  </div>
</div>
     <div class="wrg-sidebar-input">
        <div class="wrg-sidebar-input-title">
           <label><?php echo esc_html__('Your Content', 'writegen'); ?></label>
           <div class="wrg-tooltip-wrapper">
              <span>
                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
              </span>
              <div class="wrg-tooltip-content">
                 <p><?php echo esc_html__('Enter the content of your paragraph compression.', 'writegen'); ?></p>
              </div>
        </div>
        </div>
        <div class="wrg-input-box">
           <textarea class="wrg-paragraph-compression-content" placeholder="<?php echo esc_attr__('e.g. bean coffee, best coffee mak...', 'writegen'); ?>"></textarea>
        </div>
     </div>
  </div>

  <div class="wrg-sidebar-input-wrapper mb-25">
     <div class="wrg-container">
        <div class="wrg-row">
           <div class="wrg-col-6">
              <div class="wrg-sidebar-input">
                 <div class="wrg-sidebar-input-title">
                    <label><?php echo esc_html__('Language', 'writegen'); ?></label>
                    <div class="wrg-tooltip-wrapper">
                       <span>
                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                       </span>
                       <div class="wrg-tooltip-content">
                          <p><?php echo esc_html__('Select your preferred input and output languages.', 'writegen'); ?></p>
                       </div>
                    </div>
                 </div>
                 <div class="wrg-input-box">
                    <select class="wrg-paragraph-compression-language">
                    <?php
                        foreach ($wrg_language_options as $value => $label) {
                        ?>
                        <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                        <?php
                        }
                     ?>    
                    </select>
                 </div>
              </div>
           </div>
           <div class="wrg-col-6">
              <div class="wrg-sidebar-input">
                 <div class="wrg-sidebar-input-title">
                    <label><?php echo esc_html__('Tone', 'writegen'); ?></label>
                    <div class="wrg-tooltip-wrapper">
                       <span>
                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                       </span>
                       <div class="wrg-tooltip-content">
                          <p><?php echo esc_html__('Specify the desired tone of voice for the outputs.', 'writegen'); ?></p>
                       </div>
                    </div>
                 </div>
                 <div class="wrg-input-box">
                    <select class="wrg-paragraph-compression-tone">
                    <?php
                     foreach ($wrg_tone_options as $value => $label) {
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
  <div class="wrg-sidebar-input-wrapper mb-35">
     <div class="wrg-container">
        <div class="wrg-row">
           <div class="wrg-col-6">
              <div class="wrg-sidebar-input">
                 <div class="wrg-sidebar-input-title">
                    <label><?php echo esc_html__('Writing Style', 'writegen'); ?></label>
                    <div class="wrg-tooltip-wrapper">
                       <span>
                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                       </span>
                       <div class="wrg-tooltip-content">
                          <p><?php echo esc_html__('Indicate your preferred writing style for Writegen.', 'writegen'); ?></p>
                       </div>
                 </div>
                 </div>
                 <div class="wrg-input-box">
                    <select class="wrg-paragraph-compression-w-style">
                    <?php
                     foreach ($wrg_writing_style_options as $value => $label) {
                        ?>
                        <option value="<?php echo esc_attr($value);?>"><?php echo esc_html($label); ?></option>
                        <?php
                  }
                  ?>
                    </select>
                 </div>
              </div>
           </div>
           <div class="wrg-col-6">
              <div class="wrg-sidebar-input">
                 <div class="wrg-sidebar-input-title">
                    <label><?php echo esc_html__('Compression Ratio', 'writegen'); ?></label>
                    <div class="wrg-tooltip-wrapper">
                       <span>
                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                             <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                       </span>
                       <div class="wrg-tooltip-content">
                          <p><?php echo esc_html__('Maximum content you want to generate.', 'writegen'); ?></p>
                       </div>
                 </div>
                 </div>
                 <div class="wrg-quantity-box">
                    <div class="wrg-quantity-2">
                       <span class="wrg-quantity-minus-2">
                          <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M0 0L3.29289 3.29289C3.68342 3.68342 4.31658 3.68342 4.70711 3.29289L8 0" fill="currentColor"/>
                          </svg>                                                        
                       </span>
                       <input class="wrg-quantity-input-2 wrg-paragraph-compression-ratio" type="text" value="1">
                       <span class="wrg-quantity-plus-2">
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

  <button class="wrg-btn-big wrg-paragraph-compression-btn w-full mb-35" type="button">
  <?php echo esc_html__('Write', 'writegen'); ?>
     <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
     </svg>
  </button>

  <div class="wrg-analysis-wrapper wrg-paragraph-compression-result">
     <!-- item -->
     
  </div>
</div>