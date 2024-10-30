<?php
/**
Plugin Name: Checkout Mestres do WP Addon AppMax
Plugin URI: http://www.mestresdowp.com.br/
Description: Personaliza os campos do AppMax no Checkout Mestres do WP..
Version: 1.0.2
Author: Mestres do WP
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: checkout-mwp-addon-appmax
 */
 /*
	Copyright 2021  Mestres do WP  (email : contato@mestresdowp.com.br)
*/
define( 'CWMP_APPMAX_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CWMP_APPMAX_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

function addon_appmax_extensions_check_checkout () {
	if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	  	echo "<div class='error'><p>É necessário utilizar o plugin <strong>WooCommerce</strong>.</p></div>";
	}
	if ( ! is_plugin_active( 'checkout-mestres-wp/checkout-woocommerce-mestres-wp.php' ) ) {
	  	echo "<div class='error'><p>É necessário utilizar o plugin <strong>Checkout Mestres WP</strong>, <a href='update.php?action=install-plugin&plugin=checkout-mestres-wp&_wpnonce=c2bbda7f10'>clique aqui para instalar</a>. </p></div>";
	}
}
add_action('admin_notices', 'addon_appmax_extensions_check_checkout');

add_filter( 'woocommerce_locate_template', 'cwmp_woo_template_appmax_basic_checkout', 110, 3 );
function cwmp_woo_template_appmax_basic_checkout( $template, $template_name, $template_path ) {
if('views/checkout/billet/form-appmax.php' == $template_name ){         
$template = CWMP_APPMAX_PLUGIN_PATH . 'templates/views/checkout/billet/form-appmax.php';   
}
return $template;
}

add_filter( 'woocommerce_locate_template', 'cwmp_woo_template_appmax_custom_checkout', 110, 3 );
function cwmp_woo_template_appmax_custom_checkout( $template, $template_name, $template_path ) {
if('views/checkout/credit-card/form-appmax.php' == $template_name ){         
$template = CWMP_APPMAX_PLUGIN_PATH . 'templates/views/checkout/credit-card/form-appmax.php';   
}
return $template;
}

add_filter( 'woocommerce_locate_template', 'cwmp_woo_template_appmax_pix_checkout', 110, 3 );
function cwmp_woo_template_appmax_pix_checkout( $template, $template_name, $template_path ) {
if('views/checkout/credit-card/form-default.php' == $template_name ){         
$template = CWMP_APPMAX_PLUGIN_PATH . 'templates/views/checkout/credit-card/form-default.php';   
}
return $template;
}

add_filter( 'woocommerce_locate_template', 'cwmp_woo_template_appmax_ticket_checkout', 110, 3 );
function cwmp_woo_template_appmax_ticket_checkout( $template, $template_name, $template_path ) {
if('views/checkout/pix/form-appmax.php' == $template_name ){         
$template = CWMP_APPMAX_PLUGIN_PATH . 'templates/views/checkout/pix/form-appmax.php';   
}
return $template;
}

function add_js_cwpm_addon_appmax($hook) {
	if(is_checkout()){
	wp_enqueue_style('cwpm_addon_css_card', CWMP_APPMAX_PLUGIN_URL . '/assets/css/card.css');
	wp_enqueue_style('cwpm_addon_appmax_css_style', CWMP_APPMAX_PLUGIN_URL . '/assets/css/style.css');
    wp_enqueue_script('cwpm_addon_card', CWMP_APPMAX_PLUGIN_URL . 'assets/js/card.js', array('jquery'), null, true);
    wp_enqueue_script('cwpm_addon_appmax_js_functions', CWMP_APPMAX_PLUGIN_URL . 'assets/js/functions.js', array('jquery'), null, true);
	}
}
add_action('wp_enqueue_scripts', 'add_js_cwpm_addon_appmax');