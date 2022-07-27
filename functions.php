<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define Theme Version
 */

$theme_version = '';
$theme         = wp_get_theme();
if ( is_child_theme() ) {
	$theme = wp_get_theme( $theme->template );
}
$theme_version = $theme->version;
define( 'MOLLA_VERSION', $theme_version );                    // set current version

/**
 * Define variables
 */
define( 'MOLLA_DIR', get_parent_theme_file_path() );                // template directory
define( 'MOLLA_URI', get_parent_theme_file_uri() );                 // template directory uri
define( 'MOLLA_LIB', MOLLA_DIR . '/inc' );                          // library directory
define( 'MOLLA_PLUGINS', MOLLA_DIR . '/inc/plugins' );              // plugins directory
define( 'MOLLA_PLUGINS_URI', MOLLA_URI . '/inc/plugins' );          // plugins uri
define( 'MOLLA_ADMIN', MOLLA_LIB . '/admin' );                      // admin directory
define( 'MOLLA_CLASS', MOLLA_LIB . '/classes' );                    // class directory
define( 'MOLLA_OPTIONS', MOLLA_ADMIN . '/options' );                // theme options directory
define( 'MOLLA_CUSTOM_IMG', MOLLA_URI . '/inc/customizer/img' );    // customizer images
define( 'MOLLA_FUNCTIONS', MOLLA_LIB . '/functions' );              // functions directory
define( 'MOLLA_CSS', MOLLA_URI . '/assets/css' );                   // template css uri
define( 'MOLLA_JS', MOLLA_URI . '/assets/js' );                     // template js uri
define( 'MOLLA_VENDOR', MOLLA_URI . '/assets/vendor' );             // template vendor uri
define( 'MOLLA_PLUGINS_CSS', MOLLA_CSS . '/plugins' );              // template plugin-css uri

// Content Width
if ( ! isset( $content_width ) ) {
	$content_width = 1140;
}

if ( is_rtl() ) {

}

/**
 * Molla functions include
 */
require_once MOLLA_FUNCTIONS . '/functions.php';

require_once MOLLA_LIB . '/init.php';

// Custom subject lines of woocommerce emails to add customer billing first name 
// add_filter( 'woocommerce_email_subject_customer_on_hold_order', 'customizing_on_hold_email_subject', 10, 2 );
// function customizing_on_hold_email_subject( $formated_subject, $order ){
//     return __("This is the custom on hold order email notification subject", "woocommerce");
// }

// add_filter( 'woocommerce_email_subject_cancelled_order', 'customizing_cancelled_email_subject', 10, 2 );
// function customizing_cancelled_email_subject( $formated_subject, $order ){
//     return __("This is the custom on cancelled email notification subject", "woocommerce");
// }

// add_filter( 'woocommerce_email_subject_customer_refunded_order', 'customizing_refunded_email_subject', 10, 2 );
// function customizing_refunded_email_subject( $formated_subject, $order ){
//     return __("This is the custom on refunded email notification subject", "woocommerce");
// }

// add_filter( 'woocommerce_email_subject_failed_order', 'customizing_failed_email_subject', 10, 2 );
// function customizing_failed_email_subject( $formated_subject, $order ){
//     return __("This is the custom on failed email notification subject", "woocommerce");
// }
add_action( 'woocommerce_email_header', 'email_header_before', 1, 2 );
function email_header_before( $email_heading, $email ){
	$GLOBALS['email'] = $email;
};


// Removes data being displayed by WC_Shipment_Tracking_Actions class
$object=WC_Shipment_Tracking_Actions::get_instance();
remove_action( 'woocommerce_email_before_order_table', array( $object, 'email_display' ) ,0);


