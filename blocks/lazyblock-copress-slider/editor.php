<?php
/**
 * @block-slug  :   gcod-photo-slider
 * @block-output:   gcod_photo_slider_output
 * @block-attributes: get from attributes.php
 */

// filter for Editor output.
add_filter('lazyblock/gcod-photo-slider/editor_callback', 'gcod_photo_slider_output', 10, 2);

if (!function_exists('gcod_photo_slider_output')) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function gcod_photo_slider_output($output, $attributes) {
        ob_start();
?>

        <?php if (isset($attributes['image']['url'])) : ?>
            <p>
                <img src="<?php echo esc_url($attributes['image']['url']); ?>" alt="<?php echo esc_attr($attributes['image']['alt']); ?>">
            </p>

            <?php if (isset($attributes['button-label'])) : ?>
                <p>
                    <a href="<?php echo esc_url($attributes['button-url']); ?>" class="button button-primary">
                        <?php echo esc_html($attributes['button-label']); ?>
                    </a>
                </p>
            <?php endif; ?>
        <?php else : ?>
            <p>Image is required to show this block content. (editor)</p>
        <?php endif; ?>

<?php
        return ob_get_clean();
    }
endif;

?>