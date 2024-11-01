<?php
/**
 * Dashboard Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wrig dashboard area start -->
<div class="writegen wrig-dashboard-area tabs-box">
   <div class="wrig-dashboard-inner">
      <div class="wrig-dashboard-topbar">
         <div class="wrig-logo">
            <div class="wrig-logo-inner">
               <img wrig-data-width="150px" src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/logo/logo.svg' ); ?>" alt="<?php esc_attr__( 'wrig-logo', 'writegen' ); ?>">
               <span class="wrig-logo-version"><?php esc_html__( 'v1.0.0', 'writegen' ); ?></span>
            </div>
         </div>

         <div class="wrig-tab-wrapper wrig-d-sm-flex wrig-justify-content-between">
            <div class="wrig-tab tab-buttons">
               <button class="wrig-tab-btn tab-btn active-btn" data-tab="#aiWidget" ><?php echo esc_html__('AI widget','writegen'); ?></button>
               <button class="wrig-tab-btn tab-btn" data-tab="#settings"><?php echo esc_html__('Settings','writegen'); ?></button>
               <button class="wrig-tab-btn tab-btn" data-tab="#help"><?php echo esc_html__('Help / Resourcest','writegen'); ?></button>
            </div>
         </div>
      </div>
      <div class="wrig-dashboard-main-content">
         <div class="wrig-container wrig-container-full">
            <div class="tabs-content">
               <div class="tab active-tab" id="aiWidget">
                  <div class="wrig-widget-wrapper">
                     <h3 class="wrig-widget-sec-title"><?php echo esc_html__('Write Using Templates','writegen'); ?></h3> 
                     <div class="wrig-row wrig-gx-20">
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/templates/blog-wizard.svg' ); ?>" alt="<?php esc_attr__( 'blog-wizard', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Blog Widget','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Enhance blog article for SERP success — from keywords to ranking content.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_blog_widget' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-blog-widget" <?php echo esc_attr( ( get_option( 'wrig_blog_widget' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/templates/woocommerce-wizard.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-wizard', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('WooCommerce Widget','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Acquire SEO-optimized, conversion-friendly content for WooCommerce Product.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_woocommerce_widget' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-woocommerce-widget" <?php echo esc_attr( ( get_option( 'wrig_woocommerce_widget' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/templates/plugin-mode.svg' ); ?>" alt="<?php esc_attr__( 'plugin-mode', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('WriteGen Mode','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Create anything you desire using Writegen Mode assistance.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_writegen_mode' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-writegen-mode" <?php echo esc_attr( ( get_option( 'wrig_writegen_mode' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/widgets/related-keywords.svg' ); ?>" alt="<?php esc_attr__( 'related-keywords', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Blog Title','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft SEO-friendly titles effortlessly with our title generator tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_blog_title' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-blog-title" <?php echo esc_attr( ( get_option( 'wrig_blog_title' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-content.svg' ); ?>" alt="<?php esc_attr__( 'blog-content', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Blog Content','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly create comprehensive and high-quality content with our content generation tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_blog_content' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-blog-content" <?php echo esc_attr( ( get_option( 'wrig_blog_content' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-outline.svg' ); ?>" alt="<?php esc_attr__( 'blog-outline', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Blog Outline','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly create outlines for your content with our outline generation feature.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_blog_outline' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-blog-outline" <?php echo esc_attr( ( get_option( 'wrig_blog_outline' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-tags-generate.svg' ); ?>" alt="<?php esc_attr__( 'blog-tags-generate', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Blog Tags Generate','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly create trending blog tags with our tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_blog_tags' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-blog-tags" <?php echo esc_attr( ( get_option( 'wrig_blog_tags' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/rewrite-content.svg' ); ?>" alt="<?php esc_attr__( 'rewrite-content', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Rewrite Content','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly enhance and refresh your content with our rewriting tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_rewrite_content' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-rewrite-content" <?php echo esc_attr( ( get_option( 'wrig_rewrite_content' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/brief-generate.svg' ); ?>" alt="<?php esc_attr__( 'brief-generate', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Brief Generate','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly generate user-friendly project briefs with our specialized brief generation tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_brief_generate' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-brief-generate" <?php echo esc_attr( ( get_option( 'wrig_brief_generate' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/paragraph-compression.svg' ); ?>" alt="<?php esc_attr__( 'paragraph-compression', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Paragraph Compression','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Simplify paragraphs while retaining key content with our paragraph compression tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_paragraph_compression' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-paragraph-compression" <?php echo esc_attr( ( get_option( 'wrig_paragraph_compression' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/related-keywords.svg' ); ?>" alt="<?php esc_attr__( 'related-keywords', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Related Keywords','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Easily find related keywords with our smart tool for better content.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_related_keywords' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-related-keyword" <?php echo esc_attr( ( get_option( 'wrig_related_keywords' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/find-question.svg' ); ?>" alt="<?php esc_attr__( 'find-question', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Find Question','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Seamlessly discover questions within content using our Find Question feature.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_find_question' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-fing-question" <?php echo esc_attr( ( get_option( 'wrig_find_question' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/short-strong.svg' ); ?>" alt="<?php esc_attr__( 'short-strong', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Short Story','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft concise and engaging short stories with impactful narratives.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_short_story' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-short-story" <?php echo esc_attr( ( get_option( 'wrig_short_story' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-product-title.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-product-title', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Woocommerce Product Title','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft catchy WooCommerce product titles for higher visibility and engagement.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_woocommerce_product_title' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-woocommerce-product-title" <?php echo esc_attr( ( get_option( 'wrig_woocommerce_product_title' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-short-desc.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-short-desc', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Woocommerce Short Description','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Compose succinct and compelling short descriptions for your WooCommerce products.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_woocommerce_short_desc' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>     
                                    <input type="checkbox" value="on" class="wrig-woocommerce-short-desc" <?php echo esc_attr( ( get_option( 'wrig_woocommerce_short_desc' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-col-xxl-4 wrig-col-lg-6">
                           <!-- card -->
                           <div class="wrig-widget-card-2 wrig-d-flex wrig-align-items-center">
                              <div class="wrig-widget-card-layer-2"></div>
                              <div class="wrig-widget-card-left wrig-d-sm-flex wrig-align-items-start">
                                 <div class="wrig-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-long-desc.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-long-desc', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrig-widget-content-2">
                                    <h3 class="wrig-widget-title-2"><?php echo esc_html__('Woocommerce Long Description','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft detailed and engaging long product descriptions for your WooCommerce offerings.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrig-widget-card-right">
                                 <div class="wrig-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrig_woocommerce_long_desc' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrig-woocommerce-long-desc" <?php echo esc_attr( ( get_option( 'wrig_woocommerce_long_desc' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrig-settings-api-save">
                        <button class="wrig-settings-api-save-btn wrig-settings-widget-save-btn">
                           <?php wp_nonce_field('wrig-save-settings-nonce', 'wrig-save-settings-nonce'); ?>
                           <?php echo esc_html__('Save Settings','writegen'); ?>
                           <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13 1L4.75 9L1 5.36364" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           <div class="wrig-save-loader"></div>
                        </button>
                        <div class="wrig-toast-container" id="wrig-widget-toast-container"></div>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="tab" id="settings">
                  <div class="wrig-settings-wrapper">
                     <h3 class="wrig-widget-sec-title"><?php echo esc_html__('Settings','writegen'); ?></h3> 
                     <div class="wrig-settings-api">
                        <div class="wrig-settings-api-input">
                           <label><?php echo esc_html__('OpenAI API key','writegen'); ?></label>
                           <input type="text" class="wrig-openapi-key" placeholder="<?php echo esc_attr__('sk-...xxxzzzJDmbnnnGEoooxxxx','writegen'); ?>" value="<?php echo esc_attr(get_option('wrig_open_api_key'))?>">
                        </div>
                        <div class="wrig-settings-api-btns wrig-d-flex wrig-flex-wrap">
                           <a href="https://platform.openai.com/account/api-keys">
                              <button type="button" class="wrig-api-btn is-violet"><?php echo esc_html__('Generate API key','writegen'); ?></button>
                           </a>
                           <a href="https://platform.openai.com/account/usage">
                              <button type="button" class="wrig-api-btn is-pink"><?php echo esc_html__('Usage details','writegen'); ?></button>
                           </a>
                        </div>
                     </div>
                     <div class="wrig-settings-api-save">
                        <?php wp_nonce_field('wrig-save-settings-nonce', 'wrig-save-settings-nonce'); ?>
                        <!-- Other form fields -->
                        <button class="wrig-settings-api-save-btn wrig-save-setting-btn">
                           <?php echo esc_html__('Save Settings', 'writegen'); ?>
                           <!-- Button content -->
                        </button>
                     </div>
                     <div class="wrig-toast-container" id="wrig-toast-container"></div>
                  </div>
               </div>
               <div class="tab" id="help">
                  <div class="wrig-help">
                     <!-- intro area start -->
                     <div class="wrig-intro-wrapper mb-30">
                        <div class="wrig-intro-banner wrig-w-img">
                           <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/banner/banner-1.jpg' ); ?>" alt="banner-1">
                        </div>
                        <div class="wrig-container wrig-container-2">
                           <div class="wrig-row">
                              <div class="wrig-col-lg-6">
                                    <div class="wrig-intro-item wrig-d-sm-flex">
                                       <div class="wrig-intro-icon">
                                          <span>
                                                <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/intro/docs.svg' ); ?>" alt="docs">
                                          </span>
                                       </div>
                                       <div class="wrig-intro-content">
                                          <h4 class="wrig-intro-title"><?php echo esc_html__('Documentation','writegen'); ?></h4>
                                          <p><?php echo esc_html__('We have created full-proof documentation for you. It will help you to understand how our plugin works.','writegen'); ?></p>
      
                                          <div class="wrig-intro-btn">
                                                <a href="https://help.themepure.net/writegen" class="wrig-btn"><?php echo esc_html__('Get Now','writegen'); ?></a>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                              <div class="wrig-col-lg-6">
                                    <div class="wrig-intro-item wrig-d-sm-flex">
                                       <div class="wrig-intro-icon">
                                          <span>
                                                <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/intro/support.svg' ); ?>" alt="">
                                          </span>
                                       </div>
                                       <div class="wrig-intro-content">
                                          <h4 class="wrig-intro-title"><?php echo esc_html__('Need Help?','writegen'); ?></h4>
                                          <p><?php echo esc_html__('Please do not hesitate to contact us if you require assistance or want a free store set-up. We will assist you','writegen'); ?></p>
      
                                          <div class="wrig-intro-btn">
                                                <a href="https://help.themepure.net/" class="wrig-btn"><?php echo esc_html__('Get Support','writegen'); ?></a>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                              <div class="wrig-col-xl-12">
                                    <div class="wrig-intro-item wrig-intro-item-big">
                                       <div class="wrig-row">
                                          <div class="wrig-col-lg-6">
                                                <div class="wrig-intro-item-inner wrig-d-sm-flex">
                                                   <div class="wrig-intro-icon">
                                                      <span>
                                                            <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/intro/feature.svg' ); ?>" alt="">
                                                      </span>
                                                   </div>
                                                   <div class="wrig-intro-content">
                                                      <h4 class="wrig-intro-title"><?php echo esc_html__('Missing any Feature?','writegen'); ?></h4>
                                                      <p><?php echo esc_html__('We have created full-proof documentation for you. It will help you to understand how our plugin works.','writegen'); ?></p>
                  
                                                      <div class="wrig-intro-btn">
                                                            <a href="https://help.themepure.net/" class="wrig-btn"><?php echo esc_html__('Request Feature','writegen'); ?></a>
                                                      </div>
                                                   </div>
                                                </div>
                                          </div>
                                          <div class="wrig-col-lg-6">
                                                <div class="wrig-intro-thumb">
                                                   <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/features/feature.png' ); ?>" alt="">
                                                </div>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- wrig dashboard area end -->
