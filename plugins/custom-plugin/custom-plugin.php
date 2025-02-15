<?php
/*
Plugin Name: Custom Plugin
Description: A custom WordPress plugin that adds an admin dashboard page.
Version: 1.0
Author: Rob A. Gruen
License: GPL2
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

// Add admin menu
function custom_admin_dashboard_page()
{
  add_menu_page(
    'Custom Dashboard',       // Page title
    'Custom Dashboard',       // Menu title
    'manage_options',         // Capability
    'custom-dashboard',       // Menu slug
    'custom_dashboard_content', // Callback function
    'dashicons-admin-generic', // Icon
    2                         // Position
  );
}
add_action('admin_menu', 'custom_admin_dashboard_page');

// Content of the custom dashboard page
function custom_dashboard_content()
{
?>
  <div class="wrap">
    <h1>Welcome to the Custom Dashboard</h1>
    <p>This is a custom admin dashboard page.</p>
  </div>
<?php
}
