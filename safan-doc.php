<?php

/**
 * Plugin Name:       Safan Doc
 * Plugin URI:        https://wprashed.com/safan-doc
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Md Rashed Hossain
 * Author URI:        https://wprashed.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       safan-doc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'safan_DOC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-safan-doc-activator.php
 */
function activate_safan_doc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-safan-doc-activator.php';
	safan_Doc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-safan-doc-deactivator.php
 */
function deactivate_safan_doc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-safan-doc-deactivator.php';
	safan_Doc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_safan_doc' );
register_deactivation_hook( __FILE__, 'deactivate_safan_doc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-safan-doc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_safan_doc() {

	$plugin = new safan_Doc();
	$plugin->run();

}
run_safan_doc();

// Require File

require_once( __DIR__ . '/public/inc.php' );

// Setup Carbon Fields

use Carbon_Fields\Container;
use Carbon_Fields\Field;

require_once "vendor/autoload.php";

function safan_doc_boot(){
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action('plugins_loaded', 'safan_doc_boot');


// Setup Single Template

function safan_doc_template( $file ) {
	global $post;
	if ( "doc" == $post->post_type ) {

		$file_path	= plugin_dir_path( __FILE__ ) . "/public/template/single-doc.php";
		$file 	= $file_path;
	}
	return $file;
}

add_filter ( 'single_template', 'safan_doc_template' );


// Meta Box

function safan_doc_general_metabox(){
	Container::make("post_meta",__('General Settings', 'safan-doc'))
	->where('post_type','=','doc')
	->add_fields([
		Field::make('image','safan_doc_logo',__('Logo', 'safan-doc')),
		Field::make('text','safan_doc_version',__('Version', 'safan-doc')),
		Field::make('text','safan_doc_copy_right',__('Copyright', 'safan-doc')),
	]);

	Container::make("post_meta",__('Style Settings', 'safan-doc'))
	->where('post_type','=','doc')
	->add_fields([
		Field::make('color','safan_doc_header_background',__('Header Backgound', 'safan-doc')),
		Field::make('color','safan_doc_header_color',__('Header Color', 'safan-doc')),
		Field::make('color','safan_doc_version_color',__('Version Color', 'safan-doc')),
		Field::make('color','safan_doc_sidebar_background_color',__('Sidebar Backgound Color', 'safan-doc')),
		Field::make('color','safan_doc_menu_color',__('Menu Color', 'safan-doc')),
		Field::make('color','safan_doc_active_menu_color',__('Active Menu Color', 'safan-doc')),
		Field::make('color','safan_doc_active_menu_border_color',__('Active Menu Border Color', 'safan-doc')),
	]);

	Container::make( 'post_meta', __('Sections', 'safan-doc') )
    ->where( 'post_type', '=', 'doc' )
    ->add_fields( array(
        Field::make( 'complex', 'safan_doc_sections', __('Main Section', 'safan-doc') )
            ->add_fields( array(
                Field::make('text','safan_doc_title',__('Setion Title', 'safan-doc')),
                Field::make('rich_text','safan_doc_description',__('Setion Description', 'safan-doc')),
                Field::make( 'complex', 'safan_doc_sub_sections',__('Sub Section', 'safan-doc') )
                    ->add_fields( array(
                        Field::make('text','safan_doc_sub_title',__('Setion Title', 'safan-doc')),
                		Field::make('rich_text','safan_doc_sub_description',__('Setion Description', 'safan-doc')),
                    ))
            )),
    ));

}
add_action('carbon_fields_register_fields', 'safan_doc_general_metabox');