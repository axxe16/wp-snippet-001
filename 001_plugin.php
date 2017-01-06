<?php
/*
Plugin Name: Example Plugin
*/

// se il file viene richiamato direttamente lo script si blocca
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * La funzione chiamata all'attivazione del plugin.
 */
function activate_smt_preset() {
	
}

/**
 * La funzione chiamata alla disattivazione del plugin
 */
function deactivate_smt_preset() {
	
}
register_activation_hook( __FILE__, 'activate_smt_preset' );
register_deactivation_hook( __FILE__, 'deactivate_smt_preset' );