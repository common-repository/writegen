<?php
/**
 * MetaDescription Class
 * Handles custom meta box for wrig Meta Description in post editor.
 */
namespace Writegen\Admin\Classes\Metabox;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WrigMetaDescription {

    /**
     * Constructor
     * Hooks actions for adding meta box, saving meta description, and outputting meta tag.
     */
    public function __construct() {
        add_action('add_meta_boxes', array($this, 'wrig_add_custom_meta_box'));
        add_action('save_post', array($this, 'wrig_save_custom_meta_description'));
        add_action('wp_head', array($this, 'wrig_output_meta_description'));
    }

    /**
     * Adds a custom meta box to the post editor.
     */
    public function wrig_add_custom_meta_box() {
        add_meta_box(
            'wrig-meta-description',     // Unique ID
            'Writegen MetaDescription',     // Box title
            array($this, 'wrig_display_custom_meta_box'), // Callback function
            'post',                            // Post type where the box should appear
            'normal',                          // Box position (normal, side, advanced)
            'high'                             // Priority (high, core, default, low)
        );
    }

    /**
     * Displays the custom meta box in the post editor.
     *
     * @param object $post The post object.
     */
    public function wrig_display_custom_meta_box($post) {
        // Get the current value of the meta description
        $meta_description = get_post_meta($post->ID, '_wrig_meta_description', true);
        
        // Output the HTML for the meta description box
        ?>
        <input type="hidden" name="wrg_meta_nonce" value="<?php echo esc_html(wp_create_nonce('wrg_meta_action')); ?>">
        <textarea name="wrig-meta-description" class="wrig-meta-description" id="wrig-meta-description" rows="4" style="width: 100%;"><?php echo esc_textarea($meta_description); ?></textarea>
        <?php
    }

    /**
     * Saves the custom meta description when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function wrig_save_custom_meta_description($post_id) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

        // Check if the user has permissions to save
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if(isset($_POST['wrg_meta_nonce']) && !wp_verify_nonce( sanitize_text_field(wp_unslash($_POST['wrg_meta_nonce'])), 'wrg_meta_action')){
            return;
        }

        if (isset($_POST['wrig-meta-description'])) { //phpcs:ignore WordPress.Security.NonceVerification.Missing
            $meta_description = sanitize_text_field( wp_unslash($_POST['wrig-meta-description']) ); //phpcs:ignore WordPress.Security.NonceVerification.Missing
            update_post_meta($post_id, '_wrig_meta_description', $meta_description);
        }
    }

    /**
     * Outputs the meta description as a meta tag in the HTML head section.
     */
    public function wrig_output_meta_description() {
        global $post;
        if (!is_singular('post')) return;

        $meta_description = get_post_meta($post->ID, '_wrig_meta_description', true);
        if ($meta_description) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
        }
    }
}
