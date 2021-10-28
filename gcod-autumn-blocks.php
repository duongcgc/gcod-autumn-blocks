<?php
/*
    Plugin Name: GCOD Blocks for Autumn
    Plugin URI: https://themeforest.net/gcodesign/
    Description: GCOD Gutenberg Blocks for Autumn Theme
    Version: 1.0.0
    Author: CGO Design Team
    Author URI: https://gcodesign.com/wordpress-plugins/
    Text Domain: gco-autumn
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Define path to plugin directory.
define('GCOD_AUTUMN_BLOCKS_PATH', plugin_dir_path(__FILE__));

// Define URL to plugin directory.
define('GCOD_AUTUMN_BLOCKS_URL', plugin_dir_url(__FILE__));

class GcoAutumnBlocks {
    private static $instance;
    private $gcod_components_dir = 'blocks';
    private $gcod_inc_dir = 'inc';

    /**
     * GcoAutumnBlocks constructor.
     */
    public function __construct() {

        $this->setup();
        $this->blocks();

        // Load custom widgets assets        
        add_action('enqueue_block_assets', array($this, 'gcod_custom_widgets_assets'));
        add_action('wp_enqueue_scripts', array($this, 'gcod_custom_widgets_assets'));


        // Customize the url setting to fix incorrect asset URLs. => Load custom blocks assets
        add_filter('lzb/plugin_url', array($this, 'gcod_lzb_url'));
        add_action('enqueue_block_assets', array($this, 'gcod_custom_blocks_assets'));

        // Remove lazy block wrapper 
        add_filter('lzb/block_render/allow_wrapper', array($this, 'gcod_block_render_allow_wrapper'), 10, 3);

        // Hide Admin Menu
        add_filter('lzb/show_admin_menu', '__return_false');
    }


    public static function getInstance() {

        if (!isset(self::$instance) && !(self::$instance instanceof GcoAutumnBlocks)) {
            self::$instance = new GcoAutumnBlocks();
        }

        return self::$instance;
    }

    public function setup() {    
        
        if (!defined('GCOD_AUTUMN_THEME_PATH')) {
            define('GCOD_AUTUMN_THEME_PATH', get_template_directory() . '/');
        }

        if (!defined('GCOD_AUTUMN_THEME_URL')) {
            define('GCOD_AUTUMN_THEME_URL', get_template_directory() . '/');
        }

        if (!defined('GCOD_AUTUMN_BLOCKS_INC_PATH')) {
            define('GCOD_AUTUMN_BLOCKS_INC_PATH', plugin_dir_path(__FILE__) . $this->gcod_inc_dir);
        }

        if (!defined('GCOD_AUTUMN_BLOCKS_INC_URL')) {
            define('GCOD_AUTUMN_BLOCKS_INC_URL', plugin_dir_url(__FILE__) . $this->gcod_inc_dir);
        }

        if (!defined('GCOD_AUTUMN_BLOCKS_PATH')) {
            define('GCOD_AUTUMN_BLOCKS_PATH', plugin_dir_path(__FILE__) . $this->gcod_components_dir);
        }

        if (!defined('GCOD_AUTUMN_BLOCKS_URL')) {
            define('GCOD_AUTUMN_BLOCKS_URL', plugin_dir_url(__FILE__) . $this->gcod_components_dir);
        }
    }

    // => Enqueue your custom widgets 
    function gcod_custom_widgets_assets() {
        wp_enqueue_style(
            'gcod-custom-widget-styles',
            GCOD_AUTUMN_THEME_URL . 'assets/css/gcod-widgets.css',
            false,
            wp_get_theme()->get('Version')
        );

        wp_enqueue_script(
            'gcod-custom-widget-scripts',
            GCOD_AUTUMN_THEME_URL . 'assets/js/gcod-widgets.js',
            array(),
            true,
            wp_get_theme()->get('Version')
        );
    }

    // Blocks plugin-in
    function gcod_lzb_url($url) {
        return GCOD_LZB_URL;
    }

    // Disable add wrapper blocks
    function gcod_block_render_allow_wrapper($allow_wrapper, $attributes, $context) {
        // Disable all block wrapper
        return false;
    }

    /** 
     * Get all directories
     */
    function getDirContents($path, $exclude) {
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $files = array();
        foreach ($rii as $file)
            if (!$file->isDir()) {
                if (strpos($file->getPathname(), $exclude) === false) {
                    $files[] = $file->getPathname();
                }
            }
        return $files;
    }

    /**
     * Functions
     * Require all PHP files in the /$dir/ directory
     * If want excludes 
     */
    function gcod_require_all($dir, $exclude = '') {

        $files_dir = array();
        if ($exclude == '') {
            $files_dir = glob($dir . "/*.php");
            foreach ($files_dir as $function) {
                $function = basename($function);
                require $dir . '/' . $function;
            }
        } else {
            $files_dir = $this->getDirContents($dir, '_');
            foreach ($files_dir as $function) {
                if (strpos($function, '.php') !== false) {
                    require $function;
                }
            }
        }
    }

    // => Block modules
    public function blocks() {
        
        // Define path and URL to the LZB plugin.
        define('GCOD_LZB_PATH', GCOD_AUTUMN_BLOCKS_INC_PATH . '/lzb/');
        define('GCOD_LZB_URL', GCOD_AUTUMN_BLOCKS_INC_URL . '/lzb/');

        // Include the LZB plugin.
        require_once GCOD_LZB_PATH . 'lazy-blocks.php';


        // Register and load all blocks.         
        $this->gcod_require_all(GCOD_AUTUMN_BLOCKS_PATH . $this->gcod_components_dir, '_');
    }

    // => Enqueue your custom blocks 
    function gcod_custom_blocks_assets() {

        wp_enqueue_style(
            'gcod-custom-block-editor-styles',
            GCOD_AUTUMN_THEME_URL . 'assets/css/gcod-blocks.css',
            false,
            wp_get_theme()->get('Version')
        );

        wp_enqueue_script(
            'gcod-custom-block-editor-scripts',
            GCOD_AUTUMN_THEME_URL . 'assets/js/gcod-blocks.js',
            array(),
            true,
            wp_get_theme()->get('Version')
        );
    }
}

// Init instance core to launch
return GcoAutumnBlocks::getInstance();
