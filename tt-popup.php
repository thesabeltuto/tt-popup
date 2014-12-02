<?php
/*
	Plugin Name: TT-Popup
	Plugin URI: https://wordpress.org/plugins/tt-popup/
	Description: This plugin is a simplified popup plugin for all. Just add class "popup" in the &lt;a&gt; tag and anything inside it will be popped up! You can popup from images to forms to html pages! Dashboard is available for more info and advance set up of popups. Created by Thesabel Tuto. Based on FancyBox plugin.
	Version: 2.0.2
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com
	Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html

	Copyright 2014  THESABEL UY TUTO, CSNA, MBA  (email : thesabeltuto@gmail.com)

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
*/

// Define paths and variables
define('TT_POPUP_PLUGIN_FILE', __FILE__ );
define('TT_POPUP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TT_POPUP_PLUGIN_URL', plugin_dir_url(__FILE__));

// Load Plugin
add_action('init', 'load_TT_POPUP_PLUGIN_scripts');
if ( is_admin() ) {
	require_once(TT_POPUP_PLUGIN_DIR.'includes/admin.php');
	add_action('init', 'load_TT_POPUP_PLUGIN_in');
}


function load_TT_POPUP_PLUGIN_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('tt-popup-jquery.fancybox.js', TT_POPUP_PLUGIN_URL.'/js/jquery.fancybox.js');	
    wp_enqueue_script('tt-popup-thescripts.js', TT_POPUP_PLUGIN_URL.'/js/thescripts.js');	
	wp_enqueue_style('tt-popup-jquery.fancybox.css',  TT_POPUP_PLUGIN_URL.'/css/jquery.fancybox.css');
}

function load_TT_POPUP_PLUGIN_in() {
    wp_enqueue_script('tt-popup-admin.js', TT_POPUP_PLUGIN_URL.'/js/admin.js');	
	wp_enqueue_style('tt-popup-admin.css',  TT_POPUP_PLUGIN_URL.'/css/admin.css');
}

?>