<?php

/**
 * Plugin Name: Remove default Dashboard metaboxes
 * Description: Remove default Dashboard metaboxes
 * Version: 0.0.1
 * Plugin URI: https://github.com/teknologi/remove-default-dashboard-metaboxes
 * Author: Hans Czajkowski Jørgensen
 * Text Domain: teknologi_remove_default_dashboard_metaboxes
 * Domain Path: /languages
 * License:     GPL2

 * Remove default Dashboard metaboxes is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 2 of the
 * License, or any later version.
*
 * Remove default Dashboard metaboxes is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with Remove default Dashboard metaboxes. If not, see
 * https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
*/
namespace Teknologi;

/**
 * Remove default Dashboard metaboxes
 */
function remove_all_dashboard_metaboxes() {
    // Remove Welcome panel
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // Remove the rest of the dashboard widgets
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'wp_dashboard_setup', 'Teknologi\remove_all_dashboard_metaboxes' );