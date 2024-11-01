<?php
/*

**************************************************************************

Plugin Name:  TinyMCE Chinese Convert
Plugin URI:   https://www.arefly.com/tinymce-chinese-convert/
Description:  一鍵在部落格「文章編輯」頁面將你的文章轉換為簡體或繁體
Version:      1.2.6
Author:       Arefly
Author URI:   https://www.arefly.com/

**************************************************************************

	Copyright 2014  Arefly  (email : eflyjason@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

**************************************************************************/

define("TINYMCE_CHINESE_CONVERT_PLUGIN_URL", plugin_dir_url( __FILE__ ));
define("TINYMCE_CHINESE_CONVERT_FULL_DIR", plugin_dir_path( __FILE__ ));
define("TINYMCE_CHINESE_CONVERT_TEXT_DOMAIN", "tinymce-chinese-convert");

function add_script_post_edit_page($hook) {
	if( ($hook == 'post.php') || ($hook == 'post-new.php') ){
		wp_enqueue_script('convert_to_difference_locate', '//file.arefly.com/convert_to_difference_locate.js');
		wp_enqueue_script('convert', TINYMCE_CHINESE_CONVERT_PLUGIN_URL . 'convert.min.js');
	}
}
add_action('admin_enqueue_scripts', 'add_script_post_edit_page');

function register_button($buttons) {
	array_push($buttons, "|", "convert_simplified");
	array_push($buttons, "|", "convert_traditional");
	return $buttons;
}

function add_plugin($plugin_array) {
	$plugin_array['convert_simplified'] = TINYMCE_CHINESE_CONVERT_PLUGIN_URL . 'convert_simplified.min.js';
	$plugin_array['convert_traditional'] = TINYMCE_CHINESE_CONVERT_PLUGIN_URL . 'convert_traditional.min.js';
	return $plugin_array;
}

function convert_simplified_posts_button() {
	if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
		return;
	}

	if ( get_user_option('rich_editing') == 'true' ) {
		add_filter('mce_external_plugins', 'add_plugin');
		add_filter('mce_buttons', 'register_button');
	}
}

function convert_traditional_posts_button() {
	if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
		return;
	}

	if ( get_user_option('rich_editing') == 'true' ) {
		add_filter('mce_external_plugins', 'add_plugin');
		add_filter('mce_buttons', 'register_button');
	}
}

add_action('init', 'convert_simplified_posts_button');
add_action('init', 'convert_traditional_posts_button');
