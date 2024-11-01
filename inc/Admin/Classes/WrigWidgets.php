<?php
/**
 * Widgets Class
 * Manages the rendering of custom widgets in the WordPress admin dashboard.
 */

namespace Writegen\Admin\Classes;
use Writegen\Admin\Classes\Widgets\Common\WidgetHeader;
use Writegen\Admin\Classes\Widgets\Common\WidgetFooter;
use Writegen\Admin\Classes\Widgets\{
   Widget,
   BlogWidget,
   WoocommerceWidget,
   WritegenModeWidget,
   BlogBriefWidget,
   BlogContentWidget,
   BlogOutlinesWidget,
   BlogTagsWidget,
   BlogRewriteWidget,
   ParagraphCompressionWidget,
   RelatedTagsWidget,
   FindQuestionWidget,
   ShortStoryWidget,
   ProductTitleWidget,
   ProductLongDescWidget,
   ProductShortDescWidget,
   BlogTitleWidget,

};

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigWidgets {
     /**
     * Constructor
     * Initializes the widget rendering and other actions.
     */
   public function __construct() {
      // Hook for "Add New Post" page
      add_action('admin_footer', array($this, 'wrig_add_custom_canvas_widget_condition'));
    
   }
  
    // Add the custom canvas content conditionally based on screen type
     public function wrig_add_custom_canvas_widget_condition() {
      global $post;
      $current_screen = get_current_screen();

      // Check if the current screen is the WooCommerce product edit screen
      if (class_exists('WooCommerce') && $current_screen && $current_screen->post_type === 'product') {
         // This is the WooCommerce product edit screen, call the WooCommerce hook
         $this->wrig_add_custom_canvas_widget_content();
      } else {
         // If it's not the WooCommerce product edit screen, call the "Add New Post" hook
         $this->wrig_add_custom_canvas_widget_content();
      }
   }
   // Add the custom canvas content after the WordPress top bar
   public function wrig_add_custom_canvas_widget_content() {
      // Array of widgets to be rendered
      $widgets = [
         ['class' => Widget::class, 'method' => 'wrig_all_widget_html'],
         ['class' => WoocommerceWidget::class, 'method' => 'wrig_woocommerce_widget_html'],
         ['class' => BlogWidget::class, 'method' => 'wrig_blog_widget_html_content'],
         ['class' => WritegenModeWidget::class, 'method' => 'wrig_writegen_mode_html'],
         ['class' => BlogContentWidget::class, 'method' => 'wrig_blog_content_html'],
         ['class' => BlogOutlinesWidget::class, 'method' => 'wrig_blog_outlines_html'],
         ['class' => BlogTagsWidget::class, 'method' => 'wrig_blog_tags_html'],
         ['class' => BlogRewriteWidget::class, 'method' => 'wrig_blog_rewrite_html'],
         ['class' => BlogBriefWidget::class, 'method' => 'wrig_blog_brief_html'],
         ['class' => ParagraphCompressionWidget::class, 'method' => 'wrig_paragraph_compression_html'],
         ['class' => RelatedTagsWidget::class, 'method' => 'wrig_related_tags_html'],
         ['class' => FindQuestionWidget::class, 'method' => 'wrig_find_question_html'],
         ['class' => ShortStoryWidget::class, 'method' => 'wrig_short_story_html'],
         ['class' => ProductTitleWidget::class, 'method' => 'wrig_product_title_html'],
         ['class' => ProductLongDescWidget::class, 'method' => 'wrig_product_long_desc_html'],
         ['class' => ProductShortDescWidget::class, 'method' => 'wrig_product_short_desc_html'],
         ['class' => BlogTitleWidget::class, 'method' => 'wrig_single_blog_title_html'],
      ];
      // Render the widget header
      $widget_header =  new WidgetHeader();
      $widget_render = $widget_header->wrig_widget_header_html();
       // Loop through and render each widget
      foreach ($widgets as $widget) {
               $className = $widget['class'];
               $methodName = $widget['method'];
               $widgetInstance = new $className();
               $widgetHtml = $widgetInstance->$methodName();
            }
      // Render the widget footer
      $widget_footer =  new WidgetFooter();
      $widget_render = $widget_footer->wrig_widget_footer_html();
      
   }

}
