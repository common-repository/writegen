<?php
/**
 * Template HTML for the WriteGen Sidebar
 * Includes sidebar all widget ,blog widget,woocommece widget etc.
 * Also includes the WriteGen Helper file using the correct path.
 * This file provides essential functions and utilities for the WriteGen plugin.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include(plugin_dir_path(dirname(__FILE__)) . '/Helper/wrig-helper.php');

 //All options variables
  $wrig_blog_widget = get_option('wrig_blog_widget');
  $wrig_woocommerce_widget = get_option('wrig_woocommerce_widget');
  $wrig_writegen_mode = get_option('wrig_writegen_mode');
  $wrig_blog_title =  get_option('wrig_blog_title');
  $wrig_blog_content =  get_option('wrig_blog_content');
  $wrig_blog_outline = get_option('wrig_blog_outline');
  $wrig_blog_tags =  get_option('wrig_blog_tags');
  $wrig_rewrite_content = get_option('wrig_rewrite_content');
  $wrig_brief_generate = get_option('wrig_brief_generate');
  $wrig_paragraph_compression = get_option('wrig_paragraph_compression');
  $wrig_related_keywords = get_option('wrig_related_keywords');
  $wrig_find_question = get_option('wrig_find_question');
  $wrig_short_story =  get_option('wrig_short_story');
  $wrig_woocommerce_product_title = get_option('wrig_woocommerce_product_title');
  $wrig_woocommerce_short_desc = get_option('wrig_woocommerce_short_desc');
  $wrig_woocommerce_long_desc =  get_option('wrig_woocommerce_long_desc');
  $post_type = get_post_type();

  ?>
<div class="wrig-sidebar-main-content wrig-all-widget-canvas">

   <div class="wrig-sidebar-content wrig-sidebar-content-body">
      <!-- sidebar widget title -->
      <h3 class="wrig-widget-header-title"><?php echo esc_html__('Write Using Templates', 'writegen'); ?></h3>
      <?php
      if($wrig_blog_widget === "on"){
         ?><!-- card -->
         <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-widget">
            <div class="wrig-widget-icon">
               <span>
                  <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-wizard.svg' ); ?>" alt="<?php echo esc_attr__( 'blog-wizard', 'writegen' )?>">
               </span>
            </div>
            <div class="wrig-widget-content">
               <h3 class="wrig-widget-title"><?php echo esc_html__('Blog Widget', 'writegen'); ?></h3>
               <p><?php echo esc_html__('Enhance blog article for SERP success — from keywords to ranking content.', 'writegen'); ?></p>
            </div>
         </div>
         <?php
      }
      
      if($wrig_woocommerce_widget === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'post') echo 'wrig-product-widget'; ?>" id="wrig-woocommerce-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-wizard.svg' ); ?>" alt="<?php echo esc_attr__( 'woocommerce-wizard', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('WooCommerce Widget', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Acquire SEO-optimized, conversion-friendly content for WooCommerce Product.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_writegen_mode === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start" id="wrig-writegen-mode-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/plugin-mode.svg' ); ?>" alt="<?php echo esc_attr__( 'plugin-mode', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('WriteGen Mode', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Create anything you desire using Writegen Mode assistance.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_blog_title === "on"){
      ?> <!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-title-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/related-keywords.svg' ); ?>" alt="<?php echo esc_attr__( 'related-keywords', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Blog Title', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Craft SEO-friendly titles effortlessly with our title generator tool.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_blog_content === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-content-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-content.svg' ); ?>" alt="<?php echo esc_attr__( 'blog-content', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Blog Content', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Effortlessly create comprehensive and high-quality content with our content generation tool.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_blog_outline === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-outline-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-outline.svg' ); ?>" alt="<?php echo esc_attr__( 'blog-outline', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Blog Outline', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Effortlessly create outlines for your content with our outline generation feature.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_blog_tags === "on"){
      ?> <!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-tags-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/blog-tags-generate.svg' ); ?>" alt="<?php echo esc_attr__( 'blog-tags-generate', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Blog Tags Generate', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Effortlessly create trending blog tags with our tool.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_rewrite_content === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-rewrite-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/rewrite-content.svg' ); ?>" alt="<?php echo esc_attr__( 'rewrite-content', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Rewrite Content', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Effortlessly enhance and refresh your content with our rewriting tool.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_brief_generate === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-brief-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/brief-generate.svg' ); ?>" alt="<?php echo esc_attr__( 'brief-generate', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Brief Generate', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Effortlessly generate user-friendly project briefs with our specialized brief generation tool.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_paragraph_compression === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'product') echo 'wrig-post-widget'; ?>" id="wrig-blog-prg-compression-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url(WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/paragraph-compression.svg'); ?>" alt="<?php echo esc_attr__( 'paragraph-compression', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Paragraph Compression', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Simplify paragraphs while retaining key content with our paragraph compression tool.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_related_keywords === "on") {
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start" id="wrig-blog-related-keywords-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url(WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/related-keywords.svg'); ?>" alt="<?php echo esc_attr__( 'related-keywords', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"> <?php echo esc_html__('Related Keyword', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Easily find related keywords with our smart tool for better content.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_find_question === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start" id="wrig-blog-find-question-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/find-question.svg' ); ?>" alt="<?php echo esc_attr__( 'find-question', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Find Question', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Seamlessly discover questions within content using our Find Question feature.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_short_story === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start" id="wrig-blog-short-story-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/short-strong.svg' ); ?>" alt="<?php echo esc_attr__( 'short-strong', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('Short Story', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Craft concise and engaging short stories with impactful narratives.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_woocommerce_product_title === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'post') echo 'wrig-product-widget'; ?>" id="wrig-product-title-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url( WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-product-title.svg' ); ?>" alt="<?php echo esc_attr__( 'woocommerce-product-title', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('WooCommerce Product Title', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Craft catchy WooCommerce product titles for higher visibility and engagement.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_woocommerce_short_desc === "on"){
     
      ?><div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'post') echo 'wrig-product-widget'; ?>" id="wrig-product-short-des-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url(WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-short-desc.svg'); ?>" alt="<?php echo esc_attr__( 'woocommerce-short-desc', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('WooCommerce Short Description', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Compose succinct and compelling short descriptions for your WooCommerce products.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      if($wrig_woocommerce_long_desc === "on"){
      ?><!-- card -->
      <div class="wrig-widget-card wrig-d-flex wrig-align-items-start <?php if ($post_type === 'post') echo 'wrig-product-widget'; ?>" id="wrig-product-long-des-widget">
         <div class="wrig-widget-icon">
            <span>
               <img src="<?php echo esc_url(WRIG_PLUGIN_ASSETS.'assets/admin/img/icons/widgets/woocommerce-long-desc.svg'); ?>" alt="<?php echo esc_attr__( 'woocommerce-long-desc', 'writegen' )?>">
            </span>
         </div>
         <div class="wrig-widget-content">
            <h3 class="wrig-widget-title"><?php echo esc_html__('WooCommerce Long Description', 'writegen'); ?></h3>
            <p><?php echo esc_html__('Craft detailed and engaging long product descriptions for your WooCommerce offerings.', 'writegen'); ?></p>
         </div>
      </div>
      <?php
      }
      ?>
      </div>
</div>