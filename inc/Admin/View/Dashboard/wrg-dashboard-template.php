<?php
/**
 * Dashboard Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wrg dashboard area start -->
<div class="writegen wrg-dashboard-area tabs-box">
   <div class="wrg-dashboard-inner">
      <div class="wrg-dashboard-topbar">
         <div class="wrg-logo">
            <div class="wrg-logo-inner">
               <img wrg-data-width="150px" src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/logo/logo.svg' ); ?>" alt="<?php esc_attr__( 'wrg-logo', 'writegen' ); ?>">
               <span class="wrg-logo-version"><?php esc_html__( 'v1.0.0', 'writegen' ); ?></span>
            </div>
         </div>

         <div class="wrg-tab-wrapper wrg-d-sm-flex wrg-justify-content-between">
            <div class="wrg-tab tab-buttons">
               <button class="wrg-tab-btn tab-btn active-btn" data-tab="#aiWidget" ><?php echo esc_html__('AI widget','writegen'); ?></button>
               <button class="wrg-tab-btn tab-btn" data-tab="#settings"><?php echo esc_html__('Settings','writegen'); ?></button>
               <button class="wrg-tab-btn tab-btn" data-tab="#help"><?php echo esc_html__('Help / Resourcest','writegen'); ?></button>
            </div>
         </div>
      </div>
      <div class="wrg-dashboard-main-content">
         <div class="wrg-container wrg-container-full">
            <div class="tabs-content">
               <div class="tab active-tab" id="aiWidget">
                  <div class="wrg-widget-wrapper">
                     <h3 class="wrg-widget-sec-title"><?php echo esc_html__('Write Using Templates','writegen'); ?></h3> 
                     <div class="wrg-row wrg-gx-20">
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/templates/blog-wizard.svg' ); ?>" alt="<?php esc_attr__( 'blog-wizard', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Blog Widget','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Enhance blog article for SERP success — from keywords to ranking content.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_blog_widget' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-blog-widget" <?php echo esc_attr( ( get_option( 'wrg_blog_widget' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/templates/woocommerce-wizard.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-wizard', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('WooCommerce Widget','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Acquire SEO-optimized, conversion-friendly content for WooCommerce Product.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_woocommerce_widget' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-woocommerce-widget" <?php echo esc_attr( ( get_option( 'wrg_woocommerce_widget' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/templates/plugin-mode.svg' ); ?>" alt="<?php esc_attr__( 'plugin-mode', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('WriteGen Mode','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Create anything you desire using Writegen Mode assistance.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_writegen_mode' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-writegen-mode" <?php echo esc_attr( ( get_option( 'wrg_writegen_mode' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/widgets/related-keywords.svg' ); ?>" alt="<?php esc_attr__( 'related-keywords', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Blog Title','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft SEO-friendly titles effortlessly with our title generator tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_blog_title' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-blog-title" <?php echo esc_attr( ( get_option( 'wrg_blog_title' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-content.svg' ); ?>" alt="<?php esc_attr__( 'blog-content', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Blog Content','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly create comprehensive and high-quality content with our content generation tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_blog_content' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-blog-content" <?php echo esc_attr( ( get_option( 'wrg_blog_content' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-outline.svg' ); ?>" alt="<?php esc_attr__( 'blog-outline', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Blog Outline','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly create outlines for your content with our outline generation feature.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_blog_outline' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-blog-outline" <?php echo esc_attr( ( get_option( 'wrg_blog_outline' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-tags-generate.svg' ); ?>" alt="<?php esc_attr__( 'blog-tags-generate', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Blog Tags Generate','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly create trending blog tags with our tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_blog_tags' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-blog-tags" <?php echo esc_attr( ( get_option( 'wrg_blog_tags' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/rewrite-content.svg' ); ?>" alt="<?php esc_attr__( 'rewrite-content', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Rewrite Content','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly enhance and refresh your content with our rewriting tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_rewrite_content' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-rewrite-content" <?php echo esc_attr( ( get_option( 'wrg_rewrite_content' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/brief-generate.svg' ); ?>" alt="<?php esc_attr__( 'brief-generate', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Brief Generate','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Effortlessly generate user-friendly project briefs with our specialized brief generation tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_brief_generate' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-brief-generate" <?php echo esc_attr( ( get_option( 'wrg_brief_generate' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/paragraph-compression.svg' ); ?>" alt="<?php esc_attr__( 'paragraph-compression', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Paragraph Compression','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Simplify paragraphs while retaining key content with our paragraph compression tool.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_paragraph_compression' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-paragraph-compression" <?php echo esc_attr( ( get_option( 'wrg_paragraph_compression' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/related-keywords.svg' ); ?>" alt="<?php esc_attr__( 'related-keywords', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Related Keywords','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Easily find related keywords with our smart tool for better content.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_related_keywords' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-related-keyword" <?php echo esc_attr( ( get_option( 'wrg_related_keywords' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/find-question.svg' ); ?>" alt="<?php esc_attr__( 'find-question', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Find Question','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Seamlessly discover questions within content using our Find Question feature.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_find_question' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-fing-question" <?php echo esc_attr( ( get_option( 'wrg_find_question' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/short-strong.svg' ); ?>" alt="<?php esc_attr__( 'short-strong', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Short Story','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft concise and engaging short stories with impactful narratives.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_short_story' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-short-story" <?php echo esc_attr( ( get_option( 'wrg_short_story' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-product-title.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-product-title', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Woocommerce Product Title','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft catchy WooCommerce product titles for higher visibility and engagement.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_woocommerce_product_title' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-woocommerce-product-title" <?php echo esc_attr( ( get_option( 'wrg_woocommerce_product_title' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-short-desc.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-short-desc', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Woocommerce Short Description','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Compose succinct and compelling short descriptions for your WooCommerce products.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_woocommerce_short_desc' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>     
                                    <input type="checkbox" value="on" class="wrg-woocommerce-short-desc" <?php echo esc_attr( ( get_option( 'wrg_woocommerce_short_desc' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-col-xxl-4 wrg-col-lg-6">
                           <!-- card -->
                           <div class="wrg-widget-card-2 wrg-d-flex wrg-align-items-center">
                              <div class="wrg-widget-card-layer-2"></div>
                              <div class="wrg-widget-card-left wrg-d-sm-flex wrg-align-items-start">
                                 <div class="wrg-widget-icon-2">
                                    <span>
                                       <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-long-desc.svg' ); ?>" alt="<?php esc_attr__( 'woocommerce-long-desc', 'writegen' ); ?>">
                                    </span>
                                 </div>
                                 <div class="wrg-widget-content-2">
                                    <h3 class="wrg-widget-title-2"><?php echo esc_html__('Woocommerce Long Description','writegen'); ?></h3>
                                    <p><?php echo esc_html__('Craft detailed and engaging long product descriptions for your WooCommerce offerings.','writegen'); ?></p>
                                 </div>
                              </div>
                              <div class="wrg-widget-card-right">
                                 <div class="wrg-toggle-btn">
                                    <label>
                                    <span <?php echo esc_attr( get_option( 'wrg_woocommerce_long_desc' ) ) === 'on' ? 'class="is-checked"' : '' ; ?>></span>
                                    </label>
                                    <input type="checkbox" value="on" class="wrg-woocommerce-long-desc" <?php echo esc_attr( ( get_option( 'wrg_woocommerce_long_desc' ) === 'on' ) ? 'checked' : '' ); ?>>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrg-settings-api-save">
                        <button class="wrg-settings-api-save-btn wrg-settings-widget-save-btn">
                        <?php wp_nonce_field('wrg-save-settings-nonce', 'wrg-save-settings-nonce'); ?>
                        <?php echo esc_html__('Save Settings','writegen'); ?>
                           <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13 1L4.75 9L1 5.36364" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                              <div class="wrg-save-loader"></div>
                        </button>
                        <div class="wrg-toast-container" id="wrg-widget-toast-container"></div>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="tab" id="settings">
                  <div class="wrg-settings-wrapper">
                     <h3 class="wrg-widget-sec-title"><?php echo esc_html__('Settings','writegen'); ?></h3> 

                     <div class="wrg-settings-api">
                        <div class="wrg-settings-api-input">
                           <label><?php echo esc_html__('OpenAI API key','writegen'); ?></label>
                           <input type="text" class="wrg-openapi-key" placeholder="<?php echo esc_attr__('sk-...xxxzzzJDmbnnnGEoooxxxx','writegen'); ?>" value="<?php echo esc_attr(get_option('wrg_open_api_key'))?>">
                        </div>
                        <div class="wrg-settings-api-btns wrg-d-flex wrg-flex-wrap">
                           <a href="https://platform.openai.com/account/api-keys">
                              <button type="button" class="wrg-api-btn is-violet"><?php echo esc_html__('Generate API key','writegen'); ?></button>
                           </a>
                           <a href="https://platform.openai.com/account/usage">
                              <button type="button" class="wrg-api-btn is-pink"><?php echo esc_html__('Usage details','writegen'); ?></button>
                           </a>
                        </div>
                     </div>


                     <div class="wrg-settings-api-save">
                       
                        <?php wp_nonce_field('wrg-save-settings-nonce', 'wrg-save-settings-nonce'); ?>
                        
                        <!-- Other form fields -->
                        <button class="wrg-settings-api-save-btn wrg-save-setting-btn">
                           <?php echo esc_html__('Save Settings', 'writegen'); ?>
                           <!-- Button content -->
                        </button>
                     </div>

                     <div class="wrg-toast-container" id="wrg-toast-container"></div>
                  </div>
               </div>
               <div class="tab" id="help">
                  <div class="wrg-help">
                     <!-- intro area start -->
                        <div class="wrg-intro-wrapper mb-30">
                           <div class="wrg-intro-banner wrg-w-img">
                              <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/banner/banner-1.jpg' ); ?>" alt="banner-1">
                           </div>
      
                           <div class="wrg-container wrg-container-2">
                              <div class="wrg-row">
                                 <div class="wrg-col-lg-6">
                                       <div class="wrg-intro-item wrg-d-sm-flex">
                                          <div class="wrg-intro-icon">
                                             <span>
                                                   <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/intro/docs.svg' ); ?>" alt="docs">
                                             </span>
                                          </div>
                                          <div class="wrg-intro-content">
                                             <h4 class="wrg-intro-title"><?php echo esc_html__('Documentation','writegen'); ?></h4>
                                             <p><?php echo esc_html__('We have created full-proof documentation for you. It will help you to understand how our plugin works.','writegen'); ?></p>
         
                                             <div class="wrg-intro-btn">
                                                   <a href="https://help.themepure.net/writegen" class="wrg-btn"><?php echo esc_html__('Get Now','writegen'); ?></a>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="wrg-col-lg-6">
                                       <div class="wrg-intro-item wrg-d-sm-flex">
                                          <div class="wrg-intro-icon">
                                             <span>
                                                   <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/intro/support.svg' ); ?>" alt="">
                                             </span>
                                          </div>
                                          <div class="wrg-intro-content">
                                             <h4 class="wrg-intro-title"><?php echo esc_html__('Need Help?','writegen'); ?></h4>
                                             <p><?php echo esc_html__('Please do not hesitate to contact us if you require assistance or want a free store set-up. We will assist you','writegen'); ?></p>
         
                                             <div class="wrg-intro-btn">
                                                   <a href="https://help.themepure.net/" class="wrg-btn"><?php echo esc_html__('Get Support','writegen'); ?></a>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="wrg-col-xl-12">
                                       <div class="wrg-intro-item wrg-intro-item-big">
                                          <div class="wrg-row">
                                             <div class="wrg-col-lg-6">
                                                   <div class="wrg-intro-item-inner wrg-d-sm-flex">
                                                      <div class="wrg-intro-icon">
                                                         <span>
                                                               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'/assets/admin/img/icons/intro/feature.svg' ); ?>" alt="">
                                                         </span>
                                                      </div>
                                                      <div class="wrg-intro-content">
                                                         <h4 class="wrg-intro-title"><?php echo esc_html__('Missing any Feature?','writegen'); ?></h4>
                                                         <p><?php echo esc_html__('We have created full-proof documentation for you. It will help you to understand how our plugin works.','writegen'); ?></p>
                     
                                                         <div class="wrg-intro-btn">
                                                               <a href="https://help.themepure.net/" class="wrg-btn"><?php echo esc_html__('Request Feature','writegen'); ?></a>
                                                         </div>
                                                      </div>
                                                   </div>
                                             </div>
                                             <div class="wrg-col-lg-6">
                                                   <div class="wrg-intro-thumb">
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
<!-- wrg dashboard area end -->
