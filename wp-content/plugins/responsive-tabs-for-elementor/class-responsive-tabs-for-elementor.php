<?php
/**
 * Responsive_Tabs_For_Elementor class.
 *
 * @category   Class
 * @package    ResponsiveTabsForElementor
 * @subpackage WordPress
 * @author     UAPP LLC
 * @copyright  2022 UAPP LLC
 * @license    https://opensource.org/licenses/GPL-3.0 GPL-3.0-only
 * @link
 * @since      5.0.0
 * php version 7.2.34
 */
if ( ! defined( 'ABSPATH' ) ) {
    // Exit if accessed directly.
    exit;
}
/**
 * Main Responsive Tabs For Elementor Class
 *
 * The init class that runs the Responsive Tabs For Elementor plugin.
 * Intended To make sure that the plugin's minimum requirements are met.
 */
final class Responsive_Tabs_For_Elementor {
    /**
     * Plugin Version
     *
     * @since 5.0.0
     * @var string The plugin version.
     */
    const VERSION = '5.0.0';
    /**
     * Minimum Elementor Version
     *
     * @since 5.0.0
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '3.4.8';
    /**
     * Minimum PHP Version
     *
     * @since 5.0.0
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.2.34';
    /**
     * Constructor
     *
     * @since 5.0.0
     * @access public
     */
    public function __construct() {
        add_action( 'elementor/elements/categories_registered', [ $this, 'register_category' ] );
        // Load the translation.
        add_action( 'init', array( $this, 'i18n' ) );
        // Initialize the plugin.
        add_action( 'plugins_loaded', array( $this, 'init' ) );
    }

    /**
     *
     * Register Responsive Tabs For Elementor category
     *
     */
    public function register_category( $elements_manager ) {

        $elements_manager->add_category(
            'responsive_tabs',
            [
                'title' => __( 'Responsive Tabs', 'responsive-tabs-for-elementor' ),
                'icon' => 'fa fa-plug',
            ]
        );
    }

    /**
     * Load Textdomain
     *
     * Load plugin localization files.
     * Fired by `init` action hook.
     *
     * @since 5.0.0
     * @access public
     */
    public function i18n() {
        load_plugin_textdomain( 'responsive-tabs-for-elementor' );
    }
    /**
     * Initialize the plugin
     *
     * Validates that Elementor is already loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed include the plugin class.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 5.0.0
     * @access public
     */
    public function init() {
        // Check if Elementor installed and activated.
        if ( ! did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', array( $this, 'admin_notice_missing_main_plugin' ) );
            return;
        }
        // Check for required Elementor version.
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            add_action( 'admin_notices', array( $this, 'admin_notice_minimum_elementor_version' ) );
            return;
        }
        // Check for required PHP version.
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', array( $this, 'admin_notice_minimum_php_version' ) );
            return;
        }
        // Once we get here, We have passed all validation checks so we can safely include our widgets.
        require_once 'class-widgets.php';

        // Elementor Editor Styles
        add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'editor_scripts' ] );
    }

    /**
     *
     * Enqueue Elementor Editor Styles
     *
     */
    public static function editor_scripts() {
        wp_enqueue_style( 'responsive-tabs-editor', plugins_url('/assets/css/responsive-tabs-editor.css', RESPONSIVE_TABS_FOR_ELEMENTOR) );
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     *
     * @since 5.0.0
     * @access public
     */
    public function admin_notice_missing_main_plugin() {
        deactivate_plugins( plugin_basename( RESPONSIVE_TABS_FOR_ELEMENTOR ) );
        return sprintf(
            wp_kses(
                '<div class="notice notice-warning is-dismissible"><p><strong>"%1$s"</strong> requires <strong>"%2$s"</strong> to be installed and activated.</p></div>',
                array(
                    'div' => array(
                        'class'  => array(),
                        'p'      => array(),
                        'strong' => array(),
                    ),
                )
            ),
            'Responsive Tabs For Elementor',
            'Elementor'
        );
    }
    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     *
     * @since 5.0.0
     * @access public
     */
    public function admin_notice_minimum_elementor_version() {
        deactivate_plugins( plugin_basename( RESPONSIVE_TABS_FOR_ELEMENTOR ) );
        return sprintf(
            wp_kses(
                '<div class="notice notice-warning is-dismissible"><p><strong>"%1$s"</strong> requires <strong>"%2$s"</strong> version %3$s or greater.</p></div>',
                array(
                    'div' => array(
                        'class'  => array(),
                        'p'      => array(),
                        'strong' => array(),
                    ),
                )
            ),
            'Responsive Tabs For Elementor',
            'Elementor',
            self::MINIMUM_ELEMENTOR_VERSION
        );
    }
    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     *
     * @since 5.0.0
     * @access public
     */
    public function admin_notice_minimum_php_version() {
        deactivate_plugins( plugin_basename( RESPONSIVE_TABS_FOR_ELEMENTOR ) );
        return sprintf(
            wp_kses(
                '<div class="notice notice-warning is-dismissible"><p><strong>"%1$s"</strong> requires <strong>"%2$s"</strong> version %3$s or greater.</p></div>',
                array(
                    'div' => array(
                        'class'  => array(),
                        'p'      => array(),
                        'strong' => array(),
                    ),
                )
            ),
            'Responsive Tabs For Elementor',
            'Elementor',
            self::MINIMUM_ELEMENTOR_VERSION
        );
    }
}
// Instantiate Responsive_Tabs_For_Elementor.
new Responsive_Tabs_For_Elementor();