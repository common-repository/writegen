<?php
/**
 * Template HTML for the WriteGen Sidebar
 * Includes sidebar blog widget.
 * Also includes the WriteGen Helper file using the correct path.
 * This file provides essential functions and utilities for the WriteGen plugin.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include(plugin_dir_path(dirname(__FILE__)) . '/Helper/wrg-helper.php');

  $wrg_serp_analysis = esc_attr(get_option('wrg_serp_analytics') ?? '');
  ?>
 <div class="wrg-sidebar-main-content wrg-blog-widget-canvas">
      <!-- tab start -->
      <div class="wizard-header">
         <div class="wrg-sidebar-tab-wrapper steps ">
            <div class="wrg-sidebar-tab-btn wizard-step wrg-blog-title active"><?php echo esc_html__('Title', 'writegen'); ?></div>
            <div class="wrg-sidebar-tab-btn wizard-step wrg-blog-meta-description"><?php echo esc_html__('Meta description', 'writegen'); ?></div>
            <div class="wrg-sidebar-tab-btn wizard-step wrg-blog-content"><?php echo esc_html__('Content', 'writegen'); ?></div>
         </div>
         <!-- tab end -->
      </div>
      <div class="wrg-sidebar-content-body wizard-body">
         <!-- content start -->
         <div class="wrg-sidebar-content wrg-select step initial active">
            <div class="wrg-sidebar-inpur-wrapper mb-30">
               <div class="wrg-sidebar-input">
                  <div class="wrg-sidebar-input-title">
                     <label><?php echo esc_html__('Search Keyword', 'writegen'); ?></label>
                     <div class="wrg-tooltip-wrapper">
                        <span>
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                        <div class="wrg-tooltip-content">
                           <p><?php echo esc_html__('Enter the focus keyword or topic of your blog post.', 'writegen'); ?></p>
                        </div>
                  </div>
                  </div>
                  <div class="wrg-input-box">
                     <input type="text" name="wrg_search_keywords" placeholder="<?php echo esc_attr__('e.g. bean coffee, best coffee mak...', 'writegen'); ?>" class="wrg-search-keywords">
                  </div>
               </div>
               <div class="wrg-sidebar-input">
               <div class="wrg-sidebar-input-title">
                  <label><?php echo esc_html__('Context (Optional)', 'writegen'); ?></label>
                  <div class="wrg-tooltip-wrapper">
                     <span>
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </span>
                     <div class="wrg-tooltip-content">
                        <p><?php echo esc_html__('Provide the context of your blog post.', 'writegen'); ?></p>
                     </div>
               </div>
               </div>
               <div class="wrg-input-box">
                  <textarea placeholder="<?php echo esc_attr__('e.g. bean coffee, best coffee mak...', 'writegen'); ?>" class="wrg-context"></textarea>
               </div>
            </div>
            <?php
            if( $wrg_serp_analysis == 'on'){
            ?>
            <div class="wrg-sidebar-input-wrapper mb-25">
            <div class="wrg-container">
               <div class="wrg-row">
                  <div class="wrg-col-6">
                     <div class="wrg-sidebar-input">
                        <div class="wrg-sidebar-input-title">
                           <label><?php echo esc_html__('Location', 'writegen'); ?></label>
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
                        <div class="wrg-input-box ">
                           <select class="wrg-select-analysis-keywords-language">
                              <option value="<?php echo esc_attr(''); ?>"><?php echo esc_html('Global'); ?></option>
                              <option value="<?php echo esc_attr('AU'); ?>"><?php echo esc_html('Australia'); ?></option>
                              <option value="<?php echo esc_attr('CA'); ?>"><?php echo esc_html('Canada'); ?></option>
                              <option value="<?php echo esc_attr('IN'); ?>"><?php echo esc_html('India'); ?></option>
                              <option value="<?php echo esc_attr('NZ'); ?>"><?php echo esc_html('New Zealand'); ?></option>
                              <option value="<?php echo esc_attr('ZA'); ?>"><?php echo esc_html('South Africa'); ?></option>
                              <option value="<?php echo esc_attr('US'); ?>"><?php echo esc_html('United States (USA)'); ?></option>
                              <option value="<?php echo esc_attr('UK'); ?>"><?php echo esc_html('United Kingdom'); ?></option>
                              <option value="<?php echo esc_attr('DE'); ?>"><?php echo esc_html('Germany'); ?></option>
                              <option value="<?php echo esc_attr('PT'); ?>"><?php echo esc_html('Portugal'); ?></option>   
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="wrg-col-6">
                  <div class="wrg-sidebar-input">
                  <div class="wrg-sidebar-input-title">
                     <label><?php echo esc_html__('Max Keywords', 'writegen'); ?></label>
                     <div class="wrg-tooltip-wrapper">
                        <span>
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                        <div class="wrg-tooltip-content">
                           <p><?php echo esc_html__('Maximum keyword you want to generate.', 'writegen'); ?></p>
                        </div>
                  </div>
                  </div>
                  <div class="wrg-quantity-box">
                     <div class="wrg-quantity">
                        <span class="wrg-quantity-minus">
                           <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>                                                          
                        </span>
                        <input class="wrg-quantity-input wrg-analysis-keywords-number" type="text" value="5">
                        <span class="wrg-quantity-plus">
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
            <button class="wrg-btn-big wrg-generate-analysis-keyword w-full mb-35" type="button">
            <?php echo esc_html__('Analysis keywords', 'writegen'); ?>
               <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
            
            <div class="wrg-analysis-wrapper wrg-keyword-analysis-show">
            <!-- item -->
            
            </div>
            <?php
            }
            ?>
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
                           <div class="wrg-input-box ">
                              <select class="wrg-select-language">
                              <?php
                                 foreach ($wrg_language_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></option>
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
                              <select class="wrg-select-tone">
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
                              <select class="wrg-select-writing-style">
                                 <option value="<?php echo esc_attr('formal'); ?>"><?php echo esc_html__('Default', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('formal'); ?>"><?php echo esc_html__('Formal', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('informal'); ?>"><?php echo esc_html__('Informal', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('technical'); ?>"><?php echo esc_html__('Technical', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('creative'); ?>"><?php echo esc_html__('Creative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('professional'); ?>"><?php echo esc_html__('Professional', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('persuasive'); ?>"><?php echo esc_html__('Persuasive', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('narrative'); ?>"><?php echo esc_html__('Narrative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('humorous'); ?>"><?php echo esc_html__('Humorous', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('educational'); ?>"><?php echo esc_html__('Educational', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('scientific'); ?>"><?php echo esc_html__('Scientific', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('expository'); ?>"><?php echo esc_html__('Expository', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('descriptive'); ?>"><?php echo esc_html__('Descriptive', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('analytical'); ?>"><?php echo esc_html__('Analytical', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('comparative'); ?>"><?php echo esc_html__('Comparative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('argumentative'); ?>"><?php echo esc_html__('Argumentative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('instructional'); ?>"><?php echo esc_html__('Instructional', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('editorial'); ?>"><?php echo esc_html__('Editorial', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('review'); ?>"><?php echo esc_html__('Review', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('personal'); ?>"><?php echo esc_html__('Personal', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('reflective'); ?>"><?php echo esc_html__('Reflective', 'writegen'); ?></option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="wrg-col-6">
                        <div class="wrg-sidebar-input">
                           <div class="wrg-sidebar-input-title">
                              <label><?php echo esc_html__('Max Results', 'writegen'); ?></label>
                              <div class="wrg-tooltip-wrapper">
                                 <span>
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                                 <div class="wrg-tooltip-content">
                                    <p><?php echo esc_html__('Maximum title you want to generate.', 'writegen'); ?></p>
                                 </div>
                           </div>
                           </div>
                           <div class="wrg-quantity-box">
                              <div class="wrg-quantity">
                                 <span class="wrg-quantity-minus">
                                    <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 1H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                                          
                                 </span>
                                 <input class="wrg-quantity-input wrg-quantity-title" type="text" value="3">
                                 <span class="wrg-quantity-plus">
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

            <button class="wrg-btn-big wrg-generate-title w-full mb-35" type="button">
            <?php echo esc_html__('Generate Title', 'writegen'); ?>
               <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
            
            <div class="wrg-analysis-wrapper wrg-title-item-show">
            
            </div>
         </div>

         <!-- content start -->
         <div class="wrg-sidebar-content wrg-select step">
            <div class="wrg-sidebar-inpur-wrapper mb-30">
               <div class="wrg-sidebar-input">
                  <div class="wrg-sidebar-input-title">
                     <label><?php echo esc_html__('Title', 'writegen'); ?></label>
                     <div class="wrg-tooltip-wrapper">
                        <span>
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                        <div class="wrg-tooltip-content">
                           <p><?php echo esc_html__('Enter the title of your blog post.', 'writegen'); ?></p>
                        </div>
                  </div>
                  </div>
                  <div class="wrg-input-box">
                     <input type="text" name="wrg_meta_des_title" placeholder="<?php echo esc_attr__('e.g. bean coffee, best coffee mak...', 'writegen'); ?>" class="wrg-meta-des-title">
                  </div>
               </div>
               <div class="wrg-sidebar-input">
                  <div class="wrg-sidebar-input-title">
                     <label><?php echo esc_html__('Focus Keyword', 'writegen'); ?> </label>
                     <div class="wrg-tooltip-wrapper">
                        <span>
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                        <div class="wrg-tooltip-content">
                           <p><?php echo esc_html__('Enter the focus keyword or topic of your blog post.', 'writegen'); ?></p>
                        </div>
                  </div>
                  </div>
                  <div class="wrg-input-box">
                     <input type="text" name="wrg_meta_des_focus_keyword" placeholder="<?php echo esc_attr__('e.g. bean coffee, best coffee mak...', 'writegen'); ?>" class="wrg-meta-des-focus-keyword">
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
                              <select class="wrg-select-language">
                              <?php
                                 foreach ($wrg_language_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></option>
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
                              <select class="wrg-select-tone">
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
                              <select class="wrg-select-writing-style">
                                 <option value="<?php echo esc_attr('formal'); ?>"><?php echo esc_html__('Default', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('formal'); ?>"><?php echo esc_html__('Formal', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('informal'); ?>"><?php echo esc_html__('Informal', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('technical'); ?>"><?php echo esc_html__('Technical', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('creative'); ?>"><?php echo esc_html__('Creative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('professional'); ?>"><?php echo esc_html__('Professional', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('persuasive'); ?>"><?php echo esc_html__('Persuasive', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('narrative'); ?>"><?php echo esc_html__('Narrative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('humorous'); ?>"><?php echo esc_html__('Humorous', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('educational'); ?>"><?php echo esc_html__('Educational', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('scientific'); ?>"><?php echo esc_html__('Scientific', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('expository'); ?>"><?php echo esc_html__('Expository', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('descriptive'); ?>"><?php echo esc_html__('Descriptive', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('analytical'); ?>"><?php echo esc_html__('Analytical', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('comparative'); ?>"><?php echo esc_html__('Comparative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('argumentative'); ?>"><?php echo esc_html__('Argumentative', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('instructional'); ?>"><?php echo esc_html__('Instructional', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('editorial'); ?>"><?php echo esc_html__('Editorial', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('review'); ?>"><?php echo esc_html__('Review', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('personal'); ?>"><?php echo esc_html__('Personal', 'writegen'); ?></option>
                                 <option value="<?php echo esc_attr('reflective'); ?>"><?php echo esc_html__('Reflective', 'writegen'); ?></option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="wrg-col-6">
                        <div class="wrg-sidebar-input">
                           <div class="wrg-sidebar-input-title">
                              <label><?php echo esc_html__('Max Results', 'writegen'); ?></label>
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
                              <div class="wrg-quantity">
                                 <span class="wrg-quantity-minus">
                                    <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 1H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                                          
                                 </span>
                                 <input class="wrg-quantity-input wrg-blog-metadesch-number" type="text" value="3">
                                 <span class="wrg-quantity-plus">
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

            <button class="wrg-btn-big w-full mb-35 wrg-generate-meta-des-btn" type="button">
            <?php echo esc_html__('Generate Meta Description', 'writegen'); ?>
               <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>

            <div class="wrg-analysis-wrapper wrg-meta-description-item-show">
               <!-- item -->
            

            </div>
         </div>

         <!-- content start -->
         <div class="wrg-sidebar-content wrg-select step">
            <div class="wrg-sidebar-inpur-wrapper mb-30">
               <div class="wrg-sidebar-input">
                  <div class="wrg-sidebar-input-title">
                     <label><?php echo esc_html__('Title', 'writegen'); ?></label>
                     <div class="wrg-tooltip-wrapper">
                        <span>
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                        <div class="wrg-tooltip-content">
                           <p><?php echo esc_html__('Enter the title of your blog post.', 'writegen'); ?></p>
                        </div>
                  </div>
                  </div>
                  <div class="wrg-input-box">
                     <input type="text" name="wrg_content_title" placeholder="<?php echo esc_attr__('e.g. bean coffee, best coffee mak...', 'writegen'); ?>" class="wrg-content-title">
                  </div>
               </div>
               <div class="wrg-sidebar-input">
                  <div class="wrg-sidebar-input-title">
                     <label><?php echo esc_html__('Meta Description (Optional)', 'writegen'); ?></label>
                     <div class="wrg-tooltip-wrapper">
                        <span>
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                        <div class="wrg-tooltip-content">
                           <p><?php echo esc_html__('Enter the metadescription of your blog post.', 'writegen'); ?></p>
                        </div>
                  </div>
                  </div>
                  <div class="wrg-input-box">
                     <textarea placeholder="<?php echo esc_attr__('e.g. bean coffee ...', 'writegen'); ?>" class="wrg-content-metades"></textarea>
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
                              <select class="wrg-select-language">
                              <?php
                                 foreach ($wrg_language_options as $value => $label) {
                                 ?>
                                 <option value="<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></option>
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
                              <select class="wrg-select-tone">
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
                              <label><?php echo esc_html__('Writing style', 'writegen'); ?></label>
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
                              <select class="wrg-select-writing-style">
                              <?php
                                 foreach ($wrg_writing_style_options as $value => $label) {
                                    ?>
                                    <option value="<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></option>
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
                              <label><?php echo esc_html__('Min Length', 'writegen'); ?></label>
                              <div class="wrg-tooltip-wrapper">
                                 <span>
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.5 13.5C11.0899 13.5 14 10.5899 14 7C14 3.41015 11.0899 0.5 7.5 0.5C3.91015 0.5 1 3.41015 1 7C1 10.5899 3.91015 13.5 7.5 13.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 9.6V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 4.4001H7.50667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                                 <div class="wrg-tooltip-content">
                                    <p><?php echo esc_html__('Min content you want to generate.', 'writegen'); ?></p>
                                 </div>
                           </div>
                           </div>
                           <div class="wrg-quantity-box">
                              <div class="wrg-quantity">
                                 <span class="wrg-quantity-minus">
                                    <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 1H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                                          
                                 </span>
                                 <input class="wrg-quantity-input wrg-words-length" type="text" value="1000">
                                 <span class="wrg-quantity-plus">
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

            <button class="wrg-btn-big w-full mb-35 wrg-generate-content-btn" type="button">
            <?php echo esc_html__('Generate Content','writegen'); ?>
               <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.66206 2.60047L2.49493 8.13342C2.29982 8.34353 2.11101 8.75738 2.07325 9.0439L1.84038 11.1068C1.75856 11.8518 2.28724 12.3611 3.01731 12.2338L5.04388 11.8836C5.3271 11.8327 5.7236 11.6225 5.91871 11.4061L11.0858 5.87312C11.9795 4.91807 12.3823 3.82931 10.9914 2.4986C9.60682 1.18063 8.55577 1.64542 7.66206 2.60047Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M6.79919 3.52386C7.06982 5.28116 8.47961 6.62461 10.2293 6.80288" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path opacity="0.4" d="M1.20447 14.3158H12.5331" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
         </div>
      </div>
   </div>